<?php

use App\Http\Controllers\Guest\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function (){
    return view('home');

} )->name("HomePage");

//[PageController::class, 'index']
