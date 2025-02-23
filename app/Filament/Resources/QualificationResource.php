<?php

namespace App\Filament\Resources;

use App\Filament\Resources\QualificationResource\Pages;
use App\Filament\Resources\QualificationResource\RelationManagers;
use App\Models\qualification;
use Filament\Forms;
use Filament\Forms\Components\RichEditor;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;

class QualificationResource extends Resource
{
    protected static ?string $model = qualification::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Textarea::make('slug')
                    ->required()
                    ->maxLength(65535),
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(65535),
                Forms\Components\TextInput::make('breadcrumb')
                    ->required()
                    ->maxLength(65535),
                Forms\Components\FileUpload::make('header')
                    ->required()
                    ->image()->directory('pages')->enableDownload(),
                Forms\Components\FileUpload::make('icon')
                    ->required()
                    ->image()->directory('pages')->enableDownload(),
                    Forms\Components\FileUpload::make('logo')
                    ->required()
                    ->image()->directory('pages')->enableDownload(),
                Forms\Components\FileUpload::make('certificate')
                    ->image()->directory('pages')->enableDownload(),
                    RichEditor::make('paragraph_1')
                    ->required(),
                RichEditor::make('paragraph_2'),
              
                Forms\Components\FileUpload::make('en_flyer')
                    ->enableDownload(),
                Forms\Components\FileUpload::make('ar_flyer')
                    ->enableDownload(),
                Forms\Components\FileUpload::make('fr_flyer')
                    ->enableDownload(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('slug')->hidden(),
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('breadcrumb'),
                Tables\Columns\ImageColumn::make('header')->width(100)->label('Page Header'),
                Tables\Columns\ImageColumn::make('icon')->width(40)->extraAttributes(['style' => 'background-color:red'])->label('Page icon'),
                Tables\Columns\TextColumn::make('paragraph_1')->hidden(),
                Tables\Columns\TextColumn::make('paragraph_2')->hidden(),
                Tables\Columns\ImageColumn::make('logo')->width(110),
                Tables\Columns\TextColumn::make('certificate')->hidden(),
                Tables\Columns\TextColumn::make('en_flyer')->hidden(),
                Tables\Columns\TextColumn::make('ar_flyer')->hidden(),
                Tables\Columns\TextColumn::make('fr_flyer')->hidden(),
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
       return true;
    }
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListQualifications::route('/'),
            'create' => Pages\CreateQualification::route('/create'),
            'edit' => Pages\EditQualification::route('/{record}/edit'),
        ];
    }    
}
