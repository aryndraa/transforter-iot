<?php

namespace App\Filament\Resources\TableResource\Pages;

use App\Filament\Resources\TableResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateTable extends CreateRecord
{
    protected static string $resource = TableResource::class;

    protected function afterCreate(): void
    {
        $record = $this->record;

        $record->qr = 'http://http://127.0.0.1:8000/menu/' . $record->id;

        $record->save();
    }
}
