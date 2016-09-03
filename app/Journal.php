<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Journal extends Model
{
    protected $fillable = [
        'title',
        'body',
        'tags',
        'published_at'
    ];

    /*
     * get a user who owns the entry
     */

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
