<?php

namespace App\Http\Controllers;

use App\Member;
use App\Fellowship;
use App\FamilyMember;
use App\Country;
use App\Http\Requests\MemberStoreRequest;
use Illuminate\Http\Request;
use Exception;
use Log;
use DB;
use Crypt;

class MemberController extends Controller
{

    public function __construct(Member $member, Fellowship $fellowship, Country $country, FamilyMember $family_member)
    {
        $this->member = $member;
        $this->fellowship = $fellowship;
        $this->country = $country;
        $this->family_member = $family_member;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countries = $this->country->all();
        $fellowships = $this->fellowship->where('status', 'Active')->get();

        return view('member.index', compact('countries', 'fellowships'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MemberStoreRequest $request)
    {
        // Retrieve the validated input data...
        $validated = $request->validated();

        // if ($validator->fails()) {
        //     // return redirect('post/create')
        //     //             ->withErrors($validator)
        //     //             ->withInput();
        //     return response()->json([
        //         'statusCode' => 1002,
        //         'status' => 'Error',
        //         'msg' => 'Validation fails.',
        //         'data' => $request->all()
        //     ]);
        // }

        // Get country id by country code.
        $country_id = $this->country->where('code', '=', $request->country)->pluck('id')->first();
        $request->merge(['country_id' => $country_id]);

        // Get all user selected fellowship id.
        $fellowship_item = [];
        foreach ($request->fellowship as $key => $value) {
            $fellowship_id = $this->fellowship->where('code', $request->fellowship[$key])->pluck('id')->first();
            array_push($fellowship_item, $fellowship_id);
        }

        // Set data if user select others option.
        if ($request->has('baptized_in_others')) {
            $request->merge(['baptized_in' => $request->baptized_in_others]);
        }

        // Set data if user select others option.
        if ($request->has('membership_in_others')) {
            $request->merge(['membership_in' => $request->membership_in_others]);
        }

        try {

            DB::beginTransaction();
            // Encrypt the ic number.
            $request->merge(['ic_number' => Crypt::encrypt($request->ic_number)]);
            $member = $this->member->create($request->all());

            $fellowships = $member->fellowships()->attach($fellowship_item);

            // Store the family member data.
            if (!is_null($request->name_family[0])) {
                foreach ($request->name_family as $key => $value) {
                    // Check the name or hp to get member id.
                    $family_member_id = $this->member->where('legal_name', $request->name_family[$key])
                                                     ->orWhere('chinese_name', $request->name_family[$key])
                                                     ->orWhere('nickname', $request->name_family[$key])
                                                     ->orWhere('mobile_phone', $request->phone_family[$key])
                                                     ->pluck('id')
                                                     ->first();
                    // Store the family data.
                    $family = new FamilyMember;
                    $family->member_id = $member->id;
                    $family->family_member_id = $family_member_id;
                    $family->name = $request->name_family[$key];
                    $family->relationship = $request->relationship_family[$key];
                    $family->mobile_phone = $request->phone_family[$key];
                    $family->save();
                }
            }

            DB::commit();

        } catch (Exception $e) {
            Log::error('MemberController :: store', array('data' => $e->getMessage()));
            DB::rollback();
            // Fail to save.
            return response()->json([
                'statusCode' => 1001,
                'status' => 'Error',
                'msg' => 'Fail to save the data.',
                'data' => $request->all()
            ]);
        }

        return response()->json([
            'statusCode' => 200,
            'status' => 'Success',
            'msg' => 'Sucessfully stored your data!',
            'data' => ''
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function show(Member $member)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function edit(Member $member)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Member $member)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy(Member $member)
    {
        //
    }

    public function populate_address(Request $request) {

        $memberList = $this->member->select('ic_number', 'id')->get();
        foreach ($memberList as $key => $value) {
            if (!empty($value->ic_number)) {
                // Decrypt all the ic and retrieve the address.
                if(Crypt::decrypt($value->ic_number) == $request->parent_ic) {
                    $data = $this->member->where('id', $value->id)->select('address1', 'address2', 'postcode', 'city', 'state', 'country_id')->first();
                    break;
                }
            } else {
                break;
            }
        }

        if (empty($data)) {
            return response()->json([
                'statusCode' => 201,
                'status' => 'Success',
                'msg' => 'No data found.',
                'data' => ''
            ]);
        }

        // Get the country.
        $data->country = $this->country->where('id', $data->country_id)->pluck('code')->first();
        unset($data->country_id);

        return response()->json([
            'statusCode' => 200,
            'status' => 'Success',
            'msg' => 'Sucessfully retrieve the address.',
            'data' => $data
        ]);
    }
}
