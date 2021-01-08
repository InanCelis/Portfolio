<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_experiences', function (Blueprint $table) {
            $table->increments('id');
            $table->string('position')->nullable();
            $table->string('company_name')->nullable();
            $table->string('year_from')->nullable();
            $table->string('month_from')->nullable();
            $table->string('year_to')->nullable();
            $table->string('month_to')->nullable();
            $table->string('role')->nullable();
            $table->string('address')->nullable();
            $table->longText('experience_description')->nullable();
            $table->timestamps();
            $table->tinyInteger('status')->default(0);

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
        Schema::dropIfExists('tbl_experiences');
    }
}
