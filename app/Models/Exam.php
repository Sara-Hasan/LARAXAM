<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description','image_exam','time'];
    //for Question table with Exam table one-many
    public function question()
    {
        return $this->hasMany(Question::class);
    }
    //for Question table with Exam table many-many
    public function questions()
    {
        return $this->belongsToMany(Question::class, 'answer');
    }
}
