<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\Post;
use Filament\Tables;
use Livewire\Component as Livewire;
use Filament\Forms\Set;
use App\Models\Category;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Filament\Resources\Resource;
use Awcodes\Shout\Components\Shout;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Component;
// use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\DateTimePicker;
use Filament\Resources\Concerns\Translatable;
use App\Filament\Resources\PostResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\PostResource\RelationManagers;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use Schmeits\FilamentCharacterCounter\Forms\Components\TextInput;

class PostResource extends Resource
{
    use Translatable;

    public static function getTranslatableLocales(): array
    {
        return ['pl', 'en'];
    }
    protected static ?string $model = Post::class;

    protected static ?string $navigationIcon = 'heroicon-o-pencil-square';

    protected static ?string $navigationGroup = 'Główne';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // SEO
                Section::make('SEO')
                    ->icon('heroicon-o-globe-alt')
                    ->collapsible()
                    ->collapsed()
                    ->description('Wprowadź meta title oraz meta description , które informują użytkowników o treści strony.')
                    ->schema([
                        Shout::make('info')
                            ->content('Tytuł oraz opis zostaną uzupełnione automatycznie jezeli ich nie podasz. Zachecamy jednak do zrobienia tego w celu lepszej optymalizacji')
                            ->type('info'),

                        TextInput::make('meta_title')
                            ->label('Tytuł Meta')
                            ->placeholder('Meta title to tytuł strony internetowej wyświetlany w wynikach wyszukiwarek i na kartach przeglądarki.')
                            ->characterLimit(60)
                            ->minLength(10)
                            ->maxLength(75)
                            ->live(debounce: 1000)
                            ->afterStateUpdated(function (Livewire $livewire, Component $component) {
                                $validate = $livewire->validateOnly($component->getStatePath());
                            })
                            ->columnSpanFull(),

                        TextInput::make('meta_desc')
                            ->label('Opis Meta')
                            ->placeholder('Meta description to krótki opis strony internetowej wyświetlany w wynikach wyszukiwarek.')
                            ->characterLimit(160)
                            ->minLength(10)
                            ->maxLength(180)
                            ->live(debounce: 1000)
                            ->afterStateUpdated(function (Livewire $livewire, Component $component) {
                                $validate = $livewire->validateOnly($component->getStatePath());
                            })
                            ->columnSpanFull(),
                    ]),

                Section::make('Tytuł oraz treść')
                    ->icon('heroicon-o-pencil')
                    ->description('Wprowadź tytuł oraz treść posta')
                    ->collapsible()
                    ->collapsed()
                    ->columns(2)
                    ->schema([
                        TextInput::make('title')
                            ->label('Tytuł')
                            ->unique(ignoreRecord: true)
                            ->required()
                            ->minLength(3)
                            ->maxLength(255)
                            ->live(debounce: 1000)
                            ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug($state))),

                        TextInput::make('slug')
                            ->readonly()
                            ->label('Slug')
                            ->required()
                            ->minLength(3)
                            ->maxLength(255)
                            ->helperText('Przyjazny adres url który wygeneruje się automatycznie na podstawie nazwy apartamentu.'),

                        RichEditor::make('content')
                            ->label('Treść posta')
                            ->required()
                            ->columnSpanFull(),
                    ]),
                Section::make('Miniaturka oraz kategoria')
                    ->icon('heroicon-o-photo')
                    ->description('Przypisz kategorie oraz atrakcje')
                    ->collapsible()
                    ->collapsed()
                    ->columns(2)
                    ->schema([
                        FileUpload::make('thumbnail')
                            ->columns(1)
                            ->label('Miniaturka')
                            ->directory('blog-thumbnails')
                            ->getUploadedFileNameForStorageUsing(
                                fn (TemporaryUploadedFile $file): string => 'atrakcje-post-' . now()->format('Ymd_His') . '.' . $file->getClientOriginalExtension()
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
                            ->required(),
                        Forms\Components\Select::make('category_id')
                            ->label('Kategoria')
                            ->relationship('categories', 'name', function ($query) {
                                $query->where('type', 'posts');
                            })
                            ->multiple()
                            ->preload()
                            ->searchable()
                            ->createOptionForm(Category::getForm())
                            ->placeholder('Mozesz wybrac kilka'),


                        Forms\Components\Select::make('attraction_id')
                            ->label('Atrakcja')
                            ->relationship('attractions', 'name')
                            ->multiple()
                            ->preload()
                            ->searchable()
                            // ->createOptionForm(Category::getForm())
                            ->placeholder('Mozesz wybrac kilka'),

                    ]),
                Section::make('Publikacja')
                    ->description('Wybierdz datę publikacji')
                    ->icon('heroicon-o-clock')
                    ->collapsible()
                    ->collapsed()
                    ->columns(3)
                    ->schema([

                        DateTimePicker::make('published_at')
                            ->label('Data publikacji')
                            ->columns(1)
                            ->default(now())
                            ->required(),

                        DateTimePicker::make('published_end')
                            ->label('Zakończenie publikacji')
                            ->columns(1)
                            ->default(now()->addMonth())
                            ->required(),

                        Toggle::make('featured')->label('Polecany')->columnSpanFull()->onIcon('heroicon-o-star'),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->defaultSort('published_at', 'desc')
            ->columns([
                Tables\Columns\ImageColumn::make('thumbnail')
                    ->label('Miniaturka'),
                Tables\Columns\TextColumn::make('title')
                    ->label('Tytuł')
                    ->searchable()
                    ->sortable()
                    ->description(function (Post $record) {
                        return Str::limit(strip_tags($record->content), 40);
                    }),

                Tables\Columns\TextColumn::make('categories.title')
                    ->label('Kategorie'),


                Tables\Columns\TextColumn::make('published_at')
                    ->label('Data publikacji')
                    ->badge()
                    ->dateTime()
                    ->formatStateUsing(function ($state) {
                        return Carbon::parse($state)->format('d-m-Y H:i');
                    })
                    ->color(function ($state) {
                        if ($state <= Carbon::now()) {
                            return 'success';
                        } else {
                            return 'danger';
                        }
                    })
                    ->sortable(),

                Tables\Columns\TextColumn::make('published_end')
                    ->label('Data zakończenia')
                    ->badge()
                    ->dateTime()
                    ->formatStateUsing(function ($state) {
                        return Carbon::parse($state)->format('d-m-Y H:i');
                    })
                    ->color(function ($state) {
                        if ($state >= Carbon::now()) {
                            return 'success';
                        } else {
                            return 'danger';
                        }
                    })
                    ->sortable(),

                Tables\Columns\IconColumn::make('featured')
                    ->label('Polecony')
                    ->boolean(),





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
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }

    public static function getNavigationLabel(): string
    {
        return ('Posty');
    }
    public static function getPluralLabel(): string
    {
        return ('Posty');
    }

    public static function getLabel(): string
    {
        return ('Post');
    }
}
