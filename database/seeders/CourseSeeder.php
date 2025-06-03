<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    \App\Models\Course::insert([
        ['title' => 'Intro to CS', 'instructor_id' => 1],
        ['title' => 'Algorithms', 'instructor_id' => 2],
        ['title' => 'Calculus', 'instructor_id' => 3],
    ]);
}

}
