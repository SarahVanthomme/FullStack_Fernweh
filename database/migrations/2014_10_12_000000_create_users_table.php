<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('role_id')->index()->unsigned()->nullable()->default('3');
            $table->integer('is_active')->default(1);
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable()->default('NULL');
            $table->bigInteger('address_id')->index()->unsigned()->nullable();
 /*           $table->bigInteger('zip_id')->index()->unsigned()->nullable();
            $table->bigInteger('city_id')->index()->unsigned()->nullable();*/
            //$table->integer('country_id')->index()->unsigned()->nullable();
            //$table->string('address')->default('');
            //$table->string('country')->default();
            $table->softDeletes();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
