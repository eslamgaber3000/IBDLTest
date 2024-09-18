<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CentersAccreditationResource\Pages;
use App\Filament\Resources\CentersAccreditationResource\RelationManagers;
use App\Models\CentersAccreditation;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CentersAccreditationResource extends Resource
{
    protected static ?string $model = CentersAccreditation::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('org_name')
                    ->required()
                    ->maxLength(65535)->extraAttributes(['readonly'])->label('Name'),
                    
                Forms\Components\TextInput::make('org_phone')
                    ->required()
                    ->maxLength(65535)->label('Phone'),
                Forms\Components\TextInput::make('org_email')
                    ->required()
                    ->maxLength(65535)->label('Email'),
                Forms\Components\TextInput::make('org_country')
                    ->required()
                    ->maxLength(65535)->label('Country'),
                Forms\Components\TextInput::make('org_city')
                    ->required()
                    ->maxLength(65535)->label('City'),
                Forms\Components\TextInput::make('website')
                    ->maxLength(65535),
                Forms\Components\FileUpload::make('tax_Reg')
                    ->required()->enableDownload()->label('Tax Registration')->directory('accredited-centers'),
                Forms\Components\FileUpload::make('comm_reg')
                    ->required()->enableDownload()->label('Commercial Registration')->directory('accredited-centers'),
                Forms\Components\FileUpload::make('org_license')
                    ->required()->enableDownload()->label('Organization License')->directory('accredited-centers'),
                Forms\Components\FileUpload::make('quality_manual')->enableDownload()->label('Quality Manual')->directory('accredited-centers'),
                Forms\Components\FileUpload::make('Accreditation')->enableDownload()->directory('accredited-centers'),
                Forms\Components\TextInput::make('type')
                    ->maxLength(50),
                Forms\Components\TextInput::make('contact_name')
                    ->required()
                    ->maxLength(65535),
                Forms\Components\TextInput::make('contact_phone')
                    ->required()
                    ->maxLength(65535),
                Forms\Components\TextInput::make('contact_email')
                    ->required()
                    ->maxLength(65535),
                Forms\Components\TextInput::make('contact_title')
                    ->required()
                    ->maxLength(65535),
                    Forms\Components\Toggle::make('approve')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\IconColumn::make('approve')->boolean(),
                Tables\Columns\TextColumn::make('org_name')->searchable()->label('Name'),
                Tables\Columns\TextColumn::make('org_phone')->searchable()->label('Phone'),
                Tables\Columns\TextColumn::make('org_email')->searchable()->label('Email'),
                Tables\Columns\TextColumn::make('org_country')->searchable()->label('Country'),
                Tables\Columns\TextColumn::make('org_city')->searchable()->label('City'),
                Tables\Columns\TextColumn::make('website'),
                Tables\Columns\ImageColumn::make('tax_Reg')->hidden()->label('Tax Registration'),
                Tables\Columns\ImageColumn::make('comm_reg')->hidden()->label('Commercial Registration'),
                Tables\Columns\ImageColumn::make('org_license')->hidden()->label('Organization License'),
                Tables\Columns\ImageColumn::make('quality_manual')->hidden()->label('Quality Manual'),
                Tables\Columns\ImageColumn::make('Accreditation')->hidden(),
                Tables\Columns\TextColumn::make('type')->searchable(),
                Tables\Columns\TextColumn::make('contact_name')->searchable(),
                Tables\Columns\TextColumn::make('contact_phone')->searchable(),
                Tables\Columns\TextColumn::make('contact_email')->searchable(),
                Tables\Columns\TextColumn::make('contact_title'),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()->hidden(),
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
            'index' => Pages\ListCentersAccreditations::route('/'),
            'create' => Pages\CreateCentersAccreditation::route('/create'),
            'edit' => Pages\EditCentersAccreditation::route('/{record}/edit'),
        ];
    }    
}
