<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PagesResource\Pages;
use App\Filament\Resources\PagesResource\RelationManagers;
use App\Models\pages as page;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;

class PagesResource extends Resource
{
    protected static ?string $model = page::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('slug')
                    ->required()->hidden(),
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(65535),
                Forms\Components\TextInput::make('breadcrumb')
                    ->required()
                    ->maxLength(65535),
                Forms\Components\FileUpload::make('header')
                    ->required()
                    ->image()->directory('pages')->label('Page Header')->enableDownload()->directory('pages'),
                Forms\Components\FileUpload::make('icon')
                    ->required()
                    ->image()->directory('pages')->label('Page Icon')->enableDownload(),

                    TinyEditor::make('paragraph_1')->columnSpan('full')->label('paragraph'),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('slug')->hidden(),
                Tables\Columns\TextColumn::make('title')->searchable(),
                Tables\Columns\TextColumn::make('breadcrumb'),
                Tables\Columns\ImageColumn::make('header')->width(100)->label('Page Header'),
                Tables\Columns\ImageColumn::make('icon')->width(40)->extraAttributes(['style' => 'background-color:red'])->label('Page icon'),
                Tables\Columns\TextColumn::make('paragraph_1')->hidden(),
             
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()->hidden(),
                Tables\Columns\TextColumn::make('created_at')
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
    public static function canCreate(): bool
    {
       return false;
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPages::route('/'),
            'create' => Pages\CreatePages::route('/create'),
            'edit' => Pages\EditPages::route('/{record}/edit'),
        ];
    }    
}
