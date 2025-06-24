<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Kajian;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Support\Facades\Storage;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\KajianResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\KajianResource\RelationManagers;
use App\Models\Bidang;
use App\Models\Tahun;

class KajianResource extends Resource
{
    protected static ?string $model = Kajian::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'Kajian';

    protected static ?string $breadcrumb = "Kajian Daerah";

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama')
                    ->required(),
                TextInput::make('link'),
                FileUpload::make('file')
                    ->preserveFilenames(),
                Select::make('bidang')
                    ->label('Bidang')
                    ->options(Bidang::all()->pluck('keterangan', 'id'))
                    ->native(false),
                FileUpload::make('cover')
                    ->preserveFilenames(),
                Select::make('tahun')
                    ->label('Tahun')
                    ->options(Tahun::all()->pluck('title', 'id'))
                    ->native(false),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('cover')
                    ->width(75)
                    ->height(125),
                TextColumn::make('nama')
                    ->label('Nama')
                    ->searchable()
                    ->wrap(),
                TextColumn::make('bidang')
                    ->label('Bidang'),
                TextColumn::make('tahun')
                    ->label('Tahun')
                    ->searchable()
                    ->sortable(),
            ])
            ->emptyStateHeading('Tidak ada data kajian')
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()
                        ->after(function (Kajian $record) {
                            // delete single
                            if ($record->file) {
                                Storage::disk('public')->delete($record->file);
                            }
                        }),
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
            'index' => Pages\ListKajians::route('/'),
            'create' => Pages\CreateKajian::route('/create'),
            'view' => Pages\ViewKajian::route('/{record}'),
            'edit' => Pages\EditKajian::route('/{record}/edit'),
        ];
    }
}
