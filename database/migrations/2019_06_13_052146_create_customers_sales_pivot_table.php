<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateCustomersSalesPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//        Schema::create('customers_sales', function (Blueprint $table) {
//            $table->integer('customer_id')->unsigned()->index();
//            $table->integer('sale_id')->unsigned()->index();
//            //$table->primary(['customer_id', 'sale_id']);
//        });
//
//        Schema::table('customers_sales', function($table) {
//            $table->foreign('customer_id')->references('id')->on('customers');
//            $table->foreign('sale_id')->references('id')->on('sales');
//        });

        Schema::create('customers_sales', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('customer_id')->unsigned();
            $table->integer('sale_id')->unsigned();

//            $table->foreign('customer_id')->references('id')->on('customers');
//            $table->foreign('sale_id')->references('id')->on('sales');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers_sales');
        //Schema::drop('customers_sales');
    }
}
