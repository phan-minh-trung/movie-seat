@extends('layouts.app')

@section('content')
<div class="container">

    <h1>Seat Reservations </h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th>
                    <th> Movie name </th>
                    <th> Customer name</th>
                    <th> Email </th>
                    <th> Phone </th>
                    <th> Position </th>
                    <th style="text-align:center"> Status </th>
                    <th style="text-align:center"> Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($reservations as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td> IP Man 3 </td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->phone }}</td>
                    <td>{{ $item->x_tier }} {{ $item->y_tier }}</td>
                    <td style="text-align:center">
                        @if ($item->id % rand(1,5))
                            <span class="label label-default">Unverify</span>
                        @else
                            <span class="label label-success">Verify</span>
                        @endif
                    </td>
                    <td style="text-align:center">
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['/seat_reservation/delete', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete Seat" />', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete Seat',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            )) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination-wrapper"> {!! $reservations->render() !!} </div>
    </div>

</div>
@endsection
