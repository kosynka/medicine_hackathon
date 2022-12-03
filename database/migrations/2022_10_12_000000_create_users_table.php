<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();

            $table->string('iin');
            $table->string('fio');
            $table->date('birth_date');

            $table->enum('sex',
                [
                    'male',
                    'female',
                ])->default('male');

            $table->string('email');
            $table->string('password');

            $table->foreignId('photo_id')
                ->nullable()
                ->constrained('files')
                ->cascadeOnUpdate();

            $table->foreignId('city_id')
                ->nullable()
                ->constrained('cities')
                ->cascadeOnUpdate();

            $table->enum('role',
                [
                    'doctor',
                    'patient',
                    'admin',
                ])->default('doctor');

            $table->foreignId('doctor_id')
                ->nullable()
                ->constrained('users')
                ->cascadeOnUpdate();

            $table->foreignId('hospital_id')
                ->nullable()
                ->constrained('hospitals')
                ->cascadeOnUpdate();

            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
