<?php

namespace App\Filament\Clusters\Financial\Resources\TestTwoResource\Pages;

use App\Filament\Clusters\Financial\Resources\TestTwoResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTestTwos extends ListRecords
{
    protected static string $resource = TestTwoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
