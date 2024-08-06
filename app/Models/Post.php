<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
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
        'meta_title',
        'meta_desc',
        'title',
        'slug',
        'thumbnail',
        'content',
        'published_at',
        'published_end',
        'featured',
        'user_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'meta_title' => 'array',
        'meta_desc' => 'array',
        'title' => 'array',
        'slug' => 'array',
        'content' => 'array',
        'published_at' => 'datetime',
        'published_end' => 'datetime',
        'featured' => 'boolean',
        'user_id' => 'integer',
    ];

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class);
    }

    public function attractions(): BelongsToMany
    {
        return $this->belongsToMany(Attraction::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function scopePublished($query)
    {
        $query->where('published_at', '<=', Carbon::now())
              ->where(function($query) {
                  $query->where('published_end', '>=', Carbon::now())
                        ->orWhereNull('published_end');
              });
    }

    public function scopeArchive($query)
    {
        $query->where('published_end', '<=', Carbon::now());
    }

    public function scopeWithCategory($query, $slug)
    {
        return $query->whereHas('categories', function ($q) use ($slug) {
            $q->where('slug', $slug);
        });
    }


    public function getExcerpt()
    {
        return  str_replace(['"', "'"], '', substr(html_entity_decode(strip_tags($this->content)), 0, 300)) . '...';
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

    public function getMetaTitle(): string
    {
        if ($this->meta_title) {
            return $this->meta_title;
        } else {
            return str_replace(['"', "'"], '', $this->title);
        }
    }

    public function getMetaDesc(): string
    {
        if ($this->meta_desc) {
            return $this->meta_desc;
        } else {
            return str_replace(['"', "'"], '', substr(strip_tags($this->content), 0, 150));
        }
    }


    public $translatable = ['title', 'slug', 'content', 'desc', 'meta_title', 'meta_desc',];
}
