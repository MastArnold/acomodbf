<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $table = 'gallery';
    protected $fillable = [
        'url',
        'no',
        'name',
        'title',
        'sub_title',
        'description',
        'public',
        'createdBy'
    ];

    use HasFactory;
}
