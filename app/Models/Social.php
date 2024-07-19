<?php

namespace App\Models;

use Filament\Forms\Components\Component;
use Livewire\Component as Livewire;
use Filament\Forms\Components\Select;
use Illuminate\Database\Eloquent\Model;

use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Social extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'link',
        'attraction_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'attraction_id' => 'integer',
    ];

    public function attraction(): BelongsTo
    {
        return $this->belongsTo(Attraction::class);
    }

    public static function getForm(): array
    {
        return [
            Select::make('name')
                ->label('Platforma')
                ->required()
                ->disableOptionsWhenSelectedInSiblingRepeaterItems()
                ->live()
                ->searchable()
                ->preload()
                ->options([
                    'facebook' => 'Facebook',
                    'instagram' => 'Instagram',
                    'twitter' => 'X/Twitter',
                    'tiktok' => 'TikTok',
                    'youtube' => 'YouTube',
                    'linkedin' => 'LinkedIn',
                    'tripadvisor' => 'TripAdvisor',
                    'booking' => 'Booking',
                ]),


            TextInput::make('link')
                ->label('Link')
                ->required()
                ->minLength(3)
                ->url()
                ->live(debounce: 1000)
                ->afterStateUpdated(function (Livewire $livewire, Component $component) {
                    $validate = $livewire->validateOnly($component->getStatePath());
                    $component
                        ->hintIcon('heroicon-m-check-circle')
                        ->hintColor('success');
                })
                ->placeholder('np. https://www.instagram.com/marketingmix_pl/')
        ];
    }
}