<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTripsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('trips', function (Blueprint $table) {
             $table->increments('id');
            $table->string('name');
            $table->string('location');
            $table->text('details');
            $table->integer('cat_id');
            $table->integer('lang');
            $table->integer('discount');
            $table->integer('deleted');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('trips');
    }

}
