<?php

namespace App\Filament\Resources\SubheaderResource\Pages;

use App\Filament\Resources\SubheaderResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSubheaders extends ListRecords
{
    protected static string $resource = SubheaderResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
