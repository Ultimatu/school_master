<?php

namespace App\Filament\Professeur\Resources\LaboratoireResource\Pages;

use App\Filament\Professeur\Resources\LaboratoireResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateLaboratoire extends CreateRecord
{
    protected static string $resource = LaboratoireResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['professeur_id'] = auth()->user()->id;

        return $data;
    }
}
