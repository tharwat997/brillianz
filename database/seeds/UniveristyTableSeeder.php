<?php

use Illuminate\Database\Seeder;

class UniveristyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        \App\University::create([
            'name' => 'Al Dar University College',
            'city_id' => 1
        ]);

        \App\University::create([
            'name' => 'Jumeira University',
            'city_id' => 1
        ]);

        \App\University::create([
            'name' => 'Al Qasimiya University',
            'city_id' => 2
        ]);

        \App\University::create([
            'name' => 'American University of Sharjah',
            'city_id' => 2
        ]);


        \App\University::create([
            'name' => 'Abu Dhabi University',
            'city_id' => 3
        ]);

        \App\University::create([
            'name' => 'Al Hosn University',
            'city_id' => 3
        ]);

        \App\University::create([
            'name' => 'Al Ain University of Science and Technology',
            'city_id' => 4
        ]);

        \App\University::create([
            'name' => 'INSEAD',
            'city_id' => 4
        ]);

        \App\University::create([
            'name' => 'Ajman University',
            'city_id' => 5
        ]);

        \App\University::create([
            'name' => 'Gulf Medical University',
            'city_id' => 5
        ]);
    }
}
