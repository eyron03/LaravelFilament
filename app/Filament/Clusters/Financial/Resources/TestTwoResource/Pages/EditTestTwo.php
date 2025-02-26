<?php

namespace App\Filament\Clusters\Financial\Resources\TestTwoResource\Pages;

use App\Filament\Clusters\Financial\Resources\TestTwoResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTestTwo extends EditRecord
{
    protected static string $resource = TestTwoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
