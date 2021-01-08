<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblBarangaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_barangays', function (Blueprint $table) {
            $table->increments('id');
            $table->string('barangay_code');
            $table->string('barangay_description');
            $table->string('region_code');
            $table->string('province_code');
            $table->string('tbl_municipality_code');
            $table->timestamps();

            // $table->foreign('municipality_code')->references('id')->on('tbl_municipalities');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_barangays');
    }
}
