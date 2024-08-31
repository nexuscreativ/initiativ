<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('scholarships', function (Blueprint $table) {
            $table->id();
            $table->string('passport')->default();
            $table->string('fname');
            $table->string('mname');
            $table->string('lname');
            $table->string('email');
            $table->string('nin');
            $table->string('phone');
            $table->string('state');
            $table->string('lga');
            $table->datetime('dob');
            $table->string('institute');
            $table->string('department');
            $table->string('course');
            $table->string('current_session');
            $table->string('address');
            $table->enum('gender', ['male', 'female']);
            $table->string('level');
            $table->string('cgpa');
            $table->string('matric_no');
            $table->enum('status', ['pending', 'approved', 'rejected', 'suspended', 'banned'])->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('scholarships');
    }
};
