<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndexBannersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('index_banners', function (Blueprint $table) {
            $table->id();
            $table->string('name')->default('');
            $table->string('body')->default('');
         //   $table->boolean('type'); //maak hier id van en maak nieuwe tabel met deze twee types
            $table->bigInteger('photo_id')->unsigned()->index();
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
        Schema::dropIfExists('index_banners');
    }
}
