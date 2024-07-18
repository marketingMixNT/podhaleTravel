<?php

namespace App\Filament\Resources;

use App\Models\Tag;
use Filament\Forms;
use App\Models\User;
use Filament\Tables;
use App\Models\Social;
use Filament\Forms\Set;
use App\Models\Category;

use Filament\Forms\Form;
use App\Models\Attraction;

use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Facades\Filament;
use Illuminate\Support\Carbon;
use Filament\Resources\Resource;
use Awcodes\Shout\Components\Shout;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\Repeater;
use Illuminate\Database\Eloquent\Builder;
use Filament\Resources\Concerns\Translatable;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\AttractionResource\Pages;
use App\Filament\Resources\AttractionResource\RelationManagers;
use App\Models\City;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use Schmeits\FilamentCharacterCounter\Forms\Components\TextInput;


class AttractionResource extends Resource
{
    use Translatable;

    public static function getTranslatableLocales(): array
    {
        return ['pl', 'en'];
    }

    protected static ?string $model = Attraction::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                // SEO
                Section::make('SEO')
                    ->icon('heroicon-o-globe-alt')
                    ->collapsible()
                    ->collapsed()
                    ->description('Wprowadź meta title (krótki, opisowy tytuł strony) oraz meta description (krótki opis strony widoczny w wynikach wyszukiwarek), które informują użytkowników o treści strony.')
                    ->schema([

                        Shout::make('info')
                            ->content('Title i Desc zostana uzupelnione automatycznie jezeli ich nie podasz, zachecamy jednak do zrobienia tego rezcznie w celu lepszej optymalizacji')
                            ->type('info'),

                        TextInput::make('meta_title')
                            ->label('Tytuł Meta')
                            ->placeholder('Meta title to tytuł strony internetowej wyświetlany w wynikach wyszukiwarek i na kartach przeglądarki.')
                            ->characterLimit(60)
                            ->minLength(10)
                            ->maxLength(75)
                            ->columnSpanFull(),

                        TextInput::make('meta_desc')
                            ->label('Opis Meta')
                            ->placeholder('Meta description to krótki opis strony internetowej wyświetlany w wynikach wyszukiwarek, który informuje użytkowników o jej treści.')
                            ->characterLimit(160)
                            ->minLength(10)
                            ->maxLength(180)
                            ->columnSpanFull(),
                    ]),

                //INFO
                Section::make('Główne informacje')
                    ->icon('heroicon-o-information-circle')
                    ->columns(2)
                    ->collapsible()
                    ->collapsed()
                    ->description('Podaj nazwę atrakcji, kluczowe informacje')
                    ->schema([

                        Forms\Components\TextInput::make('name')
                            ->label('Nazwa atrakcji')
                            ->unique(ignoreRecord: true)
                            ->minLength(3)
                            ->maxLength(255)
                            ->required()
                            ->live(debounce: 1000)
                            ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug($state))),

                        Forms\Components\TextInput::make('slug')
                            ->label('Slug')
                            ->required()
                            ->placeholder('Przyjazny adres url który wygeneruje się automatycznie')
                            ->readOnly(),

