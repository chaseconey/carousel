<?php

class Post extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [];

	public function author() {
		// Here we pass a key because laravel will look for author_id by default
		return $this->belongsTo('User', 'user_id');
	}

}
