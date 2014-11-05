<?php

class UsersController extends BaseController
{

    public function index()
    {
        $users = User::with('posts')->get();

        return View::make('users.index')
            ->with('users', $users);
    }

}
