<?php

namespace App\Filament\Resources\Cashiers\Pages;

use App\Filament\Resources\Cashiers\CashierResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListCashiers extends ListRecords
{
    protected static string $resource = CashierResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
