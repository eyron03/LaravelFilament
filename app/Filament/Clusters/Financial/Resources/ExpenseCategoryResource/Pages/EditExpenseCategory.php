<?php

namespace App\Filament\Clusters\Financial\Resources\ExpenseCategoryResource\Pages;

use App\Filament\Clusters\Financial\Resources\ExpenseCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditExpenseCategory extends EditRecord
{
    protected static string $resource = ExpenseCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
