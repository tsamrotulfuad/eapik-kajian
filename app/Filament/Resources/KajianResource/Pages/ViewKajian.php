<?php

namespace App\Filament\Resources\KajianResource\Pages;

use App\Filament\Resources\KajianResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewKajian extends ViewRecord
{
    protected static string $resource = KajianResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
