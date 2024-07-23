<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Post extends Model
{
    use HasTranslations;

    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'slug',
        'thumbnail',
        'content',
        'published_at',
        'featured',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title' => 'array',
        'slug' => 'array',
        'content' => 'array',
        'published_at' => 'datetime',
        'featured' => 'boolean',
    ];

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class);
    }

    public function attractions(): BelongsToMany
    {
        return $this->belongsToMany(Attraction::class);
    }

    public function scopePublished($query)
    {
        $query->where('published_at', '<=', Carbon::now());
    }

    public function scopeWithCategory($query, $slug)
    {
        return $query->whereHas('categories', function ($q) use ($slug) {
            $q->where('slug', $slug);
        });
    }
    public function getExcerpt()
    {
        return Str::limit(strip_tags($this->content), 300);
    }
    public function getThumbnailUrl()
    {
        return  asset('storage/' . $this->thumbnail);
    }
    public function getPublishedDate()
    {
        return  $this->published_at->diffForHumans();
    }
    public function getReadingTime()
    {
        $mins = round(str_word_count($this->content) / 250);

        return ($mins < 1) ? 1 : $mins;
    }


    public $translatable = ['title', 'slug', 'content', 'desc'];

}
