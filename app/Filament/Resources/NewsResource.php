<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NewsResource\Pages;
use App\Filament\Resources\NewsResource\RelationManagers;
use App\Models\news;
use Filament\Forms;
use Filament\Forms\Components\RichEditor;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;

class NewsResource extends Resource
{
    protected static ?string $model = news::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(200)->columnSpan('full'),
                Forms\Components\TextInput::make('slug')
                    ->maxLength(300)->hidden(),
                RichEditor::make('content')
                    ->required()
                    ->maxLength(65535)->columnSpan('full'),
                Forms\Components\FileUpload::make('img')
                    ->required()
                    ->image()->columnSpan('full')->directory('news'),
                Forms\Components\DatePicker::make('date')
                    ->required()->columnSpan('full'),
                Forms\Components\TextInput::make('meta_description')
                    ->maxLength(156)->hidden(),
                Forms\Components\TextInput::make('meta_keywords')
                    ->maxLength(1000)->hidden(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->extraAttributes(['style' => 'overflow:hidden;width:300px;'])->searchable(),
                Tables\Columns\TextColumn::make('slug')->hidden(),
                Tables\Columns\TextColumn::make('content')->extraAttributes(['style' => 'overflow:hidden;width:400px;'])->searchable(),
                Tables\Columns\ImageColumn::make('img')->width(120)->height(100),
                Tables\Columns\TextColumn::make('date')
                    ->date(),
                Tables\Columns\TextColumn::make('meta_description')->hidden(),
                Tables\Columns\TextColumn::make('meta_keywords')->hidden(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()->hidden(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()->hidden(),
                Tables\Columns\TextColumn::make('deleted_at')
                    ->dateTime()->hidden(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListNews::route('/'),
            'create' => Pages\CreateNews::route('/create'),
            'edit' => Pages\EditNews::route('/{record}/edit'),
        ];
    }    
}
