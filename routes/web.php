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
    $tvSeries = [
        [ 
            'name' => 'The Office',
            'release' => 2005,
            'emoji' => '🧑‍💼',
            'category' => 'Sitcom',
        ],
        [ 
            'name' => 'Gilmore Girls',
            'release' => 2000,
            'emoji' => '👩‍👧',
            'category' => 'Drama',
        ],
        [ 
            'name' => 'Friends',
            'release' => 1994,
            'emoji' => '👨‍👩‍👧‍👧',
            'category' => 'Sitcom',
        ],
        [ 
            'name' => 'Vikings',
            'release' => 2013,
            'emoji' => '🗡️',
            'category' => 'Adventure',
        ],
        [ 
            'name' => 'Emily in Paris',
            'release' => 2020,
            'emoji' => '🗼',
            'category' => 'Rom-Com',
        ],
        [ 
            'name' => 'Outlander',
            'release' => 2014,
            'emoji' => '💕',
            'category' => 'Drama',
        ],
        [ 
            'name' => 'Dark',
            'release' => 2017,
            'emoji' => '⏳',
            'category' => 'Mistery',
        ],
    ];

    // $categories = ['Sitcom', 'Drama', 'Adventure', 'Rom-com', 'Mistery'];

    return view('welcome', ['serieTv' => $tvSeries]);
});


Route::get('/aboutus', function(){
    $staff = [
        [
            'name' => 'Antonio',
            'job' => 'Ricerca sempre nuove serie',
            'profile-img' => 'https://cdn-icons-png.flaticon.com/512/4140/4140037.png',

        ],
        [
            'name' => 'Alessandro',
            'job' => 'Pagato per guardare di tutto',
            'profile-img' => 'https://cdn-icons-png.flaticon.com/512/4140/4140048.png',

        ],
        [
            'name' => 'Laura',
            'job' => 'Spietata critica di serie tv',
            'profile-img' => 'https://cdn-icons-png.flaticon.com/512/4140/4140047.png',

        ],
        
    ];
    return view('aboutus', ['staff' => $staff]);
});

Route::get('/contatti', function(){
    return view('contatti');
});