<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CustomerFilesResource\Pages;
use App\Models\CustomerFiles;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class CustomerFilesResource extends Resource
{
    protected static ?string $model = CustomerFiles::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('customer_id')
                    ->required()
                    ->numeric(),
                Forms\Components\FileUpload::make('path')
                    ->required(),
                Forms\Components\TextInput::make('name')
                    ->maxLength(255),
                Forms\Components\TextInput::make('street')
                    ->maxLength(255),
                Forms\Components\TextInput::make('house_nr')
                    ->maxLength(255),
                Forms\Components\TextInput::make('counter_nr')
                    ->numeric(),
                Forms\Components\DateTimePicker::make('installation_date'),
                Forms\Components\TextInput::make('mobile')
                    ->maxLength(255),
                Forms\Components\TextInput::make('phone')
                    ->tel()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('customer_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('path')
                    ->searchable(),
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('street')
                    ->searchable(),
                Tables\Columns\TextColumn::make('house_nr')
                    ->searchable(),
                Tables\Columns\TextColumn::make('counter_nr')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('installation_date')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('mobile')
                    ->searchable(),
                Tables\Columns\TextColumn::make('phone')
                    ->searchable(),
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
            'index' => Pages\ListCustomerFiles::route('/'),
            'create' => Pages\CreateCustomerFiles::route('/create'),
            'edit' => Pages\EditCustomerFiles::route('/{record}/edit'),
        ];
    }
}