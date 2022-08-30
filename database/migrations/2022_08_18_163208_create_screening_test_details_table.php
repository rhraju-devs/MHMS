<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\ScreeningTest;
use App\Models\ScreeningQuestion;


return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('screening_test_details', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(ScreeningTest::class);
            $table->foreignIdFor(ScreeningQuestion::class);
            $table->boolean('answer')->default(0);
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
        Schema::dropIfExists('screening_test_details');
    }
};
