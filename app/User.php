<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model {

    protected $guarded = array('id');
    protected $fillable = array('name', 'email','phone','password','username');

    public static $rules = array(
        'name' => 'required|min:5',
        'email' => 'required|email'
    );
}