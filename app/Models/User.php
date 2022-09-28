<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Crypt;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'image',
        'country_id',
        'city_id',
        'address_1',
        'address_2',
        'mobile_no',
        'social_login_provider',
        'user_type',
        'gender',
        'social_login_provider_code',
        'email_verified_at',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'social_login_provider_code',
        'social_login_provider',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function setProviderTokenAttribute($value)
    {
        $this->attributes['social_login_provider_code'] = Crypt::encrypt($value);
    }

    public function getProviderTokenAttribute($value)
    {
        return Crypt::decrypt($value);
    }


    public function setImageAttribute($image)
    {
        if (gettype($image) != 'string') {
            $i = $image->store('images/profile', 'public');
            $this->attributes['image'] = $image->hashName();
        } else {
            $this->attributes['image'] = $image;
        }
    }

    public function getImageAttribute($image)
    {
        $img = $image ?? 'male.jpg';
        return asset('storage/images/profile') . '/' . $img;
    }

    public function country()
    {
        return $this->belongsTo('App\Models\Country');
    }
}
