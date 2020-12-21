<?php

namespace Tests\Feature;

use App\Http\Livewire\PopularGames;
use Illuminate\Support\Facades\Http;
use Livewire\Livewire;
use Tests\TestCase;

class PopularGamesTest extends TestCase
{
    /** @test */
    public function the_main_page_shows_popular_games()
    {
        Http::fake([
            'https://api.igdb.com/v4/games' => $this->fakePopularGame(),
        ],);

        Livewire::test(PopularGames::class)
            ->assertSet('popularGames', [],)
            ->call('loadPopularGames')
            ->assertSee('Cyberpunk 2077')
            ->assertSee('PC, PS4, XONE, Switch');
    }

    private function fakePopularGame()
    {
        return Http::response([
            [
                "id" => 1877,
                "cover" => [
                    "id" => 122536,
                    "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co2mjs.jpg",
                ],
                "first_release_date" => 1607558400,
                "name" => "Cyberpunk 2077",
                "platforms" => [
                    [
                        "id" => 6,
                        "abbreviation" => "PC",
                    ],
                    [
                        "id" => 48,
                        "abbreviation" => "PS4",
                    ],
                    [
                        "id" => 49,
                        "abbreviation" => "XONE",
                    ],
                    [
                        "id" => 167,
                        "abbreviation" => "PS5",
                    ],
                    [
                        "id" => 169,
                        "abbreviation" => "Series X",
                    ],
                    [
                        "id" => 170,
                        "abbreviation" => "Stadia",
                    ],
                ],
                "rating" => 71.255828852896,
                "rating_count" => 31,
                "slug" => "cyberpunk-2077",
            ],
            [
                "id" => 134581,
                "cover" => [
                    "id" => 111326,
                    "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co2dwe.jpg",
                ],
                "first_release_date" => 1605139200,
                "name" => "Marvel's Spider-Man: Miles Morales",
                "platforms" => [
                    [
                        "id" => 48,
                        "abbreviation" => "PS4",
                    ],
                    [
                        "id" => 167,
                        "abbreviation" => "PS5",
                    ],
                ],
                "rating" => 82.766180809549,
                "rating_count" => 19,
                "slug" => "marvels-spider-man-miles-morales",
            ],
            [
                "id" => 121752,
                "cover" => [
                    "id" => 114223,
                    "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co2g4v.jpg",
                ],
                "first_release_date" => 1603756800,
                "name" => "Ghostrunner",
                "platforms" => [
                    [
                        "id" => 6,
                        "abbreviation" => "PC",
                    ],
                    [
                        "id" => 48,
                        "abbreviation" => "PS4",
                    ],
                    [
                        "id" => 49,
                        "abbreviation" => "XONE",
                    ],
                    [
                        "id" => 130,
                        "abbreviation" => "Switch",
                    ],
                ],
                "rating" => 80.189653314877,
                "rating_count" => 13,
                "slug" => "ghostrunner",
            ],
            [
                "id" => 141408,
                "cover" => [
                    "id" => 121126,
                    "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co2lgm.jpg",
                ],
                "first_release_date" => 1606435200,
                "name" => "Zaos",
                "platforms" => [
                    [
                        "id" => 6,
                        "abbreviation" => "PC",
                    ],
                ],
                "rating" => 100.0,
                "rating_count" => 9,
                "slug" => "zaos",
            ],
            [
                "id" => 138343,
                "cover" => [
                    "id" => 114155,
                    "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co2g2z.jpg",
                ],
                "first_release_date" => 1605830400,
                "name" => "Hyrule Warriors: Age Of Calamity",
                "platforms" => [
                    [
                        "id" => 130,
                        "abbreviation" => "Switch",
                    ],
                ],
                "rating" => 80.164302566118,
                "rating_count" => 9,
                "slug" => "hyrule-warriors-age-of-calamity",
            ],
            [
                "id" => 122120,
                "cover" => [
                    "id" => 94523,
                    "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co20xn.jpg",
                ],
                "first_release_date" => 1604016000,
                "name" => "The Dark Pictures Anthology: Little Hope",
                "platforms" => [
                    [
                        "id" => 6,
                        "abbreviation" => "PC",
                    ],
                    [
                        "id" => 48,
                        "abbreviation" => "PS4",
                    ],
                    [
                        "id" => 49,
                        "abbreviation" => "XONE",
                    ],
                ],
                "rating" => 69.687221179946,
                "rating_count" => 9,
                "slug" => "the-dark-pictures-anthology-little-hope",
            ],
            [
                "id" => 137001,
                "cover" => [
                    "id" => 113151,
                    "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co2fb3.jpg",
                ],
                "first_release_date" => 1605225600,
                "name" => "Call of Duty: Black Ops Cold War",
                "platforms" => [
                    [
                        "id" => 6,
                        "abbreviation" => "PC",
                    ],
                    [
                        "id" => 48,
                        "abbreviation" => "PS4",
                    ],
                    [
                        "id" => 49,
                        "abbreviation" => "XONE",
                    ],
                    [
                        "id" => 167,
                        "abbreviation" => "PS5",
                    ],
                    [
                        "id" => 169,
                        "abbreviation" => "Series X",
                    ],
                ],
                "rating" => 69.894078705406,
                "rating_count" => 8,
                "slug" => "call-of-duty-black-ops-cold-war",
            ],
            [
                "id" => 100413,
                "cover" => [
                    "id" => 119926,
                    "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co2kja.jpg",
                ],
                "first_release_date" => 1603929600,
                "name" => "Watch Dogs: Legion",
                "platforms" => [
                    [
                        "id" => 6,
                        "abbreviation" => "PC",
                    ],
                    [
                        "id" => 48,
                        "abbreviation" => "PS4",
                    ],
                    [
                        "id" => 49,
                        "abbreviation" => "XONE",
                    ],
                    [
                        "id" => 167,
                        "abbreviation" => "PS5",
                    ],
                    [
                        "id" => 169,
                        "abbreviation" => "Series X",
                    ],
                    [
                        "id" => 170,
                        "abbreviation" => "Stadia",
                    ],
                ],
                "rating" => 64.40488301119,
                "rating_count" => 8,
                "slug" => "watch-dogs-legion",
            ],
            [
                "id" => 133004,
                "cover" => [
                    "id" => 111927,
                    "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co2ed3.jpg",
                ],
                "first_release_date" => 1604966400,
                "name" => "Assassin's Creed Valhalla",
                "platforms" => [
                    [
                        "id" => 6,
                        "abbreviation" => "PC",
                    ],
                    [
                        "id" => 48,
                        "abbreviation" => "PS4",
                    ],
                    [
                        "id" => 49,
                        "abbreviation" => "XONE",
                    ],
                    [
                        "id" => 167,
                        "abbreviation" => "PS5",
                    ],
                    [
                        "id" => 169,
                        "abbreviation" => "Series X",
                    ],
                    [
                        "id" => 170,
                        "abbreviation" => "Stadia",
                    ],
                ],
                "rating" => 76.275879423708,
                "rating_count" => 7,
                "slug" => "assassins-creed-valhalla",
            ],
            [
                "id" => 18020,
                "cover" => [
                    "id" => 68953,
                    "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co1h7d.jpg",
                ],
                "first_release_date" => 1604016000,
                "name" => "Visage",
                "platforms" => [
                    [
                        "id" => 6,
                        "abbreviation" => "PC",
                    ],
                    [
                        "id" => 48,
                        "abbreviation" => "PS4",
                    ],
                    [
                        "id" => 49,
                        "abbreviation" => "XONE",
                    ],
                ],
                "rating" => 83.089980340586,
                "rating_count" => 7,
                "slug" => "visage",
            ],
            [
                "id" => 113118,
                "cover" => [
                    "id" => 116141,
                    "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co2hm5.jpg",
                ],
                "first_release_date" => 1605139200,
                "name" => "The Pathless",
                "platforms" => [
                    [
                        "id" => 6,
                        "abbreviation" => "PC",
                    ],
                    [
                        "id" => 14,
                        "abbreviation" => "Mac",
                    ],
                    [
                        "id" => 39,
                        "abbreviation" => "iOS",
                    ],
                    [
                        "id" => 48,
                        "abbreviation" => "PS4",
                    ],
                    [
                        "id" => 167,
                        "abbreviation" => "PS5",
                    ],
                ],
                "rating" => 71.916596264769,
                "rating_count" => 6,
                "slug" => "the-pathless",
            ],
        ], 200);
    }
}
