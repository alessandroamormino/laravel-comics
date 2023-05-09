<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    $links = [
        'Characters',
        'Comics',
        'Movies',
        'Tv',
        'Games',
        'collectibles',
        'Videos',
        'Fans',
        'News',
        'Shop'
    ];

    $comics = config('comics');

    $buy = [
        [
          "path" => "resources/images/buy-comics-digital-comics.png",
          "text" => "Digital Comics",
        ],
        [
          "path" => "resources/images/buy-comics-merchandise.png",
          "text" => "DC Merchandise",
        ],
        [
          "path" => "resources/images/buy-comics-subscriptions.png",
          "text" => "Subscription",
        ],
        [
          "path" => "resources/images/buy-comics-shop-locator.png",
          "text" => "Comics Shop Locator",
        ],
        [
          "path" => "resources/images/buy-dc-power-visa.svg",
          "text" => "DC Power Visa",
        ],
      ];

      $lists = [
        [
            [
                "title" => 'Dc Comics',
                "links" => [
                    'Characters',
                    'Comics',
                    'Movies',
                    'TV',
                    'Games',
                    'Videos',
                    'News',
                ],
            ],
            [
                "title" => 'Shop',
                "links" => [
                    'Shop DC',
                    'Shop DC Collectibles',
                ],
            ],
        ],
        [
            [
                "title" => 'DC',
                "links" => [
                    'Terms Of Use',
                    'Privacy policy (New)',
                    'Ad Choices',
                    'Advertising',
                    'Jobs',
                    'Subscriptions',
                    'Talent Workshops',
                    'CPSC Certificates',
                    'Ratings',
                    'Shop Help',
                    'Contact Us',
                ],
            ],
            [
                "title" => 'Sites',
                "links" => [
                    'DC',
                    'MAD Magazine',
                    'DC Kids',
                    'DC Universe',
                    'DC Power Visa',
                ],
            ],
        ],
      ];

    return view('home', compact('links', 'comics', 'buy', 'lists'));
})->name('home');
