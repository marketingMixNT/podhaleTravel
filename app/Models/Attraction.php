<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Spatie\Translatable\HasTranslations;


class Attraction extends Model
{
    use HasTranslations;
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'slug',
        'meta_title',
        'meta_desc',
        'google_maps_link',
        'google_maps_frame',
        'short_desc',
        'desc',
        'thumbnail',
        'gallery',
        'address',
        'site_link',
        'phone',
        'email',
        'featured',
        'user_id',
        'city_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'array',
        'slug' => 'array',
        'meta_title' => 'array',
        'meta_desc' => 'array',
        'short_desc' => 'array',
        'desc' => 'array',
        'gallery' => 'array',
        'featured' => 'boolean',
        'user_id' => 'integer',
        'city_id' => 'integer',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class);
    }

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class);
    }

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }

    public function socials(): HasMany
    {
        return $this->hasMany(Social::class);
    }

    public $translatable = ['name', 'slug','meta_title','meta_desc','short_desc','desc'];

}