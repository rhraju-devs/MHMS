<?php

namespace App\Models;
use App\Models\Symptom;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disorder extends Model
{
    use HasFactory;
    protected $guarded=[];


    public function getSymptom()
    {
        /// symptom_name = local key and  id = foreign key
        return $this->belongsTo(Symptom::class, 'symptom_name', 'id');
    }
}