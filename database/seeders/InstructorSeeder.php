<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InstructorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    \App\Models\Instructor::insert([
        ['name' => 'Prof. Alan Turing', 'department_id' => 1],
        ['name' => 'Prof. Ada Lovelace', 'department_id' => 1],
        ['name' => 'Prof. Isaac Newton', 'department_id' => 2],
    ]);
}

}
