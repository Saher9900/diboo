<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /** @use HasFactory<\Database\Factories\ProductFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'category_id',
        'quantity',
        'sale',
        'available_sizes',
        'available_colors',
        'description',
    ];

    protected $casts = [
        'available_sizes' => 'array',
        'available_colors' => 'array',
        'price' => 'decimal:2',
        'sale' => 'decimal:2',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }
}
