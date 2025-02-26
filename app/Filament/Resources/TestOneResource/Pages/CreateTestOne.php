<?php

namespace App\Filament\Resources\TestOneResource\Pages;

use App\Filament\Resources\TestOneResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateTestOne extends CreateRecord
{
    protected static string $resource = TestOneResource::class;
}
