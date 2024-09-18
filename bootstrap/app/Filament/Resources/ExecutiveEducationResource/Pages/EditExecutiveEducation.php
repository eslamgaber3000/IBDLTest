<?php

namespace App\Filament\Resources\ExecutiveEducationResource\Pages;

use App\Filament\Resources\ExecutiveEducationResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditExecutiveEducation extends EditRecord
{
    protected static string $resource = ExecutiveEducationResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
