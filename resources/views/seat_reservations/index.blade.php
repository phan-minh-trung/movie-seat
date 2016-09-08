{!! HTML::style('css/style.css'); !!}
@extends('layouts.app')

@section('content')

<div class="container seat-reservation">


    <div class="row">
        <div class="col-md-4 ">
            <div class="row booked-list"></div>

            </br>
            <form class="buy-form">
                <div class="form-group">
                    <label for="full-name" class="f-label">Full Name:</label>
                    <input type="text" class="form-control" id="full-name">
                </div>
                <div class="form-group">
                    <label for="email" class="f-label">Email address:</label>
                    <input type="email" class="form-control" id="email">
                </div>
                <div class="form-group">
                    <label for="phone" class="f-label">Cell Phone:</label>
                    <input type="number" class="form-control" id="phone">
                </div>
                <button type="button" class="btn btn-default" id="make_reservation">Buy</button>
            </form>
        </div>
        <div class="col-md-8">
            <div class="stage">
                <h2 class="title">SCREEN</h2>
            </div>
            <ol class="cabin">
                <li class="row">
                    <ol class="seats">
                        <li class="seat">
                            <label class="row-seat">A</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="A_1" />
                            <label for="A_1">1</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="A_2" />
                            <label for="A_2">2</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="A_3" />
                            <label for="A_3">3</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="A_4" />
                            <label for="A_4">4</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="A_5" />
                            <label for="A_5">5</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="A_6" />
                            <label for="A_6">6</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="A_7" />
                            <label for="A_7">7</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="A_8" />
                            <label for="A_8">8</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="A_9" />
                            <label for="A_9">9</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="A_10" />
                            <label for="A_10">10</label>
                        </li>
                    </ol>
                </li>

                <li class="row">
                    <ol class="seats">
                        <li class="seat">
                            <label class="row-seat">B</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="B_1" />
                            <label for="B_1">1</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="B_2" />
                            <label for="B_2">2</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="B_3" />
                            <label for="B_3">3</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="B_4" />
                            <label for="B_4">4</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="B_5" />
                            <label for="B_5">5</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="B_6" />
                            <label for="B_6">6</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="B_7" />
                            <label for="B_7">7</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="B_8" />
                            <label for="B_8">8</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="B_9" />
                            <label for="B_9">9</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="B_10" />
                            <label for="B_10">10</label>
                        </li>
                    </ol>
                </li>

                <li class="row">
                    <ol class="seats">
                        <li class="seat">
                            <label class="row-seat">C</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="C_1" />
                            <label for="C_1">1</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="C_2" />
                            <label for="C_2">2</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="C_3" />
                            <label for="C_3">3</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="C_4" />
                            <label for="C_4">4</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="C_5" />
                            <label for="C_5">5</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="C_6" />
                            <label for="C_6">6</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="C_7" />
                            <label for="C_7">7</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="C_8" />
                            <label for="C_8">8</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="C_9" />
                            <label for="C_9">9</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="C_10" />
                            <label for="C_10">10</label>
                        </li>
                    </ol>
                </li>

                <li class="row">
                    <ol class="seats">
                        <li class="seat">
                            <label class="row-seat">D</label>
                        </li>
                    </ol>
                </li>

                <li class="row">
                    <ol class="seats">
                        <li class="seat">
                            <label class="row-seat">E</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="E_1" />
                            <label for="E_1">1</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="E_2" />
                            <label for="E_2">2</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="E_3" />
                            <label for="E_3">3</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="E_4" />
                            <label for="E_4">4</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="E_5" />
                            <label for="E_5">5</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="E_6" />
                            <label for="E_6">6</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="E_7" />
                            <label for="E_7">7</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="E_8" />
                            <label for="E_8">8</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="E_9" />
                            <label for="E_9">9</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="E_10" />
                            <label for="E_10">10</label>
                        </li>
                    </ol>
                </li>

                <li class="row">
                    <ol class="seats">
                        <li class="seat">
                            <label class="row-seat">F</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="F_1" />
                            <label for="F_1">1</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="F_2" />
                            <label for="F_2">2</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="F_3" />
                            <label for="F_3">3</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="F_4" />
                            <label for="F_4">4</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="F_5" />
                            <label for="F_5">5</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="F_6" />
                            <label for="F_6">6</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="F_7" />
                            <label for="F_7">7</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="F_8" />
                            <label for="F_8">8</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="F_9" />
                            <label for="F_9">9</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="F_10" />
                            <label for="F_10">10</label>
                        </li>
                    </ol>
                </li>

                <li class="row">
                    <ol class="seats">
                        <li class="seat">
                            <label class="row-seat">G</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="G_1" />
                            <label for="G_1">1</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="G_2" />
                            <label for="G_2">2</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="G_3" />
                            <label for="G_3">3</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="G_4" />
                            <label for="G_4">4</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="G_5" />
                            <label for="G_5">5</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="G_6" />
                            <label for="G_6">6</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="G_7" />
                            <label for="G_7">7</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="G_8" />
                            <label for="G_8">8</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="G_9" />
                            <label for="G_9">9</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="G_10" />
                            <label for="G_10">10</label>
                        </li>
                    </ol>
                </li>

                <li class="row">
                    <ol class="seats">
                        <li class="seat">
                            <label class="row-seat">H</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="H_1" />
                            <label for="H_1">1</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="H_2" />
                            <label for="H_2">2</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="H_3" />
                            <label for="H_3">3</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="H_4" />
                            <label for="H_4">4</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="H_5" />
                            <label for="H_5">5</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="H_6" />
                            <label for="H_6">6</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="H_7" />
                            <label for="H_7">7</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="H_8" />
                            <label for="H_8">8</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="H_9" />
                            <label for="H_9">9</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="H_10" />
                            <label for="H_10">10</label>
                        </li>
                    </ol>
                </li>

                <li class="row">
                    <ol class="seats">
                        <li class="seat">
                            <label class="row-seat">I</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="I_1" />
                            <label for="I_1">1</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="I_2" />
                            <label for="I_2">2</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="I_3" />
                            <label for="I_3">3</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="I_4" />
                            <label for="I_4">4</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="I_5" />
                            <label for="I_5">5</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="I_6" />
                            <label for="I_6">6</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="I_7" />
                            <label for="I_7">7</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="I_8" />
                            <label for="I_8">8</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="I_9" />
                            <label for="I_9">9</label>
                        </li>
                        <li class="seat">
                            <input type="checkbox" id="I_10" />
                            <label for="I_10">10</label>
                        </li>
                    </ol>
                </li>
            </ol>
        </div>


    </div>

