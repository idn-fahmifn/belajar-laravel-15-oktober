<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Course;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Course::create([
        //     'course_name' => "Laravel Basic",
        //     'duration' => 3,
        //     'description' => "Laravel is an open-source PHP web framework designed by Taylor Otwell to make web development fast, clean, and elegant.",
        //     'user_id' => 1
        // ]);


        Course::factory(100)->create();

    }
}
