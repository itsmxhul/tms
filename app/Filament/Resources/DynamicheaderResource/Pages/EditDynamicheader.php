<?php

namespace App\Filament\Resources\DynamicheaderResource\Pages;

use App\Filament\Resources\DynamicheaderResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDynamicheader extends EditRecord
{
    protected static string $resource = DynamicheaderResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
