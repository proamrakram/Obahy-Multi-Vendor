<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    use HasFactory;

    ///////////////// new wafaa
    protected $fillable = [
        'id',
        'product_id',
        'is_main',
        'image',
        'status',
        'is_delete',
    ];

    public function setImageAttribute($image)
    {
        if (gettype($image) != 'string') {
            $i = $image->store('images/products', 'public');
            $this->attributes['image'] = $image->hashName();
        } else {
            $this->attributes['image'] = $image;
        }
    }

    public function getImageAttribute($image)
    {
        $path = asset('storage/images/products') . '/' . $image;
        return $path;
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
}
