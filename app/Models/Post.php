<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // yang diizinkan di input ke database
    // protected $fillable = [
    //     'title', 'slug', 'excerpt', 'body'
    // ];

    // yang tidak boleh diisi ke database
    protected $guarded = [
        'id'
    ];

    // eager load => code tidak melakukan looping berlebih pada table relation (with())
    protected $with = ['author', 'category'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}