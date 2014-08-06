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

// Individual Routes
Route::get('/', 'IndexController@index');

// RESTful Controller Routing
Route::controller('tweets', 'TweetsController');

// Resourceful Controller Routing
Route::resource('cars', 'CarsController');

// Callback Function Routing
Route::get('users', function() {
    return [
        [
            'name' => 'Chase Coney',
            'occupation' => 'Software Developer',
            'email' => 'chase.coney@creditcards.com',
            'age' => 25
        ],
        [
            'name' => 'John Doe',
            'occupation' => 'CEO of Apple',
            'email' => 'john.doe@creditcards.com',
            'age' => 105
        ],
        [
            'name' => 'Jane Doe',
            'occupation' => 'Gold Digger',
            'email' => 'jane.doe@creditcards.com',
            'age' => 22
        ]
    ];
});
