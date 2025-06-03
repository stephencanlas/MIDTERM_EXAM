<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('courses', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->unsignedBigInteger('department_id');
        $table->unsignedBigInteger('instructor_id');
        $table->integer('credit_id');
        $table->timestamps();
    
        $table->foreign('department_id')->references('id')->on('departments')->onDelete('cascade');
        $table->foreign('instructor_id')->references('id')->on('instructors')->onDelete('cascade');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
