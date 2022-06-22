<?php

use Illuminate\Support\Facades\Route;

Route::name('guest.')->group(function() {
    Route::namespace('App\Http\Controllers\Guests')->group(function() {
        Route::get('/{section?}', 'PageController@getSections')->where('section', '[a-z_]*')->name('sections');
    });
});
