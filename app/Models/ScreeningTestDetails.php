<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScreeningTestDetails extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function screeningTest()
    {
        return $this->hasMany(ScreeningTest::class);
    }

    public function screeningQuestion()
    {
        return $this->hasMany(ScreeningQuestion::class);
    }
}
