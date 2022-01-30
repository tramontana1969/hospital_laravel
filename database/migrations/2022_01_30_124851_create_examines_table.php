<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExaminesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('examines', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->char('diagnosis', 64);
            $table->unsignedBigInteger('patient_id')->nullable(false);
            $table->date('date');
            $table->char('place', 48);
            $table->text('symptoms');
            $table->text('medical_prescription');
            $table->char('doctors_name');
            $table->foreign('patient_id')->references('id')->on('patients')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('examines');
    }
}
