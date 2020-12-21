<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class ViewGameTest extends TestCase
{
    /** @test */
    public function the_game_page_shows_correct_game_info()
    {
        Http::fake([
            'https://api.igdb.com/v4/games' => $this->fakeSingleGame()
        ]);

        $response = $this->get(route('games.show', 'animal-crossing-new-horizons'));

        $response->assertSuccessful();
        $response->assertSee('Animal Crossing: New Horizons');
        $response->assertSee('Simulator');
        $response->assertSee('Nintendo');
        $response->assertSee('Switch');
        $response->assertSee('86');
        $response->assertSee('90');
        $response->assertSee('twitter.com/animalcrossing');
        $response->assertSee('Escape to a deserted islan');
        $response->assertSee('images.igdb.com/igdb/image/upload/t_screenshot_big/sc6lt7.jpg');
        $response->assertSee('The Last Journey');
    }

    protected function fakeSingleGame()
    {
        return Http::response([
            [
                "id" => 109462,
                "aggregated_rating" => 90.181818181818,
                "cover" => [
                    "id" => 103813,
                    "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co283p.jpg",
                ],
                "genres" => [
                    [
                        "id" => 13,
                        "name" => "Simulator",
                    ],
                ],
                "involved_companies" => [
                    [
                        "id" => 94939,
                        "company" => [
                            "id" => 70,
                            "name" => "Nintendo",
                        ],
                    ],
                    [
                        "id" => 94940,
                        "company" => [
                            "id" => 7902,
                            "name" => "Nintendo EPD",
                        ],
                    ],
                ],
                "name" => "Animal Crossing: New Horizons",
                "platforms" => [
                    [
                        "id" => 130,
                        "abbreviation" => "Switch",
                    ],
                ],
                "rating" => 83.78065021453,
                "rating_count" => 144,
                "screenshots" => [
                    [
                        "id" => 308203,
                        "url" => "//images.igdb.com/igdb/image/upload/t_thumb/sc6lt7.jpg",
                    ],
                    [
                        "id" => 308204,
                        "url" => "//images.igdb.com/igdb/image/upload/t_thumb/sc6lt8.jpg",
                    ],
                    [
                        "id" => 377380,
                        "url" => "//images.igdb.com/igdb/image/upload/t_thumb/sc836s.jpg",
                    ],
                    [
                        "id" => 377381,
                        "url" => "//images.igdb.com/igdb/image/upload/t_thumb/sc836t.jpg",
                    ],
                    [
                        "id" => 377382,
                        "url" => "//images.igdb.com/igdb/image/upload/t_thumb/sc836u.jpg",
                    ],
                    [
                        "id" => 377383,
                        "url" => "//images.igdb.com/igdb/image/upload/t_thumb/sc836v.jpg",
                    ],
                    [
                        "id" => 377384,
                        "url" => "//images.igdb.com/igdb/image/upload/t_thumb/sc836w.jpg",
                    ],
                    [
                        "id" => 377385,
                        "url" => "//images.igdb.com/igdb/image/upload/t_thumb/sc836x.jpg",
                    ],
                    [
                        "id" => 377386,
                        "url" => "//images.igdb.com/igdb/image/upload/t_thumb/sc836y.jpg",
                    ],
                    [
                        "id" => 385274,
                        "url" => "//images.igdb.com/igdb/image/upload/t_thumb/sc89a2.jpg",
                    ],
                ],
                "similar_games" => [
                    [
                        "id" => 28277,
                        "cover" => [
                            "id" => 68046,
                            "url" => "//images.igdb.com/igdb/image/upload/t_thumb/v8qebygfdgzfmjaez55j.jpg",
                        ],
                        "involved_companies" => [
                            [
                                "id" => 46162,
                                "company" => [
                                    "id" => 12548,
                                    "name" => "Sleepless Clinic",
                                ],
                            ],
                            [
                                "id" => 46163,
                                "company" => [
                                    "id" => 5966,
                                    "name" => "IMGN.PRO",
                                ],
                            ],
                        ],
                        "name" => "The Last Journey",
                        "platforms" => [
                            [
                                "id" => 6,
                                "abbreviation" => "PC",
                            ],
                            [
                                "id" => 39,
                                "abbreviation" => "iOS",
                            ],
                        ],
                        "slug" => "the-last-journey",
                    ],
                    [
                        "id" => 36258,
                        "cover" => [
                            "id" => 74553,
                            "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co1lix.jpg",
                        ],
                        "involved_companies" => [
                            [
                                "id" => 50390,
                                "company" => [
                                    "id" => 8299,
                                    "name" => "Slitherine Ltd.",
                                ],
                            ],
                            [
                                "id" => 79177,
                                "company" => [
                                    "id" => 20255,
                                    "name" => "The Artistocrats",
                                ],
                            ],
                        ],
                        "name" => "Order of Battle: World War II",
                        "platforms" => [
                            [
                                "id" => 6,
                                "abbreviation" => "PC",
                            ],
                            [
                                "id" => 14,
                                "abbreviation" => "Mac",
                            ],
                        ],
                        "rating" => 80.0,
                        "slug" => "order-of-battle-world-war-ii",
                    ],
                    [
                        "id" => 37419,
                        "cover" => [
                            "id" => 107550,
                            "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co2azi.jpg",
                        ],
                        "involved_companies" => [
                            [
                                "id" => 71837,
                                "company" => [
                                    "id" => 16993,
                                    "name" => "Kiddy",
                                ],
                            ],
                        ],
                        "name" => "Dude Simulator",
                        "platforms" => [
                            [
                                "id" => 6,
                                "abbreviation" => "PC",
                            ],
                        ],
                        "rating" => 79.911633494131,
                        "slug" => "dude-simulator",
                    ],
                    [
                        "id" => 44242,
                        "cover" => [
                            "id" => 82669,
                            "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co1rsd.jpg",
                        ],
                        "involved_companies" => [
                            [
                                "id" => 64782,
                                "company" => [
                                    "id" => 15489,
                                    "name" => "Rebelia Games",
                                ],
                            ],
                            [
                                "id" => 64783,
                                "company" => [
                                    "id" => 9005,
                                    "name" => "PlayWay S.A.",
                                ],
                            ],
                        ],
                        "name" => "Junkyard Simulator",
                        "platforms" => [
                            [
                                "id" => 6,
                                "abbreviation" => "PC",
                            ],
                        ],
                        "slug" => "junkyard-simulator",
                    ],
                    [
                        "id" => 51577,
                        "cover" => [
                            "id" => 82238,
                            "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co1rge.jpg",
                        ],
                        "involved_companies" => [
                            [
                                "id" => 60525,
                                "company" => [
                                    "id" => 4643,
                                    "name" => "Kasedo Games",
                                ],
                            ],
                            [
                                "id" => 60526,
                                "company" => [
                                    "id" => 14753,
                                    "name" => "Dapper Penguin Studios",
                                ],
                            ],
                        ],
                        "name" => "Rise of Industry",
                        "platforms" => [
                            [
                                "id" => 3,
                                "abbreviation" => "Linux",
                            ],
                            [
                                "id" => 6,
                                "abbreviation" => "PC",
                            ],
                            [
                                "id" => 14,
                                "abbreviation" => "Mac",
                            ],
                        ],
                        "rating" => 50.869565217391,
                        "slug" => "rise-of-industry",
                    ],
                    [
                        "id" => 65827,
                        "cover" => [
                            "id" => 97215,
                            "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co230f.jpg",
                        ],
                        "involved_companies" => [
                            [
                                "id" => 56695,
                                "company" => [
                                    "id" => 11268,
                                    "name" => "Clarus Victoria",
                                ],
                            ],
                        ],
                        "name" => "Bronze Age",
                        "platforms" => [
                            [
                                "id" => 3,
                                "abbreviation" => "Linux",
                            ],
                            [
                                "id" => 6,
                                "abbreviation" => "PC",
                            ],
                            [
                                "id" => 14,
                                "abbreviation" => "Mac",
                            ],
                        ],
                        "rating" => 70.0,
                        "slug" => "bronze-age",
                    ],
                    [
                        "id" => 79134,
                        "cover" => [
                            "id" => 82162,
                            "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co1rea.jpg",
                        ],
                        "involved_companies" => [
                            [
                                "id" => 59485,
                                "company" => [
                                    "id" => 14200,
                                    "name" => "Uncasual Games",
                                ],
                            ],
                        ],
                        "name" => "Ancient Cities",
                        "platforms" => [
                            [
                                "id" => 6,
                                "abbreviation" => "PC",
                            ],
                        ],
                        "slug" => "ancient-cities",
                    ],
                    [
                        "id" => 101573,
                        "cover" => [
                            "id" => 82421,
                            "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co1rlh.jpg",
                        ],
                        "name" => "Simstory: Live As You Wish",
                        "rating" => 44.615383,
                        "slug" => "simstory-live-as-you-wish",
                    ],
                    [
                        "id" => 106279,
                        "cover" => [
                            "id" => 70048,
                            "url" => "//images.igdb.com/igdb/image/upload/t_thumb/co1i1s.jpg",
                        ],
                        "involved_companies" => [
                            [
                                "id" => 105100,
                                "company" => [
                                    "id" => 16062,
                                    "name" => "FJRD Interactive",
                                ],
                            ],
                        ],
                        "name" => "Among Trees",
                        "platforms" => [
                            [
                                "id" => 6,
                                "abbreviation" => "PC",
                            ],
                        ],
                        "slug" => "among-trees",
                    ],
                ],
                "slug" => "animal-crossing-new-horizons",
                "summary" => "Escape to a deserted island and create your own paradise as you explore, create, and customize in the Animal Crossing: New Horizons game. Your island getaway has a wealth of natural resources that can be used to craft everything from tools to creature comforts. You can hunt down insects at the crack of dawn, decorate your paradise throughout the day, or enjoy sunset on the beach while fishing in the ocean. The time of day and season match real life, so each day on your island is a chance to check in and find new surprises all year round.",
                "videos" => [
                    [
                        "id" => 28118,
                        "video_id" => "_3YNL0OWio0",
                    ],
                    [
                        "id" => 28119,
                        "video_id" => "dEh3MPy4GAU",
                    ],
                    [
                        "id" => 32890,
                        "video_id" => "nCwVTCxm29c",
                    ],
                    [
                        "id" => 35590,
                        "video_id" => "u9TY741PSh8",
                    ],
                    [
                        "id" => 35591,
                        "video_id" => "KpZyexo-ziA",
                    ],
                    [
                        "id" => 35592,
                        "video_id" => "aIDu18n3umY",
                    ],
                ],
                "websites" => [
                    [
                        "id" => 116668,
                        "url" => "https://www.nintendo.com/games/detail/animal-crossing-new-horizons-switch/",
                    ],
                    [
                        "id" => 116669,
                        "url" => "https://animalcrossing.fandom.com/wiki/Animal_Crossing:_New_Horizons",
                    ],
                    [
                        "id" => 116670,
                        "url" => "https://en.wikipedia.org/wiki/Animal_Crossing:_New_Horizons",
                    ],
                    [
                        "id" => 137604,
                        "url" => "https://twitter.com/animalcrossing",
                    ],
                    [
                        "id" => 137605,
                        "url" => "https://www.reddit.com/r/AnimalCrossing",
                    ],
                    [
                        "id" => 139144,
                        "url" => "https://discordapp.com/invite/qcNyHre",
                    ],
                ],
            ],
        ], 200);
    }
}
