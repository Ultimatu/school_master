<?php

namespace App\Filament\Professeur\Resources\ProfMasterCoursResource\Pages;

use App\Filament\Professeur\Resources\ProfMasterCoursResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListProfMasterCours extends ListRecords
{
    protected static string $resource = ProfMasterCoursResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
