<?php

use Faker\Factory as Faker;

class PostsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			Post::create([
				'content' => $faker->text,
				'user_id' => $faker->numberBetween(1, 3)
			]);
		}
	}

}
