<?php

namespace App\Models;

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
            ->disableOptionsWhenSelectedInSiblingRepeaterItems() 
            ->live()
                ->options([
                    'facebook' => 'Facebook',
                    'instagram' => 'Instagram',
                    'tiktok' => 'TikTok',
                ]),
            TextInput::make('link')
                ->label('Link')
                ->url()


        ];
    }
}
