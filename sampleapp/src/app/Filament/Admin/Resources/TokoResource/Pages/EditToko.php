<?php

namespace App\Filament\Admin\Resources\TokoResource\Pages;

use App\Filament\Admin\Resources\TokoResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditToko extends EditRecord
{
    protected static string $resource = TokoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
