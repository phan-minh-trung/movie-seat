<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\SeatReservation;
use Illuminate\Http\Request;
use Session;
use Pusher;

class SeatReservationsController extends Controller
{

    /**
     * Display a screen to book
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $reservations = SeatReservation::all();

        return view('seat_reservations.index', compact('reservations'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function list()
    {
        $reservations = SeatReservation::all();

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

        if (!empty($params) && isset($params['reservations'])) {
            $reservations = $params['reservations'];
            SeatReservation::insert($reservations);

            $seats = [];
            foreach ($reservations as $value) {
                $seats[] = $value['x_tier'] . '_' . $value['y_tier'];
            }

            $options = array(
                'encrypted' => true
            );
            $pusher = new Pusher(
                'e15c92ee7fea7b068ff6',
                'd4a59a6801c6c2c26043',
                '246151',
                $options
            );

            $data['message'] = json_encode($seats);
            $pusher->trigger('test_channel', 'my_event', $data);

            return response()->json($reservations);
        }

        return response()->json([]);
    }
}
