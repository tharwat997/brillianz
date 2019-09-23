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
            'name' => 'Economics BSc',
            'university_id' => 1,
            'link' => "https://www.exeter.ac.uk/undergraduate/degrees/economics/economics/",
            'cost' => rand(17500, 35000)
        ]);

        \App\Course::create([
            'name' => 'Economics and Finance BSc',
            'university_id' => 1,
            'link' => "https://www.exeter.ac.uk/undergraduate/degrees/economics/finance/",
            'cost' => rand(17500, 35000)
        ]);

        \App\Course::create([
            'name' => 'Engineering MEng',
            'university_id' => 1,
            'link' => "https://www.exeter.ac.uk/undergraduate/degrees/engineering/engineeringmeng/",
            'cost' => rand(17500, 35000)
        ]);

        \App\Course::create([
            'name' => 'Human Sciences BSc',
            'university_id' => 1,
            'cost' => rand(17500, 35000),
            'link' => "https://www.exeter.ac.uk/undergraduate/degrees/humansciences/humansciences/"
        ]);

        \App\Course::create([
            'name' => 'College of business',
            'university_id' => 2,
            'link' => "http://ju.ac.ae/colleges-and-programs/college-of-business/",
            'cost' => rand(5000, 8000),
        ]);

        \App\Course::create([
            'name' => 'College of Health Sciences',
            'university_id' => 2,
            'link' => "http://ju.ac.ae/colleges-and-programs/college-of-health-sciences/",
            'cost' => rand(5000, 8000),
        ]);

        \App\Course::create([
            'name' => 'College of Islamic and Arabic studies',
            'link' => "http://ju.ac.ae/colleges-and-programs/college-of-islamic-and-arabic-studies/",
            'university_id' => 2,
            'cost' => rand(5000, 8000),
        ]);

        \App\Course::create([
            'name' => 'Bachelor of Information Systems',
            'link' => "http://www.alqasimia.ac.ae/en/academics/Pages/Programs.aspx",
            'university_id' => 3,
            'cost' => rand(5000, 9000)
        ]);

        \App\Course::create([
            'name' => 'Bachelor of Management',
            'link' => "http://www.alqasimia.ac.ae/en/academics/Pages/Programs.aspx",
            'university_id' => 3,
            'cost' => rand(5000, 9000)
        ]);

        \App\Course::create([
            'name' => 'Bachelor of Music',
            'university_id' => 4,
            'link' => "https://www.aus.edu/cas/performing-arts-program",
            'cost' => rand(7000, 9000)
        ]);

        \App\Course::create([
            'name' => 'Bachelor of science in physics',
            'link' => "https://www.aus.edu/department-of-physics/bachelor-of-science-in-physics",
            'university_id' => 4,
            'cost' => rand(7000, 9000)
        ]);


        \App\Course::create([
            'name' => 'Engineering and technology',
            'university_id' => 5,
            'link' => "http://alhosnuni.com/pages/Engineering-and-Technology/6/2.htm",
            'cost' => rand(7000, 10000),
        ]);

        \App\Course::create([
            'name' => 'Architecture and design',
            'university_id' => 5,
            'link' => "http://alhosnuni.com/pages/Architecture-and-Design/62/2.htm",
            'cost' => rand(7000, 10000),
        ]);

        \App\Course::create([
            'name' => 'Law',
            'university_id' => 5,
            'link' => "http://alhosnuni.com/pages/Law/65/2.htm",
            'cost' => rand(7000, 10000),
        ]);

        \App\Course::create([
            'name' => 'Arts',
            'university_id' => 6,
            'link' => "https://www.nyuad-artscenter.org/",
            'cost' => rand(5000, 9000),
        ]);

        \App\Course::create([
            'name' => 'Design',
            'university_id' => 6,
            'link' => "https://nyuad.nyu.edu/en/academics/divisions/arts-and-humanities/academic-programs/design.html",
            'cost' => rand(5000, 9000),
        ]);

        \App\Course::create([
            'name' => 'Computer Science',
            'university_id' => 6,
            'link' => "https://nyuad.nyu.edu/en/academics/undergraduate/majors-and-minors/computer-science-major.html",
            'cost' => rand(5000, 9000),
        ]);

        \App\Course::create([
            'name' => 'Aviation fighter',
            'university_id' => 7,
            'link' => "",
            'cost' => rand(24000, 30000),

        ]);
        \App\Course::create([
            'name' => 'Unmanned aerial vehicles technologies',
            'university_id' => 7,
            'link' => "",
            'cost' => rand(24000, 30000),
        ]);

        \App\Course::create([
            'name' => 'Helicopter aviation',
            'university_id' => 7,
            'link' => "",
            'cost' => rand(24000, 30000),
        ]);

        \App\Course::create([
            'name' => 'Bachelor of Dental Surgery',
            'university_id' => 8,
            'link' => "https://www.cuca.ae/type/bachelor-of-dental-surgery/",
            'cost' => rand(12300 , 25000),

        ]);
        \App\Course::create([
            'name' => 'Bachelor of Pharmacy',
            'university_id' => 8,
            'link' => "https://www.cuca.ae/type/bachelor-of-pharmacy/",
            'cost' => rand(12300 , 25000),
        ]);

        \App\Course::create([
            'name' => 'Bachelor of Business Administration',
            'university_id' => 8,
            'link' => "https://www.cuca.ae/type/business-administration-program-3/",
            'cost' => rand(12300 , 25000),
        ]);


    }
}
