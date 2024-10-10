<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CsvResource\Pages;
use App\Filament\Resources\CsvResource\RelationManagers;
use App\Models\Csv;
use App\Models\Customer;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CsvResource extends Resource
{
    protected static ?string $model = Csv::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('customer_id')
                    ->label('Customer')
                    ->options(function () {
                        return Customer::all()->pluck('full_name', 'id');
                    })
                    ->required(),
                Forms\Components\FileUpload::make('path')
                    ->required()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('customer.full_name')
                ->label('Customer Name'),
                Tables\Columns\TextColumn::make('path')
                    ->label('Download File')
                    ->alignRight()
                    ->formatStateUsing(function ($state) {
                        return '<a href="' . asset('storage/' . $state) . '" target="_blank">Download</a>';
                    })
                    ->html(),
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
            'index' => Pages\ListCsvs::route('/'),
            'create' => Pages\CreateCsv::route('/create'),
            'edit' => Pages\EditCsv::route('/{record}/edit'),
        ];
    }
}
