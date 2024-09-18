<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HomepageResource\Pages;
use App\Filament\Resources\HomepageResource\RelationManagers;
use App\Models\Homepage;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;

class HomepageResource extends Resource
{
    protected static ?string $model = Homepage::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TinyEditor::make('inspire')
                    ->required()
                    ->maxLength(65535)->columnSpan('full')->extraAttributes(['style' => 'background-color: black;']),
                TinyEditor::make('brief')
                    ->required()
                    ->maxLength(65535)->columnSpan('full'),
                TinyEditor::make('mission')
                    ->required()
                    ->maxLength(65535)->columnSpan('full'),
                TinyEditor::make('goals')
                    ->required()
                    ->maxLength(65535)->columnSpan('full'),
                TinyEditor::make('services')
                    ->required()
                    ->maxLength(65535)->columnSpan('full'),
                TinyEditor::make('credential')
                    ->required()
                    ->maxLength(65535)->columnSpan('full'),
                    
                TinyEditor::make('professional_solutions')
                    ->required()
                    ->maxLength(65535)->columnSpan('full'),
                TinyEditor::make('professional_solutions_1')
                    ->required()
                    ->maxLength(65535)->columnSpan('full'),
                TinyEditor::make('professional_solutions_2')
                    ->required()
                    ->maxLength(65535)->columnSpan('full'),
                TinyEditor::make('professional_solutions_3')
                    ->required()
                    ->maxLength(65535)->columnSpan('full'),
                TinyEditor::make('professional_solutions_4')
                    ->required()
                    ->maxLength(65535)->columnSpan('full'),
                TinyEditor::make('professional_solutions_5')
                    ->required()
                    ->maxLength(65535)->columnSpan('full'),
                TinyEditor::make('professional_solutions_6')
                    ->required()
                    ->maxLength(65535)->columnSpan('full'),
                Forms\Components\TextInput::make('exams_count'),
                Forms\Components\TextInput::make('country_count'),
                Forms\Components\TextInput::make('partners_count'),
                Forms\Components\TextInput::make('providers_count'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('inspire')->extraAttributes(['style' => 'overflow:hidden;width:250px;']),
                Tables\Columns\TextColumn::make('brief')->extraAttributes(['style' => 'overflow:hidden;width:250px;']),
                Tables\Columns\TextColumn::make('mission')->extraAttributes(['style' => 'overflow:hidden;width:250px;']),
                Tables\Columns\TextColumn::make('goals')->extraAttributes(['style' => 'overflow:hidden;width:250px;']),
                Tables\Columns\TextColumn::make('services')->extraAttributes(['style' => 'overflow:hidden;width:250px;']),
                Tables\Columns\TextColumn::make('professional_solutions')->hidden(),
                Tables\Columns\TextColumn::make('professional_solutions_1')->hidden(),
                Tables\Columns\TextColumn::make('professional_solutions_2')->hidden(),
                Tables\Columns\TextColumn::make('professional_solutions_3')->hidden(),
                Tables\Columns\TextColumn::make('professional_solutions_4')->hidden(),
                Tables\Columns\TextColumn::make('professional_solutions_5')->hidden(),
                Tables\Columns\TextColumn::make('professional_solutions_6')->hidden(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()->hidden(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()->hidden(),
                Tables\Columns\TextColumn::make('exams_count'),
                Tables\Columns\TextColumn::make('country_count'),
                Tables\Columns\TextColumn::make('partners_count'),
                Tables\Columns\TextColumn::make('providers_count'),
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
            'index' => Pages\ListHomepages::route('/'),
            'create' => Pages\CreateHomepage::route('/create'),
            'edit' => Pages\EditHomepage::route('/{record}/edit'),
        ];
    }    
}
