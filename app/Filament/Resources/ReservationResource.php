<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ReservationResource\Pages;
use App\Filament\Resources\ReservationResource\RelationManagers;
use App\Models\Reservation;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\ToggleButtons;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\SelectColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ReservationResource extends Resource
{
    protected static ?string $model = Reservation::class;
    protected static ?string $navigationIcon = 'heroicon-o-Calendar-Days';
    protected static ?string $navigationLabel = 'Reservas';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('customer_name')
                    ->label('Nombre')
                    ->required(),
                TextInput::make('customer_phone')
                    ->label('Teléfono')
                    ->required(),
                DatePicker::make('date')
                    ->label('Fecha')
                    ->required(),
                TimePicker::make('start_time')
                    ->label('Hora Inicio')
                    ->required(),
                TimePicker::make('end_time')
                    ->label('Hora Fin'),
                TextInput::make('guests')
                    ->label('Comensales')
                    ->numeric()
                    ->minValue(1)
                    ->required(),
                Select::make('table_id')
                    ->label('Mesa')
                    ->relationship('table', 'code')
                    ->preload()
                    ->searchable()
                    ->required()
                    // Deshabilita selección si la reserva ya no puede editarse
                    ->disabled(fn($livewire) => 
                        // Si no hay registro (create), getRecord() es null y optional() lo maneja
                        in_array(
                        optional($livewire->getRecord())->status,
                        ['cancelled', 'finished'],
                    )),
                ToggleButtons::make('status')
                    ->label('Estado')
                    ->inline()
                    ->options([
                        'pending'    => 'Pendiente',
                        'confirmed'  => 'Confirmada',
                        /* 'cancelled'  => 'Cancelada',
                        'finished'   => 'Finalizada', */
                    ])
                    ->default('pending')
                    ->reactive()
                    ->afterStateUpdated(function ($state, $set, $get) {
                        // Si cambia a cancelada o finalizada, liberar mesa
                        $reservation = Reservation::find($get('id'));
                        if (in_array($state, ['cancelled', 'finished'])) {
                            $reservation->table->update(['status' => 'available']);
                        } else {
                            $reservation->table->update(['status' => 'occupied']);
                        }
                    }),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('customer_name')
                    ->label('Cliente')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('table.code')
                    ->label('Mesa')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('date')
                    ->label('Fecha')
                    ->date()
                    ->sortable(),
                TextColumn::make('start_time')
                    ->label('Inicio')
                    ->time()
                    ->sortable(),
                TextColumn::make('end_time')
                    ->label('Fin')
                    ->time()
                    ->sortable(),
                SelectColumn::make('status')
                    ->label('Estado de la Reserva')
                    ->options([
                        'pending'   => 'Pendiente',
                        'confirmed' => 'Confirmada',
                        'cancelled' => 'Cancelada',
                        'finished'  => 'Finalizada',
                    ])
                    ->sortable()
                    ->searchable()
                    ->afterStateUpdated(function ($state, $record) {
                        // Al cambiar el estado en la tabla
                        if (in_array($state, ['cancelled', 'finished'])) {
                            $record->table->update(['status' => 'available']);
                        } else {
                            $record->table->update(['status' => 'occupied']);
                        }
                    }),
                TextColumn::make('created_at')
                    ->label('Creado')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->label('Actualizado')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\ViewAction::make(),
                    Tables\Actions\EditAction::make()
                        ->visible(fn($record) => in_array($record->status, ['pending', 'confirmed'])),
                    Tables\Actions\DeleteAction::make(),
                ]),
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
    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function getNavigationBadgeColor(): string|array|null
    {
        return static::getModel()::count() > 0 ? 'warning' : 'gray'; // succe
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListReservations::route('/'),
            'create' => Pages\CreateReservation::route('/create'),
            'edit' => Pages\EditReservation::route('/{record}/edit'),
        ];
    }
}
