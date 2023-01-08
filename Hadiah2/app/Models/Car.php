<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'Brand',
        'Type',
        'CarCode',
        'Price',
        'Buyer',
        'Date',
        'Image',
        'category_id'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
