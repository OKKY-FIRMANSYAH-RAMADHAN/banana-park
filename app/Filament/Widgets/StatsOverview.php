<?php

namespace App\Filament\Widgets;

use App\Models\Fasilitas;
use App\Models\Program;
use App\Models\Saran;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected static ?string $pollingInterval = null;
    protected static ?int $sort = 1;

    protected function getStats(): array
    {
        return [
            Stat::make('Total Program', Program::count())
                ->description('Program yang tersedia')
                ->descriptionIcon('heroicon-m-academic-cap')
                ->color('warning'),

            Stat::make('Total Fasilitas', Fasilitas::count())
                ->description('Fasilitas yang tersedia')
                ->descriptionIcon('heroicon-m-building-storefront')
                ->color('success'),

            Stat::make('Total Saran', Saran::count())
                ->description('Saran masuk')
                ->descriptionIcon('heroicon-m-chat-bubble-left-right')
                ->color('danger'),

            Stat::make('Saran Belum Dibaca', Saran::where('dibaca', false)->count())
                ->description('Saran belum dibaca')
                ->descriptionIcon('heroicon-m-envelope')
                ->color('primary'),
        ];
    }
}