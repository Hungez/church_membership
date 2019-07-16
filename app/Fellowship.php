<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fellowship extends Model
{
    protected $table = 'fellowships';

    public function members() {
        return $this->belongsToMany('App\Member');
    }
}
