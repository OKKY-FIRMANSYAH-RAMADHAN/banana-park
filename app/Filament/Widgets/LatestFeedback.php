<?php

namespace App\Filament\Widgets;

use App\Models\Saran;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class LatestFeedback extends BaseWidget
{
    protected static ?int $sort = 3;
    
    protected int | string | array $columnSpan = 'full';

    public function table(Table $table): Table
    {
        return $table
            ->heading('Saran Terbaru')
            ->description('Daftar saran terbaru dari pengunjung')
            ->query(Saran::query()->latest()->limit(5))
            ->columns([
                Tables\Columns\TextColumn::make('nama')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('pesan')
                    ->limit(50),
                Tables\Columns\IconColumn::make('dibaca')
                    ->boolean(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime('d M Y H:i')
                    ->sortable()
                    ->label('Tanggal'),
            ])
            ->actions([
                Tables\Actions\Action::make('mark_as_read')
                    ->label('Tandai Dibaca')
                    ->icon('heroicon-m-check')
                    ->color('success')
                    ->visible(fn (Saran $record): bool => !$record->dibaca)
                    ->action(function (Saran $record): void {
                        $record->update(['dibaca' => true]);
                    }),
            ]);
    }
}