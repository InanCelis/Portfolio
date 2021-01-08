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
            $table->string('first_name')->nullable();
            $table->string('middle_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('extension_name')->nullable();
            $table->string('profile_pic')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('username')->unique();
            $table->string('password')->nullable();
            $table->timestamps();
            $table->tinyInteger('live')->default(1);
            $table->tinyInteger('status')->default(0);
            $table->rememberToken();
            
            $table->string('google_id')->nullable();
            $table->string('facebook_id')->nullable();
            
            $table->unsignedInteger('tbl_role_id');
            $table->foreign('tbl_role_id')->references('id')->on('tbl_roles');
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
