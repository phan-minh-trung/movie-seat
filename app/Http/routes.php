<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('posts', 'PostsController');

/**
 * List all Seat Reservation
 */
Route::get('/seat_reservation', 'SeatReservationsController@index');
Route::get('/seat_reservation/list_seats', 'SeatReservationsController@list_seats');

/**
 * Add A New Seat Reservation
 */
Route::post('/seat_reservation', 'SeatReservationsController@book');

Route::delete('/seat_reservation/delete/{id}', 'SeatReservationsController@delete');
