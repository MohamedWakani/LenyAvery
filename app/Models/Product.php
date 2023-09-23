<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $table = 'products';

    public $fillable = [
        'name',
        'description',
        'price',
        'photo'
    ];

    protected $casts = [
        'name' => 'string',
        'description' => 'string',
        'price' => 'string',
        'photo' => 'string'
    ];

    public static array $rules = [
        'name' => 'required',
        'description' => 'required',
        'price' => 'required',
        'photo' => 'required'
    ];

    
}
