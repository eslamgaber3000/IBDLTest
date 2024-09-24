<?php

namespace App\Filament\Resources\AutherResource\Pages;

use App\Filament\Resources\AutherResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAuthers extends ListRecords
{
    protected static string $resource = AutherResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
