<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_addresses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('street')->nullable();
            $table->timestamps();
            
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('tbl_barangay_id');

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('tbl_barangay_id')->references('id')->on('tbl_barangays');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_addresses');
    }
}
