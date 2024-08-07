<?php

namespace App\Filament\Resources;

use App\Models\Tag;
use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Carbon;
use Filament\Resources\Resource;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\TagResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\TagResource\RelationManagers;

use Filament\Resources\Concerns\Translatable;


class TagResource extends Resource
{

    use Translatable;

    public static function getTranslatableLocales(): array
    {
        return ['pl', 'en'];
    }
    protected static ?string $model = Tag::class;

    protected static ?string $navigationIcon = 'heroicon-o-tag';

    protected static ?string $navigationGroup = 'Dodatkowe';

    public static function form(Form $form): Form
    {
        return $form
            ->schema(Tag::getForm());
    }

    public static function table(Table $table): Table
    {
        return $table
        ->defaultSort('attractions_count', 'asc')
            ->columns([

                Tables\Columns\ImageColumn::make('thumbnail')
                ->label('Miniaturka'),

            Tables\Columns\TextColumn::make('name')
                ->label('Nazwa')
                ->searchable()
                ->sortable(),

            Tables\Columns\TextColumn::make('attractions_count')
                ->label('Liczba Atrakcji')
                ->counts('attractions')
                ->sortable(),
                    
                    
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
            'index' => Pages\ListTags::route('/'),
            'create' => Pages\CreateTag::route('/create'),
            'edit' => Pages\EditTag::route('/{record}/edit'),
        ];
    }

    public static function getNavigationLabel(): string
    {
        return ('Tagi');
    }
    public static function getPluralLabel(): string
    {
        return ('Tagi');
    }

    public static function getLabel(): string
    {
        return ('Tag');
    }
}
