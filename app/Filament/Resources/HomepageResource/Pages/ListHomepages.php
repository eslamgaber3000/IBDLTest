<?php

namespace App\Filament\Resources\HomepageResource\Pages;

use App\Filament\Resources\HomepageResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHomepages extends ListRecords
{
    protected static string $resource = HomepageResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
