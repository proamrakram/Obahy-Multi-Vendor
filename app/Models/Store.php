<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Store extends Model
{
    use HasFactory;

    protected $fillable = [
        'store_name_ar',
        'store_name_en',
        'store_domain',
        'phone_number',
        'email',
        'store_currency',
        'store_admin',
        'store_country',
        'store_city',
        'store_logo',
        'subscription_start_date',
        'subscription_end_date',
        'subscription_package_id',
        'store_status',
        'is_trail',
        'commercial_record',
        'is_delete',
        'store_details_en',
        'store_details_ar',
        'store_address_en',
        'store_address_ar',
    ];

    public function setStoreLogoAttribute($image)
    {
        if (gettype($image) != 'string') {
            $i = $image->store('images/store/settings', 'public');
            $this->attributes['store_logo'] = $image->hashName();
        } else {
            $this->attributes['store_logo'] = $image;
        }
    }

    public function getStoreLogoAttribute($image)
    {
        $img = $image ?? 'male.jpg';
        return asset('storage/images/store/settings') . '/' . $img;
    }


    public function package()
    {
        return $this->belongsTo('App\Models\StorePackage', 'subscription_package_id');
    }

    // public function sluggable(): array
    // {
    //     return [
    //         'slug' => [
    //             'source' => 'title'
    //         ]
    //     ];
    // }
}
