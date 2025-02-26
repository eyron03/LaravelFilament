<?php

namespace App\Filament\Resources\TestOneResource\Pages;

use App\Filament\Resources\TestOneResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTestOnes extends ListRecords
{
    protected static string $resource = TestOneResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
