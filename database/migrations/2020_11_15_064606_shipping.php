<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Shipping extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
           Schema::create('shipping', function (Blueprint $table) {
            
            $table->increments('shipping_id');
             $table->string('shipping_email');
            $table->string('shipping_name');          
            $table->string('shipping_address');
           
            $table->string('shipping_phone');
           
            $table->string('shipping_city');
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
        //
    }
}
