<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $table = 'banner';
    protected $fillable = [
        'title',
        'sub_title',
        'description',
        'public',
        'createdBy'
    ];

    use HasFactory;
}
