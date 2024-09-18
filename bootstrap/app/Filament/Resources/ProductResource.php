<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Filament\Resources\ProductResource\RelationManagers;
use App\Models\product;
use Filament\Forms;
use Filament\Forms\Components\Hidden;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;

class ProductResource extends Resource
{
    protected static ?string $model = product::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(300)->columnspan('full'),
                  
            
                TinyEditor::make('description')->columnSpan('full')->label('description'),
                 Forms\Components\TextInput::make('product_link')
                    ->required()
                    ->maxLength(300)->columnspan('full'),

                Forms\Components\FileUpload::make('img')
                ->required()
                ->image()->directory('pages')->columnspan('full'),
                Forms\Components\FileUpload::make('flyer')
                    ->enableDownload(),
                Forms\Components\FileUpload::make('ar_flyer')
                    ->enableDownload(),
                Forms\Components\TextInput::make('price')
                    ->required(),
                Forms\Components\TextInput::make('discount')->hidden(),
                Forms\Components\TextInput::make('africa_price')->label('Africa Price $'),
                Forms\Components\TextInput::make('gulf_price')->label('Gulf Price $'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('type'),
                Tables\Columns\TextColumn::make('description')->extraAttributes(['style' => 'overflow:hidden;width:250px;']),
                Tables\Columns\TextColumn::make('product_link'),

               
                Tables\Columns\ImageColumn::make('img')->extraAttributes(['style' => 'width:250px;']),
                Tables\Columns\TextColumn::make('flyer')->hidden(),
                Tables\Columns\TextColumn::make('ar_flyer')->hidden(),
                Tables\Columns\TextColumn::make('price'),
                Tables\Columns\TextColumn::make('discount')->hidden(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()->hidden(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()->hidden(),
                Tables\Columns\TextColumn::make('africa_price'),
                Tables\Columns\TextColumn::make('gulf_price'),
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
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }    
}
