<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FamilyMember extends Model
{
    protected $table = 'family_members';

    protected $fillable = ['member_id', 'family_member_id', 'name', 'relationship', 'mobile_phone'];

    public function members() {
        return $this->belongsTo('App\Member');
    }
}
