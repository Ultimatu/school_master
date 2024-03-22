<?php

namespace App\Filament\Professeur\Resources\ProfMasterResource\Pages;

use App\Filament\Professeur\Resources\ProfMasterResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProfMaster extends EditRecord
{
    protected static string $resource = ProfMasterResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
