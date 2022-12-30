<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

class User extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'email'];

    public function posts()
    {
        return $this->hasMany(Post::class);
        // return $this->belongsToMany(Post::class);
    }
}