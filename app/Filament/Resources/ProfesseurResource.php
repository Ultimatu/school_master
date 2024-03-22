<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProfesseurResource\Pages;
use App\Filament\Resources\ProfesseurResource\RelationManagers;
use App\Models\Professeur;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProfesseurResource extends Resource
{
    protected static ?string $model = Professeur::class;

    protected static ?string $navigationIcon = 'heroicon-o-academic-cap';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('master_id')
                    ->relationship('master', 'nom')
                    ->label('Master')
                    ->placeholder('Sélectionner un master')
                    ->required(),
                Forms\Components\TextInput::make('numen')
                    ->required()
                    ->unique()
                    ->rules('unique:professeurs,numen')
                    ->default('Prof-'.uniqid())
                    ->label('Numen')
                    ->maxLength(255),
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->label('Nom')
                    ->maxLength(255),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->unique()
                    ->rules('unique:professeurs,email')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('password')
                    ->password()
                    ->label('Mot de passe')
                    ->required()
                    ->dehydrateStateUsing(fn ($state) => \Hash::make($state))
                    ->dehydrated(fn ($state) => filled($state))
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('master.nom')
                    ->label('Master')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('numen')
                    ->searchable(),
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email_verified_at')
                    ->dateTime()
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
            'index' => Pages\ListProfesseurs::route('/'),
            'create' => Pages\CreateProfesseur::route('/create'),
            'edit' => Pages\EditProfesseur::route('/{record}/edit'),
        ];
    }
}
