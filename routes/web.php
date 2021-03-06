<?php

use App\Events\Message;
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
    return view('index');
});

Route::post('send-message', function (\Illuminate\Http\Request $request) {
    event(
        new Message(
            $request->input('username'),
            $request->input('message')
        )
    );

    return $request;
});
