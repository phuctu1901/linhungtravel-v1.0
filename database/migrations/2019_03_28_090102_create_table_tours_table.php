<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableToursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    
    public function up()
    {
        Schema::create('tours', function (Blueprint $table) {
            $table->uuid('id');
            $table->string('title');
            $table->text('images');
            $table->uuid('category_id');
            $table->smallInteger('location');
            $table->smallInteger('duration');
            $table->smallInteger('groupsize');
            $table->string('languages');
            $table->text('overview');
            $table->text('highlights');
            $table->text('itinerary');
            $table->bigInteger('adult_price');
            $table->string('price_included');
            $table->string('price_excluded');
            $table->text('faqs');
            $table->uuid('review_id');
            $table->decimal('rate',4,2);
            $table->boolean('isActive');
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
        Schema::dropIfExists('tours');
    }
}
