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


// Route::get('/', function () {
//     return view('dashboard2', [
//         'title' => 'Dashboard'
//     ]);
// });

// Route::get('/', function () {
//     return view('dashboard');
// });

// Route::get('/menu', function () {
//     return view('menu', [
//         'title' => 'Menu Whatsapp'
//     ]);
// });

// Route::get('/broadcast', function () {
//     return view('broadcast', [
//         'title' => 'Broadcast'
//     ]);
// });


// admin lte

Route::get('/master', function () {
    return view('layouts.master', [
        'title' => 'master'
    ]);
});

Route::get('/', function () {
    return view('dashboard', [
        'title' => 'Dashboard'
    ]);
});

//menu whatsapp
Route::get('/send_message', function () {
    return view('whatsapp_send', [
        'title' => 'Send Message'
    ]);
});

Route::get('/webhook', function () {
    return view('whatsapp_webhook', [
        'title' => 'Webhook'
    ]);
});

Route::get('/whatsapp_menu', function () {
    return view('whatsapp_menu', [
        'title' => 'Menu Whatsapp'
    ]);
});

//end of menu whatsapp
Route::get('/broadcast', function () {
    return view('broadcast', [
        'title' => 'Broadcast'
    ]);
});

Route::get('/replay', function () {
    return view('replay', [
        'title' => 'Auto Replay'
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        'title' => 'Contact'
    ]);
});

Route::get('/api', function () {
    return view('api', [
        'title' => 'Rest API'
    ]);
});
