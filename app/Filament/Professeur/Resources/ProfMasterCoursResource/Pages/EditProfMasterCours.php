<?php

namespace App\Filament\Professeur\Resources\ProfMasterCoursResource\Pages;

use App\Filament\Professeur\Resources\ProfMasterCoursResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProfMasterCours extends EditRecord
{
    protected static string $resource = ProfMasterCoursResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
