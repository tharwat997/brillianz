<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesTableSeeder::class);
        $this->call(UserTableDataSeeder::class);
        $this->call(CityTableSeeder::class);
        $this->call(UniveristyTableSeeder::class);
        $this->call(CourseTableSeeder::class);
    }
}
