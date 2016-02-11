<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('names', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
<<<<<<< HEAD
            $table->string('name',100)->nullable();
            $table->string('surname',100)->nullable();
            $table->string('family',100)->nullable();
            $table->string('egn_eik', 10)->nullable();
            $table->smallInteger('rtype')->nullable();
            $table->string('city',100)->nullable();
            $table->string('pcode',4)->nullable();
            $table->string('address',100)->nullable();
            $table->string('phone',20)->nullable();
            $table->string('email',50)->nullable();
            $table->text('description')->nullable();
            $table->text('notes')->nullable();
            $table->rememberToken()->nullable();
            $table->smallInteger('insert_from')->nullable();
            $table->smallInteger('update_from')->nullable();
            $table->timestamps();
=======
            $table->string('name')->nullable();
            $table->string('surname')->nullable();
            $table->string('family')->nullable();
            $table->string('egn_eik', 10)->nullable();
            $table->smallInteger('rtype')->nullable();
            $table->string('city')->nullable();
            $table->string('pcode')->nullable();
            $table->string('address')->nullable();
            $table->string('phone',20)->nullable();
            $table->string('email')->nullable();
            $table->text('description')->nullable();
            $table->text('notes')->nullable();
            $table->rememberToken()->nullable();
            $table->integer('insert_from')->nullable();
            $table->timestamp('insert_at')->nullable();
            $table->integer('update_from')->nullable();
            $table->timestamp('update_at')->nullable();
>>>>>>> d2e5093baf910f66b7bbfc051a597afebaf3557a
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('names');
    }
}
