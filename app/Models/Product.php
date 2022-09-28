<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_name_en',
        'product_name_ar',
        'product_description_en',
        'product_description_ar',
        'product_type',
        'product_category',
        'product_serial_number',
        'product_vat',
        'product_vat_value',
        'product_price',
        'product_price_after_vat',
        'wholesale_price',
        'is_affiliate',
        'affiliate_type',
        'affiliate_value',
        'product_status',
        'in_stock',
        'product_3d_image',
        'product_size',
        'product_main_image',
        'is_delete',
    ];
    protected $casts = ['product_size' => 'array'];

    /**
     * The colors that belong to the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function colors(): BelongsToMany
    {
        return $this->belongsToMany(
            ProductColor::class,
            'colors_of_product',
            'product_id',
            'color_id',
            'id',
            'id'
        )->where('is_delete', 0);
    }
    /**
     * Get all of the color for the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function color(): HasMany
    {
        return $this->hasMany('colors_of_product', 'product_id', 'id');
    }
    /**
     * Get the custom associated with the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function custom(): HasOne
    {
        return $this->hasOne(ProductCustomMade::class, 'product_id', 'id');
    }

    ///////////////// new wafaa
    public function setProduct3dImageAttribute($image)
    {
        if (gettype($image) != 'string') {
            $i = $image->store('images/products', 'public');
            $this->attributes['product_3d_image'] = $image->hashName();
        } else {
            $this->attributes['product_3d_image'] = $image;
        }
    }

    public function getProduct3dImageAttribute($image)
    {
        return asset('storage/images/products') . '/' . $image;
    }

    public function setProductMainImageAttribute($image)
    {
        if (gettype($image) != 'string') {
            $i = $image->store('images/products', 'public');
            $this->attributes['product_main_image'] = $image->hashName();
        } else {
            $this->attributes['product_main_image'] = $image;
        }
    }

    public function getProductMainImageAttribute()
    {
        $images = $this->images;
        $image = $images->where('is_main', '1')->first();
        $image = $image ? $image : $images->first();

        return asset('storage/images/products') . '/' . $image ? $image->image : null;
    }

    ///////////////////////////////////
    ///////////////////////////////////

    public function getProductDescriptionAttribute()
    {
        $lang = session('lang');

        if ($lang == 'ar') {
            return $this->attributes['product_description_ar'];
        } else {
            return $this->attributes['product_description_en'];
        }
    }

    public function getProductNameAttribute()
    {
        $lang = session('lang');

        if ($lang == 'ar') {
            return $this->attributes['product_name_ar'];
        } else {
            return $this->attributes['product_name_en'];
        }
    }

    #Scope
    public function scopeActive($query)
    {
        return $query->where('product_status', 'active')->where('is_delete', '0');
    }

    //Images relation
    public function images()
    {
        return $this->hasMany(ProductImage::class, 'product_id', 'id');
    }

    //Comments relation
    public function comments()
    {
        return $this->hasMany(ProductComment::class, 'product_id', 'id');
    }

    //Rates relation
    public function rates()
    {
        return $this->hasMany(ProductRate::class, 'product_id', 'id');
    }

    //Category relation
    public function category()
    {
        return $this->belongsTo(ProductCategory::class, 'product_category', 'id');
    }

    //Related Products relation
    public function relatedProducts()
    {
        return $this->hasMany(Product::class, 'product_category', 'product_category')->active();
    }

    public function scopeFilters(Builder $builder, array $filters = [])
    {
        $filters = array_merge([], $filters);

        $builder->when($filters !== [], function ($query) use ($filters) {
            $query->whereBetween('product_price', [$filters['from'], $filters['to']]);
        });
    }

    public function scopeMainCategoriesProducts($query, array $filters = [])
    {
        $query->whereIn('product_category', $filters);
    }

    public function scopeLanguage($query)
    {
        if (session('lang') == 'ar') {
            $lang = [
                'id',
                'product_name_ar',
                'product_description_ar',
                'product_type',
                'product_category',
                'product_size',
                'product_serial_number',
                'product_vat',
                'product_vat_value',
                'product_price',
                'product_price_after_vat',
                'wholesale_price',
                'is_affiliate',
                'affiliate_type',
                'affiliate_value',
                'product_status',
                'product_main_image',
                // 'product_images'
            ];
        } else {
            $lang =  [
                'id',
                'product_name_en',
                'product_description_en',
                'product_type',
                'product_category',
                'product_size',
                'product_serial_number',
                'product_vat',
                'product_vat_value',
                'product_price',
                'product_price_after_vat',
                'wholesale_price',
                'is_affiliate',
                'affiliate_type',
                'affiliate_value',
                'product_status',
                'product_main_image',
                // 'product_images',
            ];
        }

        return $query->select($lang);
    }


    public function scopeLang($query, $filters = [])
    {
        if (session('lang') == 'ar') {
            $lang = [
                'id',
                'product_name_ar',
                'product_description_ar',
                'product_type',
                'product_category',
                'product_size',
                'product_serial_number',
                'product_vat',
                'product_vat_value',
                'product_price',
                'product_price_after_vat',
                'wholesale_price',
                'is_affiliate',
                'affiliate_type',
                'affiliate_value',
                'product_status',
                'product_main_image',
                // 'product_images'
            ];
        } else {
            $lang =  [
                'id',
                'product_name_en',
                'product_description_en',
                'product_type',
                'product_category',
                'product_size',
                'product_serial_number',
                'product_vat',
                'product_vat_value',
                'product_price',
                'product_price_after_vat',
                'wholesale_price',
                'is_affiliate',
                'affiliate_type',
                'affiliate_value',
                'product_status',
                'product_main_image',
                // 'product_images',
            ];
        }

        if ($filters['category_id'] == '0') {

            $main_categoies_ids = ProductCategory::all()->pluck('id')->toArray();
            return $query->select($lang)
                ->where('is_delete', '0')
                ->where('product_status', 'active')
                ->whereIn('product_category', $main_categoies_ids)
                ->filters($filters)->get();
        }
        return $query->select($lang)
            ->where('is_delete', '0')
            ->where('product_status', 'active')
            ->where('product_category', $filters['category_id'])
            ->filters($filters)->get();
    }
}
