<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\RelationManagers;
use App\Models\Country;
use App\Models\User;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('role')->label('type')->numeric() ,
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(191),
                    Forms\Components\TextInput::make('lastName')
                    ->maxLength(65535),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->required()
                    ->maxLength(191),
                    Forms\Components\TextInput::make('phone')
                    ->tel(),
                // Forms\Components\TextInput::make('country')
                //     ->maxLength(50),
                Forms\Components\Select::make('country')
                ->options(Country::all()->pluck('short_name','id'))->default(fn ($value): ?string => Country::where('short_name',$value)?->short_name)->disablePlaceholderSelection(),

                Forms\Components\TextInput::make('city')
                    ->maxLength(50),
                Forms\Components\TextInput::make('address')
                    ->maxLength(65535),
                Forms\Components\DatePicker::make('birth_date'),
                Forms\Components\TextInput::make('position')
                    ->maxLength(65535),
                Forms\Components\Select::make('gender')->options([
                    'Male' => 'Male',
                    'Female' => 'Female',
                ]),
                Forms\Components\FileUpload::make('avatar')
                ->image()->directory('avatars')->enableDownload()->columnSpan('full'),
                Forms\Components\DateTimePicker::make('email_verified_at')->hidden(),
                Forms\Components\TextInput::make('password')
                    ->password()
                    ->maxLength(191)->hidden(),
                Forms\Components\Textarea::make('settings')
                    ->maxLength(65535)->hidden(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('role')->label('role'),
                Tables\Columns\TextColumn::make('name')->label('First Name'),
                Tables\Columns\TextColumn::make('lastName')->label('Last Name'),
                Tables\Columns\TextColumn::make('email'),
                Tables\Columns\ImageColumn::make('avatar'),
                Tables\Columns\TextColumn::make('phone'),
                Tables\Columns\TextColumn::make('country')->hidden(),
                Tables\Columns\TextColumn::make('city'),
                Tables\Columns\TextColumn::make('address'),
                Tables\Columns\TextColumn::make('birth_date')
                    ->date()->label('Birth Date'),
                Tables\Columns\TextColumn::make('position'),
                Tables\Columns\TextColumn::make('gender'),
                Tables\Columns\TextColumn::make('email_verified_at')
                    ->dateTime()->hidden(),
                Tables\Columns\TextColumn::make('settings')->hidden(),
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
    public static function canCreate(): bool
    {
       return false;
    }
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }    
}
