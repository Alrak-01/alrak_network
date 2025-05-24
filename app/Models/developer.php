<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Developer extends Model
{
    protected $fillable = ["name", "skill", "bio", "stack_id"];
    /** @use HasFactory<\Database\Factories\DeveloperFactory> */
    use HasFactory;

    public function stack(){
        return $this->belongsTo(Stack::class);
    }
}
