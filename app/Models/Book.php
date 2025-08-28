<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    // kolom yang bisa diisi
    protected $fillable = [
        'title',
        'author',
        'publisher',
        'year',
        'category_id',
        'rack_id',
    ];

    // relasi ke kategori
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // relasi ke rak
    public function rack()
    {
        return $this->belongsTo(Rack::class);
    }
}
