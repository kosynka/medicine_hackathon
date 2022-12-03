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
        Schema::create('records', function (Blueprint $table) {
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

            $table->text('complaints');
            $table->text('ill_anamnesis');
            $table->text('check_up_results');
            $table->text('life_anamnesis');
            $table->text('allergological_anamnesis');
            $table->text('objective_data');
            $table->text('examination');
            $table->text('treatment_plan');
            $table->text('other');

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
        Schema::dropIfExists('records');
    }
};
