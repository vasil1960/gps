<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('autos', function (Blueprint $table) {
<<<<<<< HEAD
            $table->engine = 'InnoDB';
=======
            //$table->engine = 'InnoDB';
>>>>>>> d2e5093baf910f66b7bbfc051a597afebaf3557a
            $table->increments('id');
            $table->integer('names_id');
            $table->string('model', 50)->nullable();
            $table->string('number', 50)->nullable();
<<<<<<< HEAD
            $table->string('owner',100)->nullable();
            $table->text('description')->nullable();
            $table->text('notes')->nullable();
            $table->smallInteger('insert_from')->nullable();
            $table->timestamp('insert_at')->nullable();
            $table->smallInteger('update_from')->nullable();
=======
            $table->string('owner')->nullable();
            $table->text('description')->nullable();
            $table->text('notes')->nullable();
            $table->integer('insert_from')->nullable();
            $table->timestamp('insert_at')->nullable();
            $table->integer('update_from')->nullable();
>>>>>>> d2e5093baf910f66b7bbfc051a597afebaf3557a
            $table->timestamp('update_at')->nullable();
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('autos');
    }
}
