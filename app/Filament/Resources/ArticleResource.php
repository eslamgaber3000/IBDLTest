<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ArticleResource\Pages;
use App\Filament\Resources\ArticleResource\RelationManagers;
use App\Models\Article;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ArticleResource extends Resource
{
    protected static ?string $model = Article::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('user_id')
                    ->required(),

                Forms\Components\TextInput::make('auther_id')
                    ->required(),
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('subtitle')
                    ->required()
                    ->maxLength(255),

                Forms\Components\Textarea::make('desc')
                    ->required()
                    ->maxLength(65535),

                Forms\Components\Textarea::make('desc2')
                    ->required()
                    ->maxLength(65535),

                    Forms\Components\FileUpload::make('image')
                    ->required()
                    ->image()->directory('BlogImages')->columnSpan('full'),

                    Forms\Components\FileUpload::make('article_image')
                    ->required()
                    ->image()->directory('article_images')->columnSpan('full'),


                    // Forms\Components\FileUpload::make('image')
                    // ->required()
                    // ->image()->directory('portfolio')->columnSpan('full'),

                    // Forms\Components\FileUpload::make('img')
                    // ->required()
                    // ->image()->directory('pages')->columnspan('full'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user_id'),
                Tables\Columns\TextColumn::make('auther_id'),
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('subtitle'),
                Tables\Columns\TextColumn::make('desc'),
                Tables\Columns\TextColumn::make('desc2'),
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\ImageColumn::make('article_image'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
                    // Tables\Columns\ImageColumn::make('img')->extraAttributes(['style' => 'width:250px;']),
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
            'index' => Pages\ListArticles::route('/'),
            'create' => Pages\CreateArticle::route('/create'),
            'edit' => Pages\EditArticle::route('/{record}/edit'),
        ];
    }    
}
