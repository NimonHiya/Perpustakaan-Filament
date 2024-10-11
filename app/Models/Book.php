<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'author',
        'publication_year',
        'copies_available',
        'isbn',  // Added
        'genre', // Added
    ];

    protected $casts = [
        'publication_year' => 'integer',
        'copies_available' => 'integer',
    ];

    public function borrowings()
    {
        return $this->hasMany(Borrowing::class);
    }
}
