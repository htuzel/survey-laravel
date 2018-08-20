<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMotivationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('motivations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('slug');
            $table->string('description',5000)->nullable();
            $table->string('protect1',1000)->nullable();
            $table->string('protect2',1000)->nullable();
            $table->string('protect3',1000)->nullable();
            $table->string('empower1',1000)->nullable();
            $table->string('empower2',1000)->nullable();
            $table->string('empower3',1000)->nullable();
            $table->string('strenghts',2000)->nullable();
            $table->string('challenges',2000)->nullable();
            $table->string('image')->nullable();
            $table->integer('count')->default(0);
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
        Schema::dropIfExists('motivations');
    }
}
