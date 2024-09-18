<?php

namespace App\Filament\Resources\CorporateAccreditationResource\Pages;

use App\Filament\Resources\CorporateAccreditationResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCorporateAccreditation extends EditRecord
{
    protected static string $resource = CorporateAccreditationResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
