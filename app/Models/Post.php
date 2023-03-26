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

    // search dengan scope
    public function scopeFilter($query, array $filters)
    {
        // meringkas if dengan when
        // mengganti ternary dengan null coalescing (??)
        $query->when($filters['search'] ?? false, fn($query, $search) =>
            $query->where('title', 'like', '%' . $search . '%')
                ->orWhere('body', 'like', '%' . $search . '%')
        );

        $query->when($filters['category'] ?? false, fn($query, $category) =>
            // callback version
            // mencari relationship pada table
            // use digunakan untuk memakai parameter $category fn diatasnya
            $query->whereHas('category', function($query) use ($category) {
                $query->where('slug', $category);
            })
        );

        $query->when($filters['author'] ?? false, fn($query, $author) =>
            // arrow func version
            // mencari relationship pada table
            // jika menggunakan arrow func maka $author tidak perlu menggunakan use ($author)
            $query->whereHas('author', fn($query) =>
                $query->where('username', $author)
            )
        );
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}