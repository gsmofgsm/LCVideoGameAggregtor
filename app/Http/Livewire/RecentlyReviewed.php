<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class RecentlyReviewed extends Component
{
    public $recentlyReviewed = [];

    public function loadRecentlyReviewed()
    {
        $before = Carbon::now()->subMonths(2)->timestamp;
        $current = Carbon::now()->timestamp;

        $this->recentlyReviewed = Http::withHeaders([
            'Client-ID' => config('services.igdb.id'),
            'Authorization' => 'Bearer ' . config('services.igdb.token')
        ])->withBody(
            "
                fields name, cover.url, first_release_date, total_rating_count, platforms.abbreviation, rating, summary;
                where platforms = (48,49,130,6)
                & (first_release_date >= {$before}
                & first_release_date < {$current}
                & rating_count > 5
                );
                sort total_rating_count desc;
                limit 3;
                ", 'text/plain'
        )->post('https://api.igdb.com/v4/games')->json();
    }
    public function render()
    {
        return view('livewire.recently-reviewed');
    }
}
