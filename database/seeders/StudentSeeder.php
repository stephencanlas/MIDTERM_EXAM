<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    $this->call([
        DepartmentSeeder::class,
        InstructorSeeder::class,
        CourseSeeder::class,
        StudentSeeder::class,
    ]);
}


}
