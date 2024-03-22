<?php

namespace App\Filament\Resources\AdminLabResource\Pages;

use App\Filament\Resources\AdminLabResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAdminLab extends EditRecord
{
    protected static string $resource = AdminLabResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
