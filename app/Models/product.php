<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    protected $fillable = [
        'name',
        'description',
        'price',
        'image',
        'category_id', // ➕ tambahkan ini
    ];

    /**
     * Relasi: Produk ini milik satu kategori
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Accessor untuk mendapatkan URL gambar produk
     */
    public function getImageUrlAttribute(): string
    {
        return asset('storage/' . $this->image); // Pastikan gambar tersimpan di storage/app/public
    }
}
