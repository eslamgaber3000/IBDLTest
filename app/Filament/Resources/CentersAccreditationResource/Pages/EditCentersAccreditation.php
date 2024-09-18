<?php

namespace App\Filament\Resources\CentersAccreditationResource\Pages;

use App\Filament\Resources\CentersAccreditationResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCentersAccreditation extends EditRecord
{
    protected static string $resource = CentersAccreditationResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
