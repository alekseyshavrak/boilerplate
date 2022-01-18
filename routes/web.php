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

# Post
Route::group(['as' => 'post.'], function () {
    Route::get('/', ['as' => 'catalog', 'uses' => \App\Http\Livewire\Page\Post\Catalog\Index::class]);
});

