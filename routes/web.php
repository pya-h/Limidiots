<?php

use App\Http\Controllers\MessageController;
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
    $nfts = NFT::latest()->take(4)->get(); // TODO: or maybe take most populare ones!
    $nftBasePath = NFT_BASE_PATH;
    $singleNftBaseRoute = 'portfolio/';
    $contact_result = analyseContactResult();
    return view('pages/home', compact('nfts', 'nftBasePath', 'singleNftBaseRoute', 'contact_result'));
});

Route::get('/about-us', function() {
    $contact_result = analyseContactResult();
    return view('pages/abouts/about-us', compact('contact_result'));
});

Route::get('/about-project', function() {
    $contact_result = analyseContactResult();
    return view('pages/abouts/about-project', compact('contact_result'));
});

Route::get('/whoami', function() {
    return view('pages/abouts/whoami');
});

Route::get('/roadmap', function() {
    $contact_result = analyseContactResult();
    return view('pages/roadmap', compact('contact_result'));
});

Route::get('/portfolio/grid', function() {
    $contact_result = analyseContactResult();
    $nfts = NFT::latest()->get(); // TODO: or maybe take most populare ones!
    $nftBasePath = NFT_BASE_PATH;
    $singleNftBaseRoute = '';
    return view('pages/portfolio/portfolio-grid', compact('nfts', 'nftBasePath', 'singleNftBaseRoute', 'contact_result'));
});

Route::get('/portfolio/nft/{id}', function() {
    $id = request()->route('id');
    $nft = NFT::find($id);
    $nftBasePath = NFT_BASE_PATH;

    return view('pages/portfolio/nft/single-nft', compact('nft', 'nftBasePath'));
});

Route::post('/contact-us', [MessageController::class,'store'])->name('contact-us');