<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeaturedDishesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('featured_dishes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->integer('menu_category_id')->unsigned();
            $table->string('about');
            $table->string('peo');
            $table->string('ple');
            $table->integer('price');
            $table->boolean('status')->default('0');
            $table->foreign('menu_category_id')
                ->references('id')->on('menu_categories')
                ->constrained()->onDelete('cascade');
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
        Schema::dropIfExists('featured_dishes');
    }
}
