<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meeting extends Model
{
    use HasFactory;
    protected $table = 'meetings';
    protected $fillable = ['title','recording'];
    
    // public function person()
    // {
    //     return $this->belongsTo(Person::class, 'people_id');
    // }
}