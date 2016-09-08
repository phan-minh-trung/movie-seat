@extends('layouts.app')

@section('content')
<div class="container">

    <h1>Seat Reservations </h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th>
                    <th> MovieID </th>
                    <th> Name </th>
                    <th> Email </th>
                    <th> Phone </th>
                    <th> Position </th>
                </tr>
            </thead>
            <tbody>
            @foreach($reservations as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->movie_id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->phone }}</td>
                    <td>{{ $item->x_tier }} {{ $item->y_tier }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination-wrapper"> {!! $reservations->render() !!} </div>
    </div>

</div>
@endsection
