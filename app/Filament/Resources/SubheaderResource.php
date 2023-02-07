<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SubheaderResource\Pages;
use App\Filament\Resources\SubheaderResource\RelationManagers;
use App\Models\Subheader;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SubheaderResource extends Resource
{
    protected static ?string $model = Subheader::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                select::make('dynamicheader_id')
                ->relationship('dynamicheader','name')->required(),
                TextInput::make('submenu')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('dynamicheader.name'),
                TextColumn::make('submenu'),
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
            'index' => Pages\ListSubheaders::route('/'),
            'create' => Pages\CreateSubheader::route('/create'),
            'edit' => Pages\EditSubheader::route('/{record}/edit'),
        ];
    }
}
