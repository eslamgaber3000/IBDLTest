<?php

namespace App\Filament\Resources\AutherResource\Pages;

use App\Filament\Resources\AutherResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewAuther extends ViewRecord
{
    protected static string $resource = AutherResource::class;

    protected function getActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
