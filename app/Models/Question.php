<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $fillable = ['id','question','exam_id'];
    //for Question table with Exam table one-many
    public function exam(){
        return $this->belongsTo(Exam::class);
    }
    //for Question table with answer table many-many
    public function exams()
    {
        return $this->belongsToMany(Exam::class, 'answer');
    }
}
