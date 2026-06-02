<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /** @use HasFactory<\Database\Factories\PostFactory> */
    use HasFactory;

    protected $fillable = [
        'title',
        'body',
        'category_id',
    ];

    protected function snippet(): Attribute {
        return Attribute::get(function () {
            return preg_split("/\R{2,}/", (string) $this->body, 2)[0] ?? '';
        });
    }
}
