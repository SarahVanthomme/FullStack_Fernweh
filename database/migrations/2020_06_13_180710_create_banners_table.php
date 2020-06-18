<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBannersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banners', function (Blueprint $table) {
            $table->id();
            $table->string('name')->default('');
            $table->string('body')->default('');
            $table->bigInteger('continent_id')->unsigned()->index();
            $table->bigInteger('photo_id')->unsigned()->index();
            $table->timestamps();

            //FK implementeren
            $table->foreign('continent_id')->references('id')->on('continents');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('banners');
    }
}
