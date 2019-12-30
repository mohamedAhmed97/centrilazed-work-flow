<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('settings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('phone');
            $table->string('fax');
            $table->string('mail');
            $table->text('intro');
            $table->text('team');
            $table->string('logo');
            $table->text('location');
            $table->text('address');
            $table->string('facebook');
            $table->string('instegram');
            $table->string('twitter');
            $table->string('youtube');
            $table->string('snapchat');
            $table->string('vk');
            $table->string('whatsapp');
            $table->smallInteger('deleted');
            $table->smallInteger('lang');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('settings');
    }

}
