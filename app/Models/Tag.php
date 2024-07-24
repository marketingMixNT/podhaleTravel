<?php

namespace App\Models;

use Filament\Forms\Set;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Filament\Forms\Components\TextInput;
use Spatie\Translatable\HasTranslations;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class Tag extends Model
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
        'thumbnail',
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
    ];

    public function attractions(): BelongsToMany
    {
        return $this->belongsToMany(Attraction::class);
    }

    public static function getForm(): array
    {
        return [
            TextInput::make('name')
                ->label('Nazwa')
                ->unique(ignoreRecord: true)
                ->required()
                ->minLength(3)
                ->maxLength(255)
                ->live(debounce: 1000)
                ->placeholder('np. baseny')
                ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug($state))),

            TextInput::make('slug')
                ->label('Slug')
                ->readonly()
                ->required()
                ->minLength(3)
                ->maxLength(255)
                ->placeholder('Przyjazny adres url który wygeneruje się automatycznie'),

            FileUpload::make('thumbnail')
                ->label('Miniaturka')
                ->directory('tags-thumbnails')
                ->getUploadedFileNameForStorageUsing(
                    fn (TemporaryUploadedFile $file): string => 'tag-thumb' . now()->format('Ymd_His') . '.' . $file->getClientOriginalExtension()
                )
                ->image()
                ->maxSize(8192)
                ->optimize('webp')
                ->imageEditor()
                ->imageEditorAspectRatios([
                    null,
                    '4:3',
                    '1:1',
                ])
                ->required(),
        ];
    }

    public function getFormatName()
    {
        $formatName = strtolower($this->name);
        $formatName = ucfirst($formatName);
        return $formatName;
    }

    public $translatable = ['name', 'slug'];
}
