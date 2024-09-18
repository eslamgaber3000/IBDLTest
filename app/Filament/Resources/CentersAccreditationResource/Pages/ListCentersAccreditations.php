<?php

namespace App\Filament\Resources\CentersAccreditationResource\Pages;

use App\Filament\Resources\CentersAccreditationResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCentersAccreditations extends ListRecords
{
    protected static string $resource = CentersAccreditationResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
