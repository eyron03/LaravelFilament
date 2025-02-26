<?php

namespace App\Filament\Clusters\Financial\Resources;

use App\Filament\Clusters\Financial;
use App\Filament\Clusters\Financial\Resources\TestTwoResource\Pages;
use App\Filament\Clusters\Financial\Resources\TestTwoResource\RelationManagers;
use App\Models\TestTwo;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TestTwoResource extends Resource
{
    protected static ?string $model = TestTwo::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $cluster = Financial::class;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
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
            'index' => Pages\ListTestTwos::route('/'),
            'create' => Pages\CreateTestTwo::route('/create'),
            'edit' => Pages\EditTestTwo::route('/{record}/edit'),
        ];
    }
}
