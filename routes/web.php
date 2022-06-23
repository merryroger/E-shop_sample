<?php

use Illuminate\Support\Facades\Route;

Route::name('guest.')->group(function() {
    Route::namespace('App\Http\Controllers\Guests')->group(function() {
        Route::get('/{section?}', ['uses' => 'PageController@getSections'])->where('section', '[a-z_]*')->name('pages');
    });
});
