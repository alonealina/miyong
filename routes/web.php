<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'App\Http\Controllers\MiyongController@index')->name('index');
Route::get('why', 'App\Http\Controllers\MiyongController@why')->name('why');
Route::get('contact', 'App\Http\Controllers\MiyongController@contact')->name('contact');
Route::post('mail_send', 'App\Http\Controllers\MiyongController@mail_send')->name('mail_send');
Route::get('mail_comp', 'App\Http\Controllers\MiyongController@mail_comp')->name('mail_comp');

