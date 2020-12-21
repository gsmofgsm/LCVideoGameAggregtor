<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class MostAnticipated extends Component
{
    public $mostAnticipated = [];

    public function loadMostAnticipated()
    {
        $current = Carbon::now()->timestamp;
        $afterFourMonths = Carbon::now()->addMonths(4)->timestamp;

        $this->mostAnticipated = Http::withHeaders([
            'Client-ID' => config('services.igdb.id'),
            'Authorization' => 'Bearer ' . config('services.igdb.token')
        ])->withBody(
            "
                fields name, cover.url, first_release_date, total_rating_count,
                platforms.abbreviation, rating, rating_count, summary;
                where platforms = (48,49,130,6)
                & (first_release_date >= {$current}
                & first_release_date < {$afterFourMonths}
                );
                sort total_rating_count desc;
                limit 4;
                ", 'text/plain'
        )->post('https://api.igdb.com/v4/games')->json();
    }

    public function render()
    {
        return view('livewire.most-anticipated');
    }
}
