<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\DepartmentController;

Route::get('/', fn () => redirect()->route('courses.index'));

Route::resources([
    'courses' => CourseController::class,
    'students' => StudentController::class,
    'instructors' => InstructorController::class,
    'departments' => DepartmentController::class,
]);
