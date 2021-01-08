<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblEducationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_educations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('school')->nullable();
            $table->string('year_from')->nullable();
            $table->string('year_to')->nullable();
            $table->string('address')->nullable();
            $table->string('field_of_study')->nullable();
            $table->string('major')->nullable();
            $table->string('average')->nullable();
            $table->longText('experience_description')->nullable();
            $table->timestamps();
            $table->tinyInteger('status')->default(0);

            $table->unsignedInteger('user_id');
            $table->unsignedInteger('tbl_educ_qualification_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('tbl_educ_qualification_id')->references('id')->on('tbl_educ_qualifications');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_educations');
    }
}