                        Fieldset::make('Info')
                            ->schema([

                                Forms\Components\TextInput::make('phone')
                                    ->label('Telefon')
                                    ->prefix('+48')
                                    ->columns(1),

                                Forms\Components\TextInput::make('email')
                                    ->label('Email')
                                    ->email()
                                    ->columns(1),

                                Forms\Components\TextInput::make('site_link')
                                    ->label('Link do strony atrakcji')
                                    ->url()
                                    ->required()
                                    ->columnSpanFull(),

                                Repeater::make('socials')
                                    ->label('Social Media')
                                    ->relationship()
                                    ->schema(Social::getForm())
                                    ->columnSpanFull()
                                    ->itemLabel(fn (array $state): ?string => $state['name'] ?? null)
                                    ->addActionLabel('Dodaj social')
                                    ->collapsed()
                                    ->collapsible()
                                    ->grid(2)
                            ])



                    ]),

                //CATEGORIES & TAGS
                Section::make('Kategorie i tagi')
                    ->icon('heroicon-o-pencil-square')
                    ->columns(2)
                    ->collapsible()
                    ->collapsed()
                    ->description('Kategorie i tagi')
                    ->schema([
                        Forms\Components\Select::make('category_id')
                            ->placeholder('Mozesz wybrac kilka')
                            ->multiple()
                            ->searchable()
                            ->createOptionForm(Category::getForm())
                            ->preload()
                            ->relationship('categories', 'name')
                            ->preload()
                            ->label('Kategoria'),
                        Forms\Components\Select::make('tag_id')
                            ->placeholder('Mozesz wybrac kilka')
                            ->multiple()
                            ->searchable()
                            ->createOptionForm(Tag::getForm())
                            ->preload()
                            ->relationship('tags', 'name')
                            ->preload()
                            ->label('Tagi')
                    ]),

                //ADDRESS
                Section::make('Adres')
                    ->icon('heroicon-o-map')
                    ->columns(2)
                    ->collapsible()
                    ->collapsed()
                    ->description('Podaj adres oraz link do mapy google')
                    ->schema([
                        Forms\Components\TextInput::make('address')
                            ->label('Adres')
                            ->placeholder('np. Skólavörðustígur 101, Reykjavík, Iceland')
                            ->required()
                            ->columns(1),
                        // Forms\Components\TextInput::make('city')
                        //     ->label('Miejscowość')
                        //     ->placeholder('Nowy Targ')
                        //     ->required()
                        //     ->columns(1),

                            Forms\Components\Select::make('city_id')
                            ->placeholder('Mozesz wybrac kilka')
                            
                            ->searchable()
                            ->createOptionForm(City::getForm())
                            ->editOptionForm(City::getForm())
                            ->preload()
                            ->relationship('city', 'name')
                           
                            ->label('Miejscowość'),


                        Forms\Components\TextInput::make('google_maps_link')
                            ->label('Link do mapy google')
                            ->placeholder('np. https://maps.app.goo.gl/6mVWwduHMxm2pEKP8')
                            ->url()
                            ->columnSpanFull(),
                        Forms\Components\Textarea::make('google_maps_frame')
                            ->label('Link do mapy google')
                            ->placeholder('np. https://maps.app.goo.gl/6mVWwduHMxm2pEKP8')
                            ->columnSpanFull(),
                    ]),

                //CONTENT
                Section::make('Treści')
                    ->icon('heroicon-o-pencil-square')
                    ->columns(2)
                    ->collapsible()
                    ->collapsed()
                    ->description('Treści na stronę apartamentu')
                    ->schema([
                        Forms\Components\RichEditor::make('short_desc')
                            ->label('Krótki opis')
                            ->required()
                            ->toolbarButtons([
                                'bold', 'italic',
                            ])
                            ->columnSpanFull(),
                        Forms\Components\RichEditor::make('desc')
                            ->label('Główny opis')
                            ->toolbarButtons([
                                'bold', 'italic',  'h2',
                                'h3',
                                'italic', 'bulletList',  'orderedList',
                                'redo',
                                'strike',
                                'underline',
                                'undo',
                            ])
                            ->required()
                            ->columnSpanFull(),
                    ]),

                //IMAGES
                Section::make('Zdjęcia')
                    ->icon('heroicon-o-photo')
                    ->columns(2)
                    ->collapsible()
                    ->collapsed()
                    ->description('Dodaj zdjęcie oraz galerię')
                    ->schema([
                        Forms\Components\FileUpload::make('thumbnail')
                            ->label('Miniaturka')
                            ->directory('apartments-thumbnails')
                            ->getUploadedFileNameForStorageUsing(
                                fn (TemporaryUploadedFile $file): string => 'apartament' . now()->format('H-i-s') . '-' . str_replace([' ', '.'], '', microtime()) . '.' . $file->getClientOriginalExtension()
                            )
                            ->image()
                            ->maxSize(4096)
                            ->optimize('webp')
                            ->imageEditor()
                            ->imageEditorAspectRatios([
                                null,
                                '16:9',
                                '4:3',
                                '1:1',
                            ])
                            ->required()
                            ->columnSpanFull(),
                        Forms\Components\FileUpload::make('gallery')
                            ->label('Galeria')
                            ->directory('apartments-galleries')
                            ->getUploadedFileNameForStorageUsing(
                                fn (TemporaryUploadedFile $file): string => 'galeria' . now()->format('H-i-s') . '-' . str_replace([' ', '.'], '', microtime()) . '.' . $file->getClientOriginalExtension()
                            )
                            ->multiple()
                            ->appendFiles()
                            ->image()
                            ->maxSize(4096)
                            ->optimize('webp')
                            ->imageEditor()
                            ->imageEditorAspectRatios([
                                null,
                                '16:9',
                                '4:3',
                                '1:1',
                            ])
                            ->required()
                            ->columnSpanFull(),
                    ]),


                Forms\Components\TextInput::make('user_id')
                    ->required()
                    ->default(
                        Filament::auth()->id()
                    )->readOnly()->hidden()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->defaultSort('created_at', 'desc')
            ->columns([

                Tables\Columns\ImageColumn::make('thumbnail')
                ->label('Miniaturka'),

                Tables\Columns\TextColumn::make('name')
                ->label('Nazwa')
                ->description(function (Attraction $record) {
                    return Str::limit(strip_tags($record->short_desc), 40);
                })
                ->searchable()
                ->sortable(),

                Tables\Columns\TextColumn::make('categories.name')
                ->label('Kategorie')
                ->badge()
                ->toggleable(isToggledHiddenByDefault: true)
                
                
                ,

                Tables\Columns\TextColumn::make('tags.name')
                ->label('Tagi')
                ->badge()
            
                ->toggleable(isToggledHiddenByDefault: true)
               ,

                Tables\Columns\TextColumn::make('city')
                ->label('Miejscowość')
                ->searchable(),
              

                Tables\Columns\TextColumn::make('user_id')
                    ->label('Autor')
                    ->sortable()
                    ->formatStateUsing(function ($state) {
                        $user = User::find($state);
                        return $user ? $user->name : 'brak';
                    })
                    ->toggleable(isToggledHiddenByDefault: true),

                Tables\Columns\TextColumn::make('created_at')
                    ->label('Data publikacji')
                    ->dateTime()
                    ->sortable()
                    ->formatStateUsing(function ($state) {
                        return Carbon::parse($state)->format('d-m-Y');
                    })
                    ->toggleable(isToggledHiddenByDefault: true),

            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAttractions::route('/'),
            'create' => Pages\CreateAttraction::route('/create'),
            'edit' => Pages\EditAttraction::route('/{record}/edit'),
        ];
    }
}
