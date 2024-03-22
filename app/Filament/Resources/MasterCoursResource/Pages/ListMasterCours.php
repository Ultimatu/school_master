<?php

namespace App\Filament\Resources\MasterCoursResource\Pages;

use App\Filament\Resources\MasterCoursResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMasterCours extends ListRecords
{
    protected static string $resource = MasterCoursResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
