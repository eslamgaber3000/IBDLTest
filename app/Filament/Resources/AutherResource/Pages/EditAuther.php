<?php

namespace App\Filament\Resources\AutherResource\Pages;

use App\Filament\Resources\AutherResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAuther extends EditRecord
{
    protected static string $resource = AutherResource::class;

    protected function getActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
