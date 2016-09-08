<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\SeatReservation;
use Illuminate\Http\Request;
use Session;

class SeatReservationsController extends Controller
{

    /**
     * Display a screen to book
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('seat_reservations.index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function list()
    {
        $reservations = SeatReservation::paginate(25);

        return view('seat_reservations.list', compact('reservations'));
    }

    /**
     * Store a new user.
     *
     * @param  Request  $request
     * @return Response
     */
    public function book(Request $request)
    {
        $params = $request->all();
        var_dump($params);
    }
}
