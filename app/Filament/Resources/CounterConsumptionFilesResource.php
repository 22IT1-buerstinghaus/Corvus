<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CounterConsumptionFilesResource\Pages;
use App\Filament\Resources\CounterConsumptionFilesResource\RelationManagers;
use App\Models\CounterConsumptionFiles;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CounterConsumptionFilesResource extends Resource
{
    protected static ?string $model = CounterConsumptionFiles::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('counter_nr')
                    ->numeric(),
                Forms\Components\FileUpload::make('path')
                    ->required(),
                Forms\Components\DateTimePicker::make('date'),
                Forms\Components\TextInput::make('meter_reading')
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('counter_nr')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('date')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('meter_reading')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ListCounterConsumptionFiles::route('/'),
            'create' => Pages\CreateCounterConsumptionFiles::route('/create'),
            'edit' => Pages\EditCounterConsumptionFiles::route('/{record}/edit'),
        ];
    }
}
