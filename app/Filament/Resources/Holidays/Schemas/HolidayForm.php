<?php

namespace App\Filament\Resources\Holidays\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;

class HolidayForm
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
                DatePicker::make('rest_day')
                    ->required(),
                Select::make('type')
                    ->options([
                        'declined' => 'Declined',
                        'approved' => 'Approved',
                        'pending' => 'Pending'
                    ]),
            ]);
    }
}
