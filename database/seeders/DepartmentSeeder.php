<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    \App\Models\Department::insert([
        ['name' => 'Computer Science'],
        ['name' => 'Mathematics'],
        ['name' => 'Engineering'],
    ]);
}

}
