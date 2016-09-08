<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SeatReservation extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'seat_reservations';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['movie_id', 'name', 'email', 'phone', 'price', 'x_tier', 'y_tier'];
}
