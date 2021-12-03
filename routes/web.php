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


// route halaman login
Route::get('/', function () {
    return view('login.login', [
        'title' => 'Login'
    ]);
});

// route halaman register
Route::get('/register', function () {
    return view('login.register', [
        'title' => 'Register'
    ]);
});

// route halaman lupa password
Route::get('/forgot-password', function () {
    return view('login.forgot-password', [
        'title' => 'Lupa Password'
    ]);
});


//route halaman dashboard
Route::get('/dashboard', function () {
    return view('dashboard', [
        'title' => 'Dashboard'
    ]);
});

//route halaman kirim pesan whatsapp
Route::get('/send-message', function () {
    return view('whatsapp-send', [
        'title' => 'Send Message'
    ]);
});

Route::get('/webhook', function () {
    return view('whatsapp-webhook', [
        'title' => 'Webhook'
    ]);
});

Route::get('/whatsapp-menu', function () {
    return view('whatsapp-menu', [
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
