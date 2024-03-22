<?php

namespace App\Filament\Resources\MasterCoursResource\Pages;

use App\Filament\Resources\MasterCoursResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMasterCours extends EditRecord
{
    protected static string $resource = MasterCoursResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
