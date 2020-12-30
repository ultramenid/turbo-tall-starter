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
    $data = [
        'title' => 'Home page',
        'navbar' => 'home',
        'data' => 'Hi from page home 😁'
    ];
    return view('pages.home', $data);
});
Route::get('/page1', function () {
    $data = [
        'title' => 'Page 1 ',
        'navbar' => 'page1',
        'data' => 'Hi from page 1 😁'
    ];
    return view('pages.page1', $data);
});

Route::get('/page2', function () {
    $data = [
        'title' => 'Page 2 ',
        'navbar' => 'page2',
        'data' => 'Hi from page 2 😁'
    ];
    return view('pages.page2', $data);
});
