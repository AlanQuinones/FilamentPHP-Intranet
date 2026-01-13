<?php

namespace App\Filament\Resources\TimeSheets\Pages;

use App\Filament\Resources\TimeSheets\TimeSheetResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditTimeSheet extends EditRecord
{
    protected static string $resource = TimeSheetResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
