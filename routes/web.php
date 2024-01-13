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
defined('NFT_BASE_PATH') or define('NFT_BASE_PATH', 'uploads/nfts/');


Route::get('/', function () {
    $nfts = NFT::latest()->take(4)->get(); // TODO: or maybe take most populare ones!
    $nftBasePath = NFT_BASE_PATH;
    $singleNftBaseRoute = 'portfolio/';
    return view('pages/home', compact('nfts', 'nftBasePath', 'singleNftBaseRoute'));
});

Route::get('/about-us', function() {
    return view('pages/about-us');
});

Route::get('/roadmap', function() {
    return view('pages/roadmap');
});

Route::get('/portfolio/grid', function() {
    $nfts = NFT::latest()->get(); // TODO: or maybe take most populare ones!
    $nftBasePath = NFT_BASE_PATH;
    $singleNftBaseRoute = '';
    return view('pages/portfolio/portfolio-grid', compact('nfts', 'nftBasePath', 'singleNftBaseRoute'));
});

Route::get('/portfolio/nft/{id}', function() {
    $id = request()->route('id');
    $nft = NFT::find($id);
    $nftBasePath = NFT_BASE_PATH;

    return view('pages/portfolio/nft/single-nft', compact('nft', 'nftBasePath'));
});
