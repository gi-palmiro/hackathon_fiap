<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class TechNews extends Model
{

    use HasFactory;

    protected $table = 'techNews';
    protected $id = 'id';
    protected $fillable = [
        'source_id',
        'source_name',
        'author',
        'title',
        'description',
        'url',
        'url_to_image',
        'published_at',
        'content',
    ];

}
