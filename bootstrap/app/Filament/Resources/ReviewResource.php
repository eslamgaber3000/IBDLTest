<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ReviewResource\Pages;
use App\Filament\Resources\ReviewResource\RelationManagers;
use App\Models\review;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ReviewResource extends Resource
{
    protected static ?string $model = review::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('user_id')
                    ->required()->relationship('user', 'name', fn (Builder $query) => $query->where('role_id',2)->orderBy('id')),
                
                Forms\Components\TextInput::make('title')
                    ->maxLength(50),
                Forms\Components\Textarea::make('subject')
                    ->required()
                    ->maxLength(65535),
                Forms\Components\TextInput::make('rate')->numeric(),
                Forms\Components\DateTimePicker::make('date')
                    ->required(),
                    Forms\Components\Toggle::make('approved')
                    ->required()->columnSpan('full'),
                Forms\Components\Textarea::make('elapsed')
                    ->maxLength(65535)->hidden(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user_id')->hidden(),
                Tables\Columns\IconColumn::make('approved')->boolean(),
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('subject')->extraAttributes(['style' => 'overflow:hidden;width:250px;']),
                Tables\Columns\TextColumn::make('rate'),
                Tables\Columns\TextColumn::make('date')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('elapsed')->hidden(),
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
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListReviews::route('/'),
            'create' => Pages\CreateReview::route('/create'),
            'edit' => Pages\EditReview::route('/{record}/edit'),
        ];
    }    
}
