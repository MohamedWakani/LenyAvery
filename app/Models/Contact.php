<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    public $table = 'contacts';

    public $fillable = [
        'name',
        'email',
        'phone'
    ];

    protected $casts = [
        'name' => 'string',
        'email' => 'string',
        'phone' => 'string'
    ];

    public static array $rules = [
        'name' => 'required',
        'email' => 'required',
        'phone' => 'required'
    ];

    
}
