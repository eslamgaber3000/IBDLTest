<?php

namespace App\Filament\Resources\BoardOfTrusteesResource\Pages;

use App\Filament\Resources\BoardOfTrusteesResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBoardOfTrustees extends ListRecords
{
    protected static string $resource = BoardOfTrusteesResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
