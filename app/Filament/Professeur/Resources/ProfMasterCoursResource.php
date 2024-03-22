<?php

namespace App\Filament\Professeur\Resources;

use App\Filament\Professeur\Resources\ProfMasterCoursResource\Pages;
use App\Filament\Professeur\Resources\ProfMasterCoursResource\RelationManagers;
use App\Models\ProfMasterCours;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProfMasterCoursResource extends Resource
{
    protected static ?string $model = ProfMasterCours::class;

    protected static ?string $navigationIcon = 'heroicon-o-scale';


    public static function canCreate(): bool
    {
        return false;
    }

    public static function canEdit($record): bool
    {
        return false;
    }

    public static function canDelete($record): bool
    {
        return false;
    }

    public static function canUpdate(): bool
    {
        return false;
    }


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
                    ->sortable(),
                Tables\Columns\TextColumn::make('cours.intitule')
                    ->sortable(),
                Tables\Columns\BooleanColumn::make('is_optional')
                    ->label('Optionnel')
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
            'index' => Pages\ListProfMasterCours::route('/'),
            'create' => Pages\CreateProfMasterCours::route('/create'),
            'edit' => Pages\EditProfMasterCours::route('/{record}/edit'),
        ];
    }
}
