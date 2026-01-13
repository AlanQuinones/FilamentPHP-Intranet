<?php

namespace App\Filament\Resources\TimeSheets\Pages;

use App\Filament\Resources\TimeSheets\TimeSheetResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListTimeSheets extends ListRecords
{
    protected static string $resource = TimeSheetResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
