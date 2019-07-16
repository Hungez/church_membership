<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MemberStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'legal_name' => 'required|string',
            'chinese_name' => 'nullable|string',
            'nickname' => 'nullable|string',
            'ic_number' => 'required|numeric',
            'email' => 'nullable|email',
            'mobile_phone' => 'nullable|numeric',
            'house_phone' => 'nullable|numeric',
            'address1' => 'required',
            'address2' => 'nullable|string',
            'postcode' => 'nullable|numeric',
            'city' => 'required|string',
            'state' => 'required|string',
            'country' => 'required|string',
            'baptized' => 'required',
            'baptized_in' => 'required',
            'membership_in' => 'required',
            'fellowship' => 'required'
        ];
    }

    /**
     * Custom message for validation
     *
     * @return array
     */
    public function messages()
    {
        return [
            // 'email.required' => 'Email is required!',
            // 'name.required' => 'Name is required!',
            // 'password.required' => 'Password is required!'
        ];
    }
}
