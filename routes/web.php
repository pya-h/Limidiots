<?php

use Illuminate\Support\Facades\Route;
use App\Models\NFT;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $choosen_nfts = NFT::latest()->take(4)->get(); // TODO: or maybe take most populare ones!
    $nftBasePath = 'uploads/nfts/';
    return view('pages/home', compact('choosen_nfts', 'nftBasePath'));
});

Route::get('/about-us', function() {
    return view('pages/about-us');
});

Route::get('/roadmap', function() {
    return view('pages/roadmap');
});
