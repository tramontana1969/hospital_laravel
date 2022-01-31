<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrescribedMedicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prescribed_medications', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('way_of_using');
            $table->unsignedBigInteger('medicine_id')->nullable(false);
            $table->integer('examine_id')->unsigned();

            $table->foreign('medicine_id')->references('id')->on('medicines');
            $table->foreign('examine_id')->references('id')->on('examines');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prescribed_medications');
    }
}
