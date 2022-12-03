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
        Schema::create('diseases', function (Blueprint $table) {
            $table->id();

            $table->string('name');

            $table->enum('inspection_type',
                [
                    'initial',
                    'periodic',
                    'unscheduled',
                ])->default('initial');

            $table->foreignId('patient_id')
                ->nullable()
                ->constrained('users')
                ->cascadeOnUpdate();

            $table->foreignId('record_id')
                ->nullable()
                ->constrained('records')
                ->cascadeOnUpdate();

            $table->json('complaints');
            $table->json('ill_anamnesis');
            $table->json('check_up_results');
            $table->json('life_anamnesis');
            $table->json('allergological_anamnesis');
            $table->json('objective_data');
            $table->json('examination');
            $table->json('treatment_plan');
            $table->json('other');

            $table->foreignId('doctor_id')
                ->nullable()
                ->constrained('users')
                ->cascadeOnUpdate();

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
        Schema::dropIfExists('diseases');
    }
};
