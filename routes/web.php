<?php

use App\Http\Controllers\EagerLoadingController;
use App\Http\Controllers\EloquentORMControllr;
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
    return view('welcome');
});

Route::get('/eloquent-relationships/eager-loading', [EloquentORMControllr::class ,'eagerLoading']);
