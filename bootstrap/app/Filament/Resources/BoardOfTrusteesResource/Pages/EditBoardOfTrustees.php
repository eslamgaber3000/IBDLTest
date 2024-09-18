<?php

namespace App\Filament\Resources\BoardOfTrusteesResource\Pages;

use App\Filament\Resources\BoardOfTrusteesResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBoardOfTrustees extends EditRecord
{
    protected static string $resource = BoardOfTrusteesResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
