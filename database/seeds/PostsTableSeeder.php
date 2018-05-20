<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        $limit = 33;

        for ($i = 0; $i < $limit; $i++) {
        	DB::table('posts')->insert([
        		'title' => $faker->unique()->bothify('Hello ##??'),
        		'body' => $faker->text($maxNbChars = 700),
        		'slug' => $faker->unique()->bothify('Hello-??##?#'),
        		'created_at' => $faker->dateTime($max = 'now', $timezone = null),
        		'updated_at' => $faker->dateTime($max = 'now', $timezone = null)
        	]);
        }
    }
}
