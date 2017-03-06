<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {

            $table->increments('id');
            $table->text('title');
            $table->text('category');
            $table->text('brand');
            $table->float('price')->unsigned();
            $table->integer('user_id');
            $table->string('photo')->nullable();
            $table->text('condition')->nullable();
            $table->text('used_days')->nullable();
            $table->text('description')->nullable();

            $table->text('model')->nullable();
            $table->text('screen')->nullable();
            $table->text('rear_camera')->nullable();
            $table->text('front_camera')->nullable();
            $table->text('cpu')->nullable();
            $table->text('ram')->nullable();
            $table->text('internal_memory')->nullable();
            $table->text('battery_capacity')->nullable();
            $table->text('battery_type')->nullable();
            $table->text('color')->nullable();

            $table->integer('messages');
            $table->integer('total_views');
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
        Schema::dropIfExists('products');
    }
}
