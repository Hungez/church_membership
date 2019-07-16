<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table = 'countries';

    public $timestamps = false;

    public function member() {
        return $this->hasMany('Member');
    }
}
