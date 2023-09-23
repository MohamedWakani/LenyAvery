<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class How extends Model
{
    public $table = 'hows';

    public $fillable = [
        'body'
    ];

    protected $casts = [
        'body' => 'string'
    ];

    public static array $rules = [
        'body' => 'required'
    ];

    
}
