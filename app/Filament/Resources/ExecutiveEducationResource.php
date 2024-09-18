<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ExecutiveEducationResource\Pages;
use App\Filament\Resources\ExecutiveEducationResource\RelationManagers;
use App\Models\ExecutiveEducation;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;

class ExecutiveEducationResource extends Resource
{
    protected static ?string $model = ExecutiveEducation::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('slug')
                    ->required()
                    ->maxLength(65535)->hidden(),
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(65535),
                Forms\Components\TextInput::make('breadcrumb')
                    ->required()
                    ->maxLength(65535),
                Forms\Components\FileUpload::make('header')
                    ->required()
                    ->image()->directory('pages'),
                Forms\Components\FileUpload::make('icon')
                    ->required()
                    ->image()->directory('pages'),
                    Forms\Components\FileUpload::make('logo')
                    ->required()
                    ->image()->directory('pages'),
                TinyEditor::make('paragraph_1')
                    ->required()
                    ->maxLength(65535)->columnSpan('full'),
                TinyEditor::make('paragraph_2')
                    ->maxLength(65535)->columnSpan('full'),
                Forms\Components\FileUpload::make('image')
                    ->image()->directory('pages')->hidden(),
                Forms\Components\TextInput::make('intakes')
                    ->required(),
                Forms\Components\TextInput::make('hours')
                    ->required(),
                Forms\Components\TextInput::make('trainees')
                    ->required(),
                Forms\Components\TextInput::make('counter')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('slug')->hidden(),
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('breadcrumb'),
                Tables\Columns\ImageColumn::make('header')->width(110),
                Tables\Columns\ImageColumn::make('icon')->width(35)->extraAttributes(['style' => 'background-color:red']),
                Tables\Columns\TextColumn::make('paragraph_1')->extraAttributes(['style' => 'overflow:hidden;width:300px;'])->hidden(),
                Tables\Columns\TextColumn::make('paragraph_2')->extraAttributes(['style' => 'overflow:hidden;width:300px;'])->hidden(),
                Tables\Columns\ImageColumn::make('logo')->width(110),
                Tables\Columns\ImageColumn::make('image')->hidden(),
                Tables\Columns\TextColumn::make('intakes'),
                Tables\Columns\TextColumn::make('hours'),
                Tables\Columns\TextColumn::make('trainees'),
                Tables\Columns\TextColumn::make('counter'),
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
            'index' => Pages\ListExecutiveEducation::route('/'),
            'create' => Pages\CreateExecutiveEducation::route('/create'),
            'edit' => Pages\EditExecutiveEducation::route('/{record}/edit'),
        ];
    }    
}
