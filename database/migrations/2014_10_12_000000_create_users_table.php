<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->integer('user_type')->nullable();
            $table->string('name');
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->integer('phone_number')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('password');
            $table->string('avatar')->default('default.jpg');
            $table->integer('workhours')->nullable();
            $table->integer('rate')->nullable();
            $table->integer('comletedjob')->nullable();
            $table->integer('earned')->nullable();
            $table->integer('ratings')->nullable();
            $table->integer('jobsuccess')->nullable();
            $table->rememberToken();
            $table->boolean('activated')->default(false);
            $table->string('token');
            $table->ipAddress('signup_ip_address')->nullable();
            $table->ipAddress('signup_confirmation_ip_address')->nullable();
            $table->ipAddress('signup_sm_ip_address')->nullable();
            $table->ipAddress('admin_ip_address')->nullable();
            $table->timestamps();

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
