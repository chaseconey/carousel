<?php

class UserTableSeeder extends Seeder
{

    public function run()
    {

        // Truncates the table
        DB::table('users')->delete();

        // Setup the fake data
        $users = [
            [
                "name" => "Chase Coney",
                "email" => "chase.coney@creditcards.com",
                "password" => Hash::make("test"),
                "age" => 23,
                "active" => true
            ],
            [
                "name" => "John Doe",
                "email" => "joe.doe@creditcards.com",
                "password" => Hash::make("test1"),
                "age" => 45,
                "active" => true
            ],
            [
                "name" => "Jane Doe",
                "email" => "jane.doe@creditcards.com",
                "password" => Hash::make("test2"),
                "age" => 8,
                "active" => false
            ]
        ];

        // Insert that data into the database
        DB::table('users')->insert($users);
    }

}
