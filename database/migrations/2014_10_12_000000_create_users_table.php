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
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->text('picture')->nullable();
            $table->string('license')->nullable();
            $table->string('specialist')->nullable();
            $table->string('designation')->nullable();
            $table->string('experience')->nullable();
            $table->string('academic_record')->nullable();
            $table->string('attachfile')->nullable();
            $table->string('mobileno')->nullable();
            $table->string('address')->nullable();
            $table->string('gender')->nullable();
            $table->string('availability_status')->nullable();
            $table->string('permission_status')->nullable();
            $table->date('dob')->nullable();
            $table->string('role')->default('patient');
            $table->string('marital_status')->nullable();
            $table->string('status')->default('active');
            $table->rememberToken();
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
};
