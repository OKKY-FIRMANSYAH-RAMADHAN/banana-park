<x-filament::section>
    <x-slot name="heading">
        Kalender Acara
    </x-slot>

    <x-slot name="description">
        Jadwal acara mendatang di Banana Park
    </x-slot>

    <div class="p-4 bg-white rounded-xl shadow">
        <div class="flex flex-col space-y-4">
            <div class="grid grid-cols-7 gap-2 text-center font-medium text-gray-500">
                <div>Min</div>
                <div>Sen</div>
                <div>Sel</div>
                <div>Rab</div>
                <div>Kam</div>
                <div>Jum</div>
                <div>Sab</div>
            </div>

            @php
                $currentMonth = now();
                $daysInMonth = $currentMonth->daysInMonth;
                $firstDayOfMonth = $currentMonth->copy()->startOfMonth();
                $startingDayOfWeek = $firstDayOfMonth->dayOfWeek;
                
                // Adjust for Sunday being 0 in Carbon but we want it to be position 0 in our grid
                $startingDayOfWeek = $startingDayOfWeek == 0 ? 6 : $startingDayOfWeek - 1;
                
                // Sample events - in a real app, these would come from your database
                $events = [
                    ['date' => now()->format('Y-m-d'), 'title' => 'Acara Hari Ini', 'color' => 'bg-amber-100 text-amber-800'],
                    ['date' => now()->addDays(3)->format('Y-m-d'), 'title' => 'Kunjungan Sekolah', 'color' => 'bg-blue-100 text-blue-800'],
                    ['date' => now()->addDays(7)->format('Y-m-d'), 'title' => 'Promo Weekend', 'color' => 'bg-green-100 text-green-800'],
                    ['date' => now()->addDays(14)->format('Y-m-d'), 'title' => 'Acara Spesial', 'color' => 'bg-purple-100 text-purple-800'],
                ];
                
                // Function to check if a date has events
                $hasEvent = function($day) use ($events, $currentMonth) {
                    $date = $currentMonth->copy()->startOfMonth()->addDays($day - 1)->format('Y-m-d');
                    foreach ($events as $event) {
                        if ($event['date'] === $date) {
                            return $event;
                        }
                    }
                    return false;
                };
            @endphp

            <div class="grid grid-cols-7 gap-2">
                @for ($i = 0; $i < $startingDayOfWeek; $i++)
                    <div class="h-16 p-1 text-center text-gray-300"></div>
                @endfor
                
                @for ($day = 1; $day <= $daysInMonth; $day++)
                    @php
                        $event = $hasEvent($day);
                        $isToday = $currentMonth->copy()->startOfMonth()->addDays($day - 1)->isToday();
                    @endphp
                    
                    <div class="h-16 p-1 border rounded-lg {{ $isToday ? 'border-amber-500' : 'border-gray-200' }} overflow-hidden">
                        <div class="text-right {{ $isToday ? 'font-bold text-amber-500' : 'text-gray-700' }}">
                            {{ $day }}
                        </div>
                        
                        @if ($event)
                            <div class="mt-1 px-1 py-0.5 text-xs rounded {{ $event['color'] }} truncate">
                                {{ $event['title'] }}
                            </div>
                        @endif
                    </div>
                @endfor
            </div>
            
            <div class="mt-4 text-right">
                <a href="#" class="text-sm text-amber-600 hover:text-amber-800 font-medium">
                    Lihat Semua Acara →
                </a>
            </div>
        </div>
    </div>
</x-filament::section>