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
            $table->year('year');
            $table->string('make');
            $table->string('model');
            $table->string('serial_number');
            $table->string('stock_number');
            $table->string('equipment_list')->nullable();
            $table->decimal('list_price', 8, 2);
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
