<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contact';
    protected $fillable = [
        'icon',
        'name',
        'value',
        'message',
        'public',
        'createdBy'
    ];

    use HasFactory;
}
