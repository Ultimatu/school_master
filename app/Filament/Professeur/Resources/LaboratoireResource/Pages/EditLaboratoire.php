<?php

namespace App\Filament\Professeur\Resources\LaboratoireResource\Pages;

use App\Filament\Professeur\Resources\LaboratoireResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLaboratoire extends EditRecord
{
    protected static string $resource = LaboratoireResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