<script>
$( document ).ready(function() {

    var reservations = {!! json_encode($reservations->toArray()) !!};
    $.each(reservations, function( index, value ) {
        makeSeatSold(value.x_tier + '_' + value.y_tier);
    });

    $('#make_reservation').click(function() {

        var reservations = [];
        var $form = $('.buy-form');
        var $bookedSeats = $('.booked-list span');

        if ($bookedSeats.length > 0) {
            $.each( $bookedSeats, function( key, value ) {
                reservations.push({
                    movie_id: 10001,
                    name: $form.find('#full-name').val(),
                    email: $form.find('#email').val(),
                    phone: $form.find('#phone').val(),
                    price: '70000',
                    x_tier: $(value).text().split('_')[0],
                    y_tier: $(value).text().split('_')[1]
                })
            });

            $('#make_reservation').prop('disabled', true);

            make_reservation({ reservations });
        } else {
            alert('Please choose your seats!');
        }


    });

    function make_reservation(data) {
        $.ajax({
            url: '/seat_reservation',
            type: 'POST',
            beforeSend: function(xhr) {
                xhr.setRequestHeader('X-CSRF-Token', $('meta[name="csrf-token"]').attr('content'))
            },
            data: data,
            success: function(response) {
                $('#make_reservation').prop('disabled', false);
                if (response.length > 0) {
                    $.each(response, function( index, value ) {
                        cellId = value.x_tier + '_' + value.y_tier;
                        $('input#' + cellId).closest('li').addClass('sold');
                    });
                    alert("Registered the reservations successfull!");
                }
            }
        });
    }

    $('.cabin :checkbox').change(function() {
        var $this = $(this);
        var $seatId = $this.attr('id');

        if ($this.closest('li').hasClass('sold')) {
            return false;
        }

        if ($this.is(':checked')) {
            $('.booked-list').append("<span class='seat-sold " + $seatId + "'>" + $seatId + "</span>");
            $this.closest('.seat').find('label').css('background', '#E6CAC4');

        } else {
            $this.closest('.seat').find('label').css('background', '#B9DEA0');
            $('.booked-list').find("span." + $seatId).remove();
        }
    });
});
</script>

</div>
@endsection
