<?php

namespace App\Filament\Resources\ExecutiveEducationResource\Pages;

use App\Filament\Resources\ExecutiveEducationResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListExecutiveEducation extends ListRecords
{
    protected static string $resource = ExecutiveEducationResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
