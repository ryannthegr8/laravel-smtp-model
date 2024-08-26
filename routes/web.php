<?php

use App\Mail\HelloMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;


// Method 1: without controller
Route::post('/send', function (Request $request) {
    $data = [
        'name' => $request->name,
        'phone' => $request->phone,
    ];

    Mail::to('mmbaleryan@gmail.com')->send(new HelloMail($data));
});

// Method 2: with controller
// Route::post('/send', [HelloController::class, 'send']);

Route::get('/', function () {
    return view('welcome');
});
