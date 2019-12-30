<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisaRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('visa_requests', function (Blueprint $table) {
           $table->increments('id');
            $table->string('name');
            $table->string('mobile');
            $table->string('mail');
            $table->integer('adults');
            $table->integer('children')->nullable();
            $table->integer('budget_from')->nullable();
            $table->integer('budget_to')->nullable();
            $table->text('state');
            $table->text('cities')->nullable();
            $table->integer('trip_id');
            $table->dateTime('start_date');
            $table->dateTime('end_date');
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
        Schema::dropIfExists('visa_requests');
    }
}
