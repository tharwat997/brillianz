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
            'name' => 'University of exeter dubai',
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
            'name' => 'Al hosn uni',
            'city_id' => 3
        ]);

        \App\University::create([
            'name' => 'NYU Abu DHBAI uni',
            'city_id' => 3
        ]);

        \App\University::create([
            'name' => 'Khalifa bin Zayed Air university ',
            'city_id' => 4
        ]);

        \App\University::create([
            'name' => 'CUCA City University College of Ajman',
            'city_id' => 5
        ]);

    }
}
