<?php

use Illuminate\Support\Facades\Route;

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

    $title = "Hello World";

    $subtitle = "Questo è il primo esercizio fatto con Laravel!";

    //$mvc = ["model", "view", "controller"];
    $mvc = [];

    return view('home', compact('title', 'subtitle', 'mvc'));
});

Route::get('/about-us', function () {

    $title = "About Us";

    $description = "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quod ipsam unde incidunt aliquid excepturi odio aperiam molestias illum assumenda. Minima ipsam tempora libero dolorem error perspiciatis autem optio repellendus assumenda?";

    return view('about', compact('title', 'description'));
});

Route::get('/social', function () {

    $title = "Follow us";

    $socials = ["instagram", "facebook", "X", "discord"];

    return view('social', compact('title', 'socials'));
});
