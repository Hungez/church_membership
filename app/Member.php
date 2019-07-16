<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table = 'members';

    protected $fillable = [
        "legal_name", "chinese_name" , "nickname" , "ic_number" , "email" ,
        "mobile_phone" , "house_phone" , "address1" , "address2", "postcode",
        "city" , "state" , "country_id", "baptized" , "baptized_in", "membership_in"
    ];

    public function country() {
        return $this->belongsTo('App\Country');
    }

    public function fellowships() {
        return $this->belongsToMany('App\Fellowship')->withTimestamps();
    }
}
