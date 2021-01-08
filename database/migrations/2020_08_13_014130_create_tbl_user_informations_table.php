<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblUserInformationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_user_informations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('gender')->nullable();
            $table->longText('home_intro')->nullable();
            $table->longText('my_summary')->nullable();
            $table->string('home_photo')->nullable();
            $table->string('about_photo')->nullable();
            $table->timestamps();
            
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_user_informations');
    }
}
