<?php

use App\Models\Stat;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

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
    $stat = Stat::where(['name' => 'website_views'])->find(1);
    $counter = $stat ? $stat->counter : 0;
    return view('welcome', ['websiteViewsCounter' => $counter]);
});

Route::get('/storage', function () {
    return base64_encode(Storage::get('showcase-storage-retrieval.jpg'));
});

Route::get('/health', function () {
    return 'heart-beat';
});
