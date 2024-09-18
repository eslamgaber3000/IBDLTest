<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProviderResource\Pages;
use App\Filament\Resources\ProviderResource\RelationManagers;
use App\Models\Provider;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProviderResource extends Resource
{
    protected static ?string $model = Provider::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('provider')
                    ->required()
                    ->maxLength(300),
                Forms\Components\TextInput::make('contact_person')
                    ->maxLength(200),
                Forms\Components\TextInput::make('phone')
                    ->tel()
                    ->maxLength(100),
                Forms\Components\TextInput::make('fax')
                    ->maxLength(50),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->maxLength(200),
                Forms\Components\TextInput::make('website')
                    ->maxLength(200),
                Forms\Components\TextInput::make('address')
                    ->maxLength(300),
                Forms\Components\FileUpload::make('img')
                    ->image(),
                Forms\Components\TextInput::make('country_id'),
                Forms\Components\TextInput::make('city')
                    ->maxLength(200),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('provider')->extraAttributes(['style' => 'overflow:hidden;width:300px;'])->searchable(),
                Tables\Columns\TextColumn::make('contact_person')->extraAttributes(['style' => 'overflow:hidden;width:300px;'])->searchable(),
                Tables\Columns\TextColumn::make('phone')->searchable(),
                Tables\Columns\TextColumn::make('fax'),
                Tables\Columns\TextColumn::make('email')->searchable(),
                Tables\Columns\TextColumn::make('website')->extraAttributes(['style' => 'overflow:hidden;width:300px;']),
                Tables\Columns\TextColumn::make('address')->extraAttributes(['style' => 'overflow:hidden;width:300px;']),
                Tables\Columns\ImageColumn::make('img')->extraAttributes(['style' => 'width:200px;']),
                Tables\Columns\TextColumn::make('country_id')->label('country')->searchable(),
                Tables\Columns\TextColumn::make('city')->searchable(),
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
            'index' => Pages\ListProviders::route('/'),
            'create' => Pages\CreateProvider::route('/create'),
            'edit' => Pages\EditProvider::route('/{record}/edit'),
        ];
    }    
}
