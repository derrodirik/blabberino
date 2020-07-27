<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['content'];

	/**
	 * Get the profile that owns the comment.
	 */
	public function profile()
	{
		return $this->belongsTo('App\Profile');
	}

	/**
	 * Get the user that created the comment.
	 */
	public function creator()
	{
		return $this->belongsTo('App\User');
	}

	/**
	 * Get the original Post of the comment.
	 */
	public function creator()
	{
		return $this->belongsTo('App\Post');
	}
}
