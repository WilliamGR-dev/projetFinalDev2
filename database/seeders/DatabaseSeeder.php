<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        for ($i = 0; $i < 10; $i++) {
            DB::table('news')->insert([
                'title' => $faker->title,
                'date' => $faker->date('Y-m-d'),
                'text_description' => $faker->text('20'),
                'full_text' => $faker->text('200'),
                'publish' => $faker->boolean,
                'autor' => 'Serveur',
            ]);
    }

    }
}
