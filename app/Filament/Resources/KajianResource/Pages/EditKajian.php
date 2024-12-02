<?php

namespace App\Filament\Resources\KajianResource\Pages;

use App\Filament\Resources\KajianResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKajian extends EditRecord
{
    protected static string $resource = KajianResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
