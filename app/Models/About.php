<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    public $table = 'abouts';

    public $fillable = [
        'title',
        'about',
        'youtube',
        'insta',
        'facebook',
        'twiter'
    ];

    protected $casts = [
        'title' => 'string',
        'about' => 'string',
        'youtube' => 'string',
        'insta' => 'string',
        'facebook' => 'string',
        'twiter' => 'string'
    ];

    public static array $rules = [
        'title' => 'required',
        'about' => 'required',
        'youtube' => 'required',
        'insta' => 'required',
        'facebook' => 'required',
        'twiter' => 'required'
    ];

    
}
