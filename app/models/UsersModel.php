<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class UsersModel extends Model
{
    public $table = 'users';
    public $timestamp = false;
    public function insert($info)
    {
        //return $this->where($info)->
    }
}
