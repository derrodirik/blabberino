<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
	/**
	 * Get the Users which can use this Profile
	 */
	public function users()
	{
		return $this->belongsToMany('App\User');
	}

    /**
     * Get the posts for the profile.
     */
    public function posts()
    {
        return $this->hasMany('App\Post');
    }
}
