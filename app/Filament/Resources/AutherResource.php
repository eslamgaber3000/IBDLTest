<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AutherResource\Pages;
use App\Filament\Resources\AutherResource\RelationManagers;
use App\Models\Auther;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AutherResource extends Resource
{
    protected static ?string $model = Auther::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),

                Forms\Components\TextInput::make('facebook')->label('facebook (optional)')
                    // ->email()
                    // ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('linkedin')->label('linkedin (optional)')
                    // ->email()
                    // ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('instagram')->label('instagram (optional)')
                    // ->email()
                    // ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('x')->label('X (optional)')->columnSpanFull()
                    // ->email()
                    // ->required()
                    ->maxLength(255),
                    Forms\Components\FileUpload::make('image')
                    ->required()
                    ->image()->directory('ArticleAthors')->columnSpan('full'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('linkedin'),
                Tables\Columns\TextColumn::make('facebook'),
                Tables\Columns\TextColumn::make('x'),
                Tables\Columns\TextColumn::make('instagram'),
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListAuthers::route('/'),
            'create' => Pages\CreateAuther::route('/create'),
            'view' => Pages\ViewAuther::route('/{record}'),
            'edit' => Pages\EditAuther::route('/{record}/edit'),
        ];
    }    
}
