<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MasterCoursResource\Pages;
use App\Filament\Resources\MasterCoursResource\RelationManagers;
use App\Models\MasterCours;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MasterCoursResource extends Resource
{
    protected static ?string $model = MasterCours::class;

    protected static ?string $navigationIcon = 'heroicon-o-scale';
   
    protected static ?string $navigationLabel = 'MasterCours';

    protected static ?string $modelLabel = 'MasterCours';




    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('master_id')->relationship('master', 'nom')   
                    ->required()
                    ->label('Master')
                    ->placeholder('Choisir un Master'),
                Forms\Components\Select::make('cours_id')->relationship('cours', 'intitule')  
                    ->required()
                    ->label('Cours')
                    ->placeholder('Choisir un Cours'),
                Forms\Components\Toggle::make('is_optional')
                    ->label('Optionnel')
                    ->default(false),


            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('master.nom')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('cours.intitule')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\ToggleColumn::make('is_optional')
                    ->label('Optionnel')
                    ->afterStateUpdated(fn ($record, $state) => $record->update(['is_optional' => $state]))
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
            'index' => Pages\ListMasterCours::route('/'),
            'create' => Pages\CreateMasterCours::route('/create'),
            'edit' => Pages\EditMasterCours::route('/{record}/edit'),
        ];
    }
}
