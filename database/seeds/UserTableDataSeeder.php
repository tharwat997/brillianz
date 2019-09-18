<?php

use Illuminate\Database\Seeder;

class UserTableDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = \App\User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'age' => 20,
            'number' => '123123123',
            'approved' => 1,
            'password' => \Illuminate\Support\Facades\Hash::make('password'),
        ]);

        $admin->attachRole('admin');

        $student = \App\User::create([
            'name' => 'student',
            'email' => 'student@gmail.com',
            'age' => 20,
            'number' => '123123123',
            'approved' => 1,
            'password' => \Illuminate\Support\Facades\Hash::make('password'),
        ]);

        $student->attachRole('student');

        $agent = \App\User::create([
            'name' => 'agent',
            'email' => 'agent@gmail.com',
            'age' => 20,
            'number' => '123123123',
            'approved' => 0,
            'password' => \Illuminate\Support\Facades\Hash::make('password'),
        ]);

        $agent->attachRole('agent');
    }
}
