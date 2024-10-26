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
        Schema::table('users', function (Blueprint $table) {
            $table->string('student_id')->unique()->nullable(); // номер студенческого билета
            $table->date('birth_date')->nullable(); // дата рождения
            $table->foreignId('institute_id')->nullable()->constrained()->onDelete('set null'); // связь с институтом
            $table->string('phone_number')->nullable(); // номер телефона
            $table->json('options')->nullable(); // номер телефона
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
