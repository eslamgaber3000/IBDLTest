<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AssessmentPagesResource\Pages;
use App\Filament\Resources\AssessmentPagesResource\RelationManagers;
use App\Models\AssessmentPages;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;


class AssessmentPagesResource extends Resource
{
    protected static ?string $model = AssessmentPages::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('slug')
                    ->required()
                    ->maxLength(50)->hidden(),
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(50),
                Forms\Components\TextInput::make('breadcrumb')
                    ->required()
                    ->maxLength(100),
                Forms\Components\FileUpload::make('header')
                    ->required()->image()->directory('pages')->enableDownload(),
                Forms\Components\FileUpload::make('icon')
                    ->required()->image()->directory('pages')->enableDownload(),
                    Forms\Components\FileUpload::make('logo')
                    ->required()
                    ->image()->directory('pages')->enableDownload(),
                    Forms\Components\FileUpload::make('image')
                    ->image()->directory('pages')->enableDownload(),
                TinyEditor::make('text_1')
                    ->required()
                    ->maxLength(65535)->columnSpan('full'),
                TinyEditor::make('text_2')
                    ->required()
                    ->maxLength(65535)->columnSpan('full'),
             
                Forms\Components\FileUpload::make('flyer_en')
                    ,
                Forms\Components\FileUpload::make('flyer_ar')
                    ,
                Forms\Components\FileUpload::make('flyer_fr')
                    ,
               
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('slug')->hidden(),
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('breadcrumb'),
                Tables\Columns\ImageColumn::make('header'),
                Tables\Columns\ImageColumn::make('icon')->extraAttributes(['style' => 'background-color:red']),
                Tables\Columns\TextColumn::make('text_1')->hidden(),
                Tables\Columns\TextColumn::make('text_2')->hidden(),
                Tables\Columns\ImageColumn::make('logo'),
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('flyer_en')->hidden(),
                Tables\Columns\TextColumn::make('flyer_ar')->hidden(),
                Tables\Columns\TextColumn::make('flyer_fr')->hidden(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()->hidden(),
                Tables\Columns\TextColumn::make('updated_at')
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
            'index' => Pages\ListAssessmentPages::route('/'),
            'create' => Pages\CreateAssessmentPages::route('/create'),
            'edit' => Pages\EditAssessmentPages::route('/{record}/edit'),
        ];
    }    
}
