<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::resource('users', 'UsersController');

Route::get('/', function() {

	// Get all posts with letter Q
//	return Post::where('content', 'LIKE', '%Q%')->get();

	// Get number of posts per author
//	return Post::select(DB::raw('user_id, count(1) as post_count'))
//		->groupBy('user_id')
//		->get();

	// Only chaining that you don't specify "get" is
	// first(), find(), and all()

	// User scope for readability and DRYness
//	return Post::today()->get();

	// Get yesterday's posts by specifying between two dates
//	$yesterday = \Carbon\Carbon::yesterday();
//	return Post::whereBetween('created_at', [$yesterday, $yesterday->endOfDay()])
//		->get();

	// All dates that are parsed in Eloquent's getDates function, are Carbon dates
	// http://laravel.com/docs/4.2/eloquent#date-mutators
//	$post = Post::first();
//	return $post->created_at->diffForHumans();

	// If you need to iterate over information make sure to eager load with 'with' func
	// Example:

//	$posts = Post::all();
//	foreach($posts as $post) {
//		echo $post->author->name; // Executes 11 queries
//	}

	// vs

//	$posts = Post::with('author')->get();
//	foreach($posts as $post) {
//		echo $post->author->name; // Executes 11 queries
//	}
});
