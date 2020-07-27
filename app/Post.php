<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['content', 'short_live', 'pinned'];

    /**
     * Get the profile that owns the post.
     */
    public function profile()
    {
        return $this->belongsTo('App\Profile');
    }

	/**
	 * Get the user that created the post.
	 */
	public function creator()
	{
		return $this->belongsTo('App\User');
	}
}
