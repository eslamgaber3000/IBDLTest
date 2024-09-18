<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CorporateAccreditationResource\Pages;
use App\Filament\Resources\CorporateAccreditationResource\RelationManagers;
use App\Models\CorporateAccreditation;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CorporateAccreditationResource extends Resource
{
    protected static ?string $model = CorporateAccreditation::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Toggle::make('approve')->columnSpan('full'),
                Forms\Components\TextInput::make('org_name')
                    ->required()
                    ->maxLength(65535),
                Forms\Components\TextInput::make('org_phone')
                    ->required()
                    ->maxLength(65535),
                Forms\Components\TextInput::make('org_email')
                    ->required()
                    ->maxLength(65535),
                Forms\Components\TextInput::make('org_country')
                    ->required()
                    ->maxLength(65535),
                Forms\Components\TextInput::make('org_city')
                    ->required()
                    ->maxLength(65535),
                Forms\Components\TextInput::make('website')
                    ->maxLength(65535),
                Forms\Components\FileUpload::make('tax_Reg')
                    ->required()
                    ->enableDownload()->label('Tax Registration')->directory('accredited-centers'),
                Forms\Components\FileUpload::make('comm_reg')
                    ->required()
                    ->enableDownload()->label('Commercial Registration')->directory('accredited-centers'),
                Forms\Components\FileUpload::make('org_license')
                    ->required()
                    ->enableDownload()->label('Organization License')->directory('accredited-centers'),
                Forms\Components\FileUpload::make('quality_manual')
                    ->enableDownload()->label('Quality Manual')->directory('accredited-centers'),
                Forms\Components\FileUpload::make('Accreditation')
                    ->enableDownload()->directory('accredited-centers'),
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
          
                Forms\Components\TextInput::make('organizational_structure')
                    ->maxLength(65535),
                Forms\Components\TextInput::make('policies_procedures')
                    ->maxLength(65535),
                Forms\Components\TextInput::make('communication')
                    ->maxLength(65535),
                Forms\Components\TextInput::make('financial_management')
                    ->maxLength(65535),
                Forms\Components\TextInput::make('human_resources')
                    ->maxLength(65535),
                Forms\Components\TextInput::make('data_security')
                    ->maxLength(65535),
                Forms\Components\TextInput::make('quality_assurance')
                    ->maxLength(65535),
                Forms\Components\TextInput::make('legal_compliance')
                    ->maxLength(65535),
                Forms\Components\TextInput::make('risk_management')
                    ->maxLength(65535),
                Forms\Components\TextInput::make('ethical_standards')
                    ->maxLength(65535),
                Forms\Components\TextInput::make('customer_relations')
                    ->maxLength(65535),
                Forms\Components\TextInput::make('supply_chain_management')
                    ->maxLength(65535),
                Forms\Components\TextInput::make('environmental_sustainability')
                    ->maxLength(65535),
                Forms\Components\TextInput::make('health_safety')
                    ->maxLength(65535),
                Forms\Components\TextInput::make('documentation_record_keeping')
                    ->maxLength(65535),
                Forms\Components\TextInput::make('performance_metrics')
                    ->maxLength(65535),
                Forms\Components\TextInput::make('continuous_improvement')
                    ->maxLength(65535),
                Forms\Components\TextInput::make('training_development')
                    ->maxLength(65535),
                Forms\Components\TextInput::make('social_responsibility')
                    ->maxLength(65535),
                Forms\Components\TextInput::make('technology_adoption')
                    ->maxLength(65535),
            ]);
    }
                

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\IconColumn::make('approve')
                ->boolean(),
                Tables\Columns\TextColumn::make('org_name')->searchable()->label('Name'),
                Tables\Columns\TextColumn::make('org_phone')->searchable()->label('Phone'),
                Tables\Columns\TextColumn::make('org_email')->searchable()->label('Email'),
                Tables\Columns\TextColumn::make('org_country')->searchable()->label('Country'),
                Tables\Columns\TextColumn::make('org_city')->searchable()->label('City'),
                Tables\Columns\TextColumn::make('website'),
                Tables\Columns\TextColumn::make('tax_Reg')->hidden(),
                Tables\Columns\TextColumn::make('comm_reg')->hidden(),
                Tables\Columns\TextColumn::make('org_license')->hidden(),
                Tables\Columns\TextColumn::make('quality_manual')->hidden(),
                Tables\Columns\TextColumn::make('Accreditation')->hidden(),
                Tables\Columns\TextColumn::make('contact_name')->searchable(),
                Tables\Columns\TextColumn::make('contact_phone')->searchable(),
                Tables\Columns\TextColumn::make('contact_email')->searchable(),
                Tables\Columns\TextColumn::make('contact_title')->searchable(),
                Tables\Columns\TextColumn::make('organizational_structure')->hidden(),
                Tables\Columns\TextColumn::make('policies_procedures')->hidden(),
                Tables\Columns\TextColumn::make('communication')->hidden(),
                Tables\Columns\TextColumn::make('financial_management')->hidden(),
                Tables\Columns\TextColumn::make('human_resources')->hidden(),
                Tables\Columns\TextColumn::make('data_security')->hidden(),
                Tables\Columns\TextColumn::make('quality_assurance')->hidden(),
                Tables\Columns\TextColumn::make('legal_compliance')->hidden(),
                Tables\Columns\TextColumn::make('risk_management')->hidden(),
                Tables\Columns\TextColumn::make('ethical_standards')->hidden(),
                Tables\Columns\TextColumn::make('customer_relations')->hidden(),
                Tables\Columns\TextColumn::make('supply_chain_management')->hidden(),
                Tables\Columns\TextColumn::make('environmental_sustainability')->hidden(),
                Tables\Columns\TextColumn::make('health_safety')->hidden(),
                Tables\Columns\TextColumn::make('documentation_record_keeping')->hidden(),
                Tables\Columns\TextColumn::make('performance_metrics')->hidden(),
                Tables\Columns\TextColumn::make('continuous_improvement')->hidden(),
                Tables\Columns\TextColumn::make('training_development')->hidden(),
                Tables\Columns\TextColumn::make('social_responsibility')->hidden(),
                Tables\Columns\TextColumn::make('technology_adoption')->hidden(),
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
            'index' => Pages\ListCorporateAccreditations::route('/'),
            'create' => Pages\CreateCorporateAccreditation::route('/create'),
            'edit' => Pages\EditCorporateAccreditation::route('/{record}/edit'),
        ];
    }    
}
