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
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->string('picture')->nullable();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('license');
            $table->string('specialist')->nullable();
            $table->string('designation')->nullable();
            $table->string('experience');
            $table->string('academic_record')->nullable();
            $table->string('attachfile')->nullable();
            $table->string('email');
            $table->string('mobileno')->nullable();
            $table->string('address');
            $table->string('gender')->nullable();
            $table->string('password');
            $table->string('availability_status')->nullable();
            $table->string('role')->nullable();
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
        Schema::dropIfExists('doctors');
    }
};
