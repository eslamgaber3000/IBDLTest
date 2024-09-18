<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BoardOfTrusteesResource\Pages;
use App\Filament\Resources\BoardOfTrusteesResource\RelationManagers;
use App\Models\BoardOfTrustees;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BoardOfTrusteesResource extends Resource
{
    protected static ?string $model = BoardOfTrustees::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(191)->columnSpan('full'),
                Forms\Components\RichEditor::make('bref')
                    ->required()->label('brief')
                    ->maxLength(65535)->columnSpan('full'),
                Forms\Components\TextInput::make('position')
                    ->maxLength(65535)->columnSpan('full'),
                Forms\Components\FileUpload::make('image')
                    ->required()
                    ->image()->directory('bot')->enableDownload()->columnSpan('full'),
                Forms\Components\TextInput::make('linked')
                    ->maxLength(65535),
                Forms\Components\TextInput::make('twitter')
                    ->maxLength(65535),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->searchable(),
                Tables\Columns\TextColumn::make('bref')->label('brief')->extraAttributes(['style' => 'overflow:hidden;width:300px;']),
                Tables\Columns\TextColumn::make('position')->searchable(),
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('linked')->extraAttributes(['style' => 'overflow:hidden;width:250px;']),
                Tables\Columns\TextColumn::make('twitter')->extraAttributes(['style' => 'overflow:hidden;width:250px;']),
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
            'index' => Pages\ListBoardOfTrustees::route('/'),
            'create' => Pages\CreateBoardOfTrustees::route('/create'),
            'edit' => Pages\EditBoardOfTrustees::route('/{record}/edit'),
        ];
    }    
}
