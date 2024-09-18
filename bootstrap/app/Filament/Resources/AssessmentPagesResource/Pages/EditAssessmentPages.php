<?php

namespace App\Filament\Resources\AssessmentPagesResource\Pages;

use App\Filament\Resources\AssessmentPagesResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAssessmentPages extends EditRecord
{
    protected static string $resource = AssessmentPagesResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
