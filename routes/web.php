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
defined('NFT_BASE_PATH') or define('NFT_BASE_PATH', 'uploads/nfts/');

function getContactResult(): ?array {
    $contact_result = array();
    $errors = session('errors');
    if(session('contact-failure')) {
        $contact_result['ok'] = false;
        $contact_result['msg'][] = session('contact-failure');
    } else if($errors && $errors->any()) {
        $contact_result['ok'] = false;
        foreach($errors->all() as $error) {
            $contact_result['msg'][] = $error;
        }
    } else if(session('contact-ok')) {
        $contact_result['ok'] = true;
        $contact_result['msg'] = session('contact-ok');
    } else {
        $contact_result = null;   
    };
    session()->forget('contact-ok');
    session()->forget('errors');
    session()->forget('contact-failure');
    return $contact_result && !empty($contact_result) ? $contact_result : null;
}

Route::get('/', function () {
    $nfts = NFT::latest()->take(4)->get(); // TODO: or maybe take most populare ones!
    $nftBasePath = NFT_BASE_PATH;
    $singleNftBaseRoute = 'portfolio/';
    $contact_result = getContactResult();
    return view('pages/home', compact('nfts', 'nftBasePath', 'singleNftBaseRoute', 'contact_result'));
});

Route::get('/about-us', function() {
    $contact_result = getContactResult();
    return view('pages/abouts/about-us', compact('contact_result'));
});

Route::get('/about-project', function() {
    $contact_result = getContactResult();
    return view('pages/abouts/about-project', compact('contact_result'));
});

Route::get('/whoami', function() {
    return view('pages/abouts/whoami');
});

Route::get('/roadmap', function() {
    $contact_result = getContactResult();
    return view('pages/roadmap', compact('contact_result'));
});

Route::get('/portfolio/grid', function() {
    $contact_result = getContactResult();
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