<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class BlogTableSeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create();
        for($i=0; $i<=100; $i++):
            DB::table('blogs')
            ->insert([
                'title' => $faker->sentence,
                'body' => $faker->paragraph
            ]);
        endfor;
    }
}
