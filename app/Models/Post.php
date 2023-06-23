<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
// use Illuminate\Database\Eloquent\Factories\HasFactory;


class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'title',
        'content',
    ];

    protected function image(): Atribute
    {
        return Attribute::make(
            get: fn ($image) => asset('/storage/posts/' .$image),
        );
    }
}
