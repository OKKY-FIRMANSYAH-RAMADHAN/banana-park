<?php

namespace App\Filament\Resources\SaranResource\Pages;

use App\Filament\Resources\SaranResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSaran extends ListRecords
{
    protected static string $resource = SaranResource::class;
    
    protected static ?string $title = 'Saran';

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
