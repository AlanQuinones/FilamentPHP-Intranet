<?php

namespace App\Filament\Resources\TimeSheets\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\DateTimePicker;

class TimeSheetForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('calendar_id')
                    ->relationship(name: 'calendar', titleAttribute: 'name')
                    ->required(),
                Select::make('user_id')
                    ->relationship(name: 'user', titleAttribute: 'name')
                    ->required(),
                Select::make('type')
                    ->options([
                        'work' => 'Work',
                        'pause' => 'Pause'
                    ]),
                DateTimePicker::make('day_in')
                    ->required(),
                DateTimePicker::make('day_out')
                    ->required(),
            ]);
    }
}
