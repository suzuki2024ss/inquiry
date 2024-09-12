<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = [
        'first-name',
        'last-name',
        'gender',
        'email',
        'tel',
        'address',
        'building',
        'datail',
        'content-kinds',
        'content',
    ];
}
