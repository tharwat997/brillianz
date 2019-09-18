<?php

use Illuminate\Database\Seeder;
use Faker\Factory;

class CourseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();


        \App\Course::create([
            'name' => 'Bachelor of Education',
            'university_id' => 1,
            'cost' => $faker->randomDigit * 1250
        ]);

        \App\Course::create([
            'name' => 'Bachelor of Engineering',
            'university_id' => 1,
            'cost' => $faker->randomDigit * 1250
        ]);

        \App\Course::create([
            'name' => 'Bachelor of Fine Arts',
            'university_id' => 2,
            'cost' => $faker->randomDigit * 1250
        ]);

        \App\Course::create([
            'name' => 'Bachelor of Letters',
            'university_id' => 2,
            'cost' => $faker->randomDigit * 1250
        ]);

        \App\Course::create([
            'name' => 'Bachelor of Information Systems',
            'university_id' => 3,
            'cost' => $faker->randomDigit * 1250
        ]);

        \App\Course::create([
            'name' => 'Bachelor of Management',
            'university_id' => 3,
            'cost' => $faker->randomDigit * 1250
        ]);

        \App\Course::create([
            'name' => 'Bachelor of Music',
            'university_id' => 4,
            'cost' => $faker->randomDigit * 1250
        ]);

        \App\Course::create([
            'name' => 'Bachelor of Pharmacy',
            'university_id' => 4,
            'cost' => $faker->randomDigit * 1250
        ]);

        \App\Course::create([
            'name' => 'Bachelor of Philosophy',
            'university_id' => 5,
            'cost' => $faker->randomDigit * 1250
        ]);

        \App\Course::create([
            'name' => 'Bachelor of Social Work',
            'university_id' => 5,
            'cost' => $faker->randomDigit * 1250
        ]);

        \App\Course::create([
            'name' => 'Bachelor of Technology',
            'university_id' => 6,
            'cost' => $faker->randomDigit * 1250
        ]);

        \App\Course::create([
            'name' => 'Bachelor of Accountancy',
            'university_id' => 6,
            'cost' => $faker->randomDigit * 1250
        ]);

        \App\Course::create([
            'name' => 'Bachelor of Arts in Biology',
            'university_id' => 7,
            'cost' => $faker->randomDigit * 1250
        ]);

        \App\Course::create([
            'name' => 'Bachelor of Arts in Anthropology',
            'university_id' => 7,
            'cost' => $faker->randomDigit * 1250
        ]);

        \App\Course::create([
            'name' => 'Bachelor of Arts in Child Advocacy',
            'university_id' => 8,
            'cost' => $faker->randomDigit * 1250
        ]);

        \App\Course::create([
            'name' => 'Bachelor of Arts in Clinical Psychology',
            'university_id' => 8,
            'cost' => $faker->randomDigit * 1250
        ]);

        \App\Course::create([
            'name' => 'Bachelor of Science in Biomedical Engineering',
            'university_id' => 9,
            'cost' => $faker->randomDigit * 1250
        ]);

        \App\Course::create([
            'name' => 'Bachelor of Science in Chemical Engineering',
            'university_id' => 9,
            'cost' => $faker->randomDigit * 1250
        ]);

        \App\Course::create([
            'name' => 'Bachelor of Science in Computer Engineering',
            'university_id' => 10,
            'cost' => $faker->randomDigit * 1250
        ]);

        \App\Course::create([
            'name' => 'Bachelor of Science in Construction Engineering',
            'university_id' => 10,
            'cost' => $faker->randomDigit * 1250
        ]);


    }
}
