<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Set extends Model
{
    /** @use HasFactory<\Database\Factories\SetFactory> */
    use HasFactory;
    protected $table = 'Set';
    protected $fillable = [
        'set',
        'release_date',
        'abbrevaton'
    ];
}
