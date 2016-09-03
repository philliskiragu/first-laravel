<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

use App\Journal;
class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /*
     * get journal entries for a specific user
     */

    public function journal()
    {
        return $this->hasMany('App\Journal');
    }
}
