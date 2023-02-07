<?php

namespace App\Filament\Resources\DynamicheaderResource\Pages;

use App\Filament\Resources\DynamicheaderResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDynamicheaders extends ListRecords
{
    protected static string $resource = DynamicheaderResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
