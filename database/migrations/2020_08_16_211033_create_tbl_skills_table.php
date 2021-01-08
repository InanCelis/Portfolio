<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblSkillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_skills', function (Blueprint $table) {
            $table->increments('id');
            $table->string('photo')->nullable();
            $table->string('name')->nullable();
            $table->string('rate')->nullable();
            $table->timestamps();
            $table->tinyInteger('status')->default(0);

            $table->unsignedInteger('tbl_skill_category_id');
            $table->foreign('tbl_skill_category_id')->references('id')->on('tbl_skill_categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_skills');
    }
}
