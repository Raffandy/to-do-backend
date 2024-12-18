<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'completed'];

    // Cast 'completed' ke tipe boolean
    protected $casts = [
        'completed' => 'boolean',
    ];
}
