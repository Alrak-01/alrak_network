<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stack extends Model
{
    protected $fillable = ["name", "category", "description"];
    /** @use HasFactory<\Database\Factories\StackFactory> */
    use HasFactory;
}
