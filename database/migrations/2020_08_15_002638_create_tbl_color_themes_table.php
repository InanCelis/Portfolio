<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblColorThemesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_color_themes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('main_color')->default('#173bb1');
            $table->string('first_color')->default('#f9fafa');
            $table->string('second_color')->default('#ff006e');
            $table->string('third_color')->default('#000000');
            $table->string('forth_color')->default('#e5e5e5');
            $table->string('fifth_color')->default('#111010');
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
        Schema::dropIfExists('tbl_color_themes');
    }
}
