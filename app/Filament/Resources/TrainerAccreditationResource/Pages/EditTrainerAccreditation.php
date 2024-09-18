<?php

namespace App\Filament\Resources\TrainerAccreditationResource\Pages;

use App\Filament\Resources\TrainerAccreditationResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTrainerAccreditation extends EditRecord
{
    protected static string $resource = TrainerAccreditationResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
