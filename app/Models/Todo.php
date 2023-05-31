<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;
    // empty variable to keep column values constant
    protected $fillable = [
        'title',
        'description',
        'completed'
    ];
}
