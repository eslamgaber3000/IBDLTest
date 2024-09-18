<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TrainerAccreditationResource\Pages;
use App\Filament\Resources\TrainerAccreditationResource\RelationManagers;
use App\Models\TrainerAccreditation;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TrainerAccreditationResource extends Resource
{
    protected static ?string $model = TrainerAccreditation::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(65535),
                Forms\Components\TextInput::make('phone')
                    ->tel()
                    ->required(),
                Forms\Components\TextInput::make('email')
                    ->required()
                    ->maxLength(65535),
                Forms\Components\TextInput::make('gender')
                    ->required(),
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(65535),
                Forms\Components\TextInput::make('company')
                    ->maxLength(65535),
                Forms\Components\TextInput::make('type')
                    ->required()
                    ->maxLength(30),
                Forms\Components\TextInput::make('training_field')
                    ->required()
                    ->maxLength(65535),
                Forms\Components\TextInput::make('training_hours')->numeric(),
                Forms\Components\Textarea::make('brief')
                    ->maxLength(65535),
                Forms\Components\TextInput::make('country')
                    ->required()
                    ->maxLength(65535),
                Forms\Components\TextInput::make('city')
                    ->required()
                    ->maxLength(65535),
                Forms\Components\FileUpload::make('cv')
                    ->required()
                    ->directory('accredited-trainers'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->searchable(),
                Tables\Columns\TextColumn::make('phone')->searchable(),
                Tables\Columns\TextColumn::make('email')->searchable(),
                Tables\Columns\TextColumn::make('gender'),
                Tables\Columns\TextColumn::make('title')->searchable(),
                Tables\Columns\TextColumn::make('company')->searchable(),
                Tables\Columns\TextColumn::make('type')->searchable(),
                Tables\Columns\TextColumn::make('training_field')->searchable(),
                Tables\Columns\TextColumn::make('training_hours'),
                Tables\Columns\TextColumn::make('brief')->hidden(),
                Tables\Columns\TextColumn::make('country')->searchable(),
                Tables\Columns\TextColumn::make('city')->searchable(),
                Tables\Columns\TextColumn::make('cv')->hidden(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
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
            'index' => Pages\ListTrainerAccreditations::route('/'),
            'create' => Pages\CreateTrainerAccreditation::route('/create'),
            'edit' => Pages\EditTrainerAccreditation::route('/{record}/edit'),
        ];
    }    
}
