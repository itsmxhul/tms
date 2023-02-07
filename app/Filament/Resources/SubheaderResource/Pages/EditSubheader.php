<?php

namespace App\Filament\Resources\SubheaderResource\Pages;

use App\Filament\Resources\SubheaderResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSubheader extends EditRecord
{
    protected static string $resource = SubheaderResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
