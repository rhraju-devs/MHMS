<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionDisorder extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function disorder(){
        return $this->hasMany(Disorder::class, 'disorder_id', 'id');
    }
}
