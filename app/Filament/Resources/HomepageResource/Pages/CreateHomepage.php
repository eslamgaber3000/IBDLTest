<?php

namespace App\Filament\Resources\HomepageResource\Pages;

use App\Filament\Resources\HomepageResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateHomepage extends CreateRecord
{
    protected static string $resource = HomepageResource::class;
}
