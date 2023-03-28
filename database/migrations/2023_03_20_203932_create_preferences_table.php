<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePreferencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('preferences', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('account_id')->index();
            $table->enum('objectives', ['Slimming','Hypertrophy','Cardiorespiratory_Fitness','Muscle_Recovery','Muscle_Definition'])->default('Slimming');
            $table->string('restrictions');
            $table->dateTime('dateSchedule', $precision = 0);
            $table->string('muscleGroup');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('preferences');
    }
}
