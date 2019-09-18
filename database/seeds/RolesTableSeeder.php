<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Role::create([
           'name' => 'admin',
            'display_name' => 'admin',
            'description' => 'admin'
        ]);

        \App\Role::create([
            'name' => 'student',
            'display_name' => 'student',
            'description' => 'student'
        ]);

        \App\Role::create([
            'name' => 'agent',
            'display_name' => 'agent',
            'description' => 'agent'
        ]);
    }
}
