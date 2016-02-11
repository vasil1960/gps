<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('names_id');
            $table->string('number',50)->nullable();
            $table->date('date')->nullable();
<<<<<<< HEAD
            $table->string('email',50)->nullable();
            $table->string('url')->nullable();
            $table->string('username',50)->nullable();
            $table->string('password',50)->nullable();
            $table->text('description')->nullable();
            $table->text('notes')->nullable();
            $table->smallInteger('insert_from')->nullable();
            $table->timestamp('insert_at')->nullable();
            $table->smallInteger('update_from')->nullable();
=======
            $table->string('email')->nullable();
            $table->string('username')->nullable();
            $table->string('password')->nullable();
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
        Schema::drop('request');
    }
}
