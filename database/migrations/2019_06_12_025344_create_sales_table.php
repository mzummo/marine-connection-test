<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // create a pivot table Save/Customers
        Schema::create('sales', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->enum('saleStatus', ['quoted', 'pending', 'delivered-completed']);
            $this->decimal('salePrice', 8, 2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sales');
    }
}
