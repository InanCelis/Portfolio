<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_services', function (Blueprint $table) {
            $table->increments('id');
            $table->string('icon')->nullable();
            $table->string('title')->nullable();
            $table->longText('description')->nullable();
            $table->timestamps();
            $table->tinyInteger('status')->default(0);

            $table->unsignedInteger('tbl_service_category_id');
            $table->foreign('tbl_service_category_id')->references('id')->on('tbl_service_categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_services');
    }
}
