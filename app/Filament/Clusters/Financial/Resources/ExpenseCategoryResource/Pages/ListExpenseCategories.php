<?php

namespace App\Filament\Clusters\Financial\Resources\ExpenseCategoryResource\Pages;

use App\Filament\Clusters\Financial\Resources\ExpenseCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListExpenseCategories extends ListRecords
{
    protected static string $resource = ExpenseCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
