<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BookResource\Pages;
use App\Filament\Resources\BookResource\RelationManagers;
use App\Models\Book;
use Filament\Resources\Forms\Components;
use Filament\Resources\Forms\Components\{TextInput, NumberInput, TextArea};
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns;
use Filament\Forms\Components\Livewire;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\NumberColumn;
use Filament\Tables\Columns\DateTimeColumn;
use Filament\Tables\Columns\BelongsToColumn;
use Filament\Tables\Columns\BelongsToManyColumn;
use Filament\Tables\Columns\BooleanColumn;
use Filament\Tables\Columns\EmailColumn;
use Filament\Tables\Columns\AvatarColumn;
use Filament\Tables\Columns\ChipColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BookResource extends Resource
{
    protected static ?string $model = Book::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')->required(),
                Forms\Components\TextInput::make('price')->numeric()->required(),
                Forms\Components\TextArea::make('description')->required(),
                Forms\Components\BelongsToSelect::make('cat_id')->relationship('category', 'name')->required(),
                Forms\Components\FileUpload::make('pic')->image()->directory('books')->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title'),
                TextColumn::make('price'),
                TextColumn::make('category.name')->label('Category'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListBooks::route('/'),
            'create' => Pages\CreateBook::route('/create'),
            'edit' => Pages\EditBook::route('/{record}/edit'),
        ];
    }
}
