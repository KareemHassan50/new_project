<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'image',
    ];
    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}
