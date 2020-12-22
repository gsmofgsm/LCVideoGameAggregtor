<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class SearchDropdown extends Component
{
    public $search = '';
    public $searchResults = [];

    public function render()
    {
        if (strlen($this->search) > 2) {
            $this->searchResults = Http::withHeaders([
                'Client-ID' => config('services.igdb.id'),
                'Authorization' => 'Bearer ' . config('services.igdb.token')
            ])->withBody(
                "
                search \"{$this->search}\";
                fields name, slug, cover.url;
                limit 6;
                ", 'text/plain'
            )->post('https://api.igdb.com/v4/games')->json();
        }
        return view('livewire.search-dropdown');
    }
}
