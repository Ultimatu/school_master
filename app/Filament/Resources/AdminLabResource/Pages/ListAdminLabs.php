<?php

namespace App\Filament\Resources\AdminLabResource\Pages;

use App\Filament\Resources\AdminLabResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAdminLabs extends ListRecords
{
    protected static string $resource = AdminLabResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
