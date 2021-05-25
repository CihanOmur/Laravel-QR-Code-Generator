<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Image extends Migration
{
    public function up()
    {
        Schema::create('qr_lists', function (Blueprint $table) {
            $table->id();
            $table->text('image');
            $table->string('name');
            $table->dateTime('time')->nullable()->current_timestamp();
            $table->rememberToken(rand(8,10));
        });
    }


    public function down()
    {
        Schema::dropIfExists('qr_list');
    }
}
