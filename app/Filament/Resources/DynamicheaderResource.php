<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DynamicheaderResource\Pages;
use App\Filament\Resources\DynamicheaderResource\RelationManagers;
use App\Models\Dynamicheader;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DynamicheaderResource extends Resource
{
    protected static ?string $model = Dynamicheader::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name'),

            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListDynamicheaders::route('/'),
            'create' => Pages\CreateDynamicheader::route('/create'),
            'edit' => Pages\EditDynamicheader::route('/{record}/edit'),
        ];
    }
}
