<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    public $table = 'information';

    public $fillable = [
        'title',
        'desc'
    ];

    protected $casts = [
        'title' => 'string',
        'desc' => 'string'
    ];

    public static array $rules = [
        'title' => 'required',
        'desc' => 'required'
    ];

    
}
