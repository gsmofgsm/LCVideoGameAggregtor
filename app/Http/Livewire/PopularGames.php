<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use Livewire\Component;

class PopularGames extends Component
{
    public $popularGames = [];

    public function loadPopularGames()
    {
        $before = Carbon::now()->subMonths(2)->timestamp;
        $after = Carbon::now()->addMonths(2)->timestamp;

        $popularGamesUnformatted = Cache::remember('popular-games', 7, function() use ($before, $after) {
            return Http::withHeaders([
                'Client-ID' => config('services.igdb.id'),
                'Authorization' => 'Bearer ' . config('services.igdb.token')
            ])->withBody(
                "
                fields name, cover.url, first_release_date, rating_count, platforms.abbreviation, rating,
                    slug;
                where platforms = (48,49,130,6)
                & (first_release_date >= {$before}
                & first_release_date < {$after}
                & rating_count > 5
                );
                sort rating_count desc;
                limit 12;
                ", 'text/plain'
            )->post('https://api.igdb.com/v4/games')->json();
        });

//        dd($this->formatForView($popularGamesUnformatted));

        $this->popularGames = $this->formatForView($popularGamesUnformatted);

        collect($this->popularGames)->filter(function ($game) {
            return $game['rating'];
        })->each(function ($game) {
            $this->emit('gameWithRatingAdded', [
                'slug' => $game['slug'],
                'rating' => $game['rating']/100
            ]);
        });
    }

    public function render()
    {
        return view('livewire.popular-games');
    }

    private function formatForView($games)
    {
        return collect($games)->map(function ($game) {
            return collect($game)->merge([
                'coverImageUrl' => isset($game['cover'])
                    ? Str::replaceFirst('thumb', 'cover_big', $game['cover']['url'])
                    : 'https://via.placeholder.com/264x352',
                'rating' => isset($game['rating']) ? round($game['rating']) : null,
                'platforms' => collect($game['platforms'])->pluck('abbreviation')->implode(', '),
            ]);
        });
    }
}
