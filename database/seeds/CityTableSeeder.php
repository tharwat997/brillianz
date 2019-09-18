<?php

use Illuminate\Database\Seeder;

class CityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\City::create([
            'name' => 'Dubai'
        ]);

        \App\City::create([
            'name' => 'Sharjah'
        ]);

        \App\City::create([
            'name' => 'Abu Dhabi'
        ]);

        \App\City::create([
            'name' => 'Al Ain'
        ]);

        \App\City::create([
            'name' => 'Ajman'
        ]);
    }
}
