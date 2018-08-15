<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('results', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',100);
            $table->string('email',100);
            $table->integer('group_id')->nullable();
            $table->integer('activist');
            $table->integer('alt');
            $table->integer('demystifier');
            $table->integer('motivator');
            $table->integer('professional');
            $table->integer('professor');
            $table->integer('spirit_guide');
            $table->integer('taste_maker');
            $table->integer('teacher');
            $table->integer('techie');
            $table->integer('trendsetter');
            $table->integer('watchdog');
            $table->integer('protect');
            $table->integer('empower');
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
        Schema::dropIfExists('results');
    }
}
