<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    use HasFactory;

    // protected $fillable = [
    //     'title',
    //     'isbn',
    //     'description',
    // ];

    public function genres()
    {
        return $this->belongsToMany(Genre::class, 'books_genres');
    }

    public function authors()
    {
        return $this->belongsToMany(Author::class, 'authors_books');

    }
}
