<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nik')->unique();
            $table->string('addr_rt');
            $table->string('addr_rw');
            $table->string('addr_urban');
            $table->string('addr_distric');
            $table->string('addr_city');
            $table->string('addr_state');
            $table->string('addr_full');
            $table->integer('postal_code');
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->date('birth');
            $table->integer('gender_id');
            $table->string('email')->unique()->nullable();
            $table->string('phone')->unique()->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->boolean('activated')->default(false);
            $table->tinyInteger('role')->default(3);
            $table->ipAddress('admin_ip_address')->nullable();
            $table->ipAddress('updated_ip_address')->nullable();
            $table->ipAddress('deleted_ip_address')->nullable();
            $table->timestamps();
            $table->softDeletes();
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
};
