<?php

namespace App\Models;

use Filament\Forms\Set;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Filament\Forms\Components\TextInput;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class City extends Model
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
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'slug' => 'array',
    ];

    public function attractions(): HasMany
    {
        return $this->hasMany(Attraction::class);
    }

    public static function getForm(): array
    {
        return [
            TextInput::make('name')
                ->label('Miejscowość')
                ->unique(ignoreRecord: true)
                ->required()
                ->minLength(3)
                ->maxLength(255)
                ->placeholder('np. Nowy Targ')
                ->live(debounce: 1000)
                ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug($state))),

            TextInput::make('slug')
                ->label('Slug')
                ->readonly()
                ->required()
                ->minLength(3)
                ->maxLength(255)
                ->placeholder('Przyjazny adres url który wygeneruje się automatycznie'),
        ];
    }

    public function getFormatName()
    {
        $formatName = strtolower($this->name);
        $formatName = ucfirst($formatName);
        return $formatName;
    }

    public function getThumbnailUrl() :string
    {
        return  asset('storage/' . $this->thumbnail);
    }

    public $translatable = ['name', 'slug'];
}
