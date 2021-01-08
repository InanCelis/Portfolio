<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblMunicipalitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_municipalities', function (Blueprint $table) {
            $table->increments('id');
            $table->string('psg_code');
            $table->string('municipality_description');
            $table->string('region_description');
            $table->string('tbl_province_code');
            $table->string('code'); //municipal_code  //primary dapat to sa model
            $table->timestamps();
            
            // $table->foreign('province_code')->references('id')->on('tbl_provinces');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_municipalities');
    }
}
