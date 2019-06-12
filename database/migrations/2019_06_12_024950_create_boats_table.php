<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBoatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boats', function (Blueprint $table) {
            // todo: map camelCase to underscore in DB
            $table->bigIncrements('id');
            $table->timestamps();
//            $table->date('year');
            $table->integer('year', 4);
            $table->string('make');
            $table->string('model');
            $table->string('serialNumber');
            $table->string('stockNumber');
            $table->string('equipmentList');
            $table->string('equipmentList');
            $table->decimal('listPrice', 8, 2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('boats');
    }
}
