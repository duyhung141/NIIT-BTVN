<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table='post_crud';
    protected $fillable=[
        'title',
        'content',
        'keyword',
        'user_id'
    ];
    
}
