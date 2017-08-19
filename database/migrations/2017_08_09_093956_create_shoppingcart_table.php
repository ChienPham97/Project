<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShoppingcartTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('shoppingcart', function (Blueprint $table) {
            $table->string('id');
            $table->text('thumbnail');
            $table->string('name');
            $table->string('price');
            $table->integer('number');
            $table->nullableTimestamps();

        });
    }
    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::drop('shoppingcart');
    }
}
