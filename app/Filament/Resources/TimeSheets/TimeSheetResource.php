<?php

namespace App\Filament\Resources\TimeSheets;

use App\Filament\Resources\TimeSheets\Pages\CreateTimeSheet;
use App\Filament\Resources\TimeSheets\Pages\EditTimeSheet;
use App\Filament\Resources\TimeSheets\Pages\ListTimeSheets;
use App\Filament\Resources\TimeSheets\Schemas\TimeSheetForm;
use App\Filament\Resources\TimeSheets\Tables\TimeSheetsTable;
use App\Models\TimeSheet;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;
class TimeSheetResource extends Resource
{
    protected static ?string $model = TimeSheet::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedTableCells;
    protected static string | UnitEnum | null $navigationGroup = 'Employee Management';
    protected static ?int $navigationSort = 2;
    protected static ?string $recordTitleAttribute = 'TimeSheet';

    public static function form(Schema $schema): Schema
    {
        return TimeSheetForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return TimeSheetsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListTimeSheets::route('/'),
            'create' => CreateTimeSheet::route('/create'),
            'edit' => EditTimeSheet::route('/{record}/edit'),
        ];
    }
}
