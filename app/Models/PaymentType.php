<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentType extends Model
{
    use HasFactory;

    public function setImageAttribute($image)
    {
        if(gettype($image) != 'string') {
            $i = $image->store('images/payment_types', 'public');
            $this->attributes['image'] = $image->hashName();
        } else {
            $this->attributes['image'] = $image;
        }
    }

    public function getImageAttribute($image)
    {
        return asset('storage/images/payment_types') . '/' . $image;
    }
}
