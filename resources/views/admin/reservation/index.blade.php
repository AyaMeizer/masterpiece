@extends('admin.layout')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <!-- DATA TABLE -->
            <h3 class="title-5 m-b-35">data table</h3>
            <div class="table-data__tool">
                <div class="table-data__tool-left">
                </div>
                <div class="table-data__tool-right">

                    <a href="{{url('accepted-reservations')}}"><button class="au-btn au-btn-icon au-btn--green au-btn--small">Accepted Reservations</button></a>

                </div>
            </div>
            <div class="table-responsive table-responsive-data2">
                <table class="table table-data2">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Reserved Name</th>
                            <th>User Name</th>
                            <th>Trip</th>
                            <th>Phone</th>
                            <th>Number of Passengers</th>
                            <th>Price</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($reservation as $item)
                        <tr class="border" style="vertical-align: middle;">
                            <td style="vertical-align: middle;">{{ $item->id }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->user->name }}</td>
                            <td>{{ $item->trip->name }}</td>
                            <td>{{ $item->phone }}</td>
                            <td>{{ $item->quantity }}</td>
                            <td>{{ $item->totalPrice }}</td>
                            <td>{{ $item->status }}</td>
                            <td>
                                <form style="display:inline" action="{{ url('accept-reser/'.$item->id.'/'.$item->trip_id) }}" method="POST">
                                    @method('PUT')
                                    @csrf
                                    <button class="btn btn-success" type="submit">Accept</button>
                                </form>
                                <form style="display:inline" action="{{  url('reject-reser/'.$item->id.'/'.$item->trip_id) }}" method="GET">
                                    @csrf
                                    <button class="btn btn-danger" type="submit">Delete</button>
                                </form>

                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- END DATA TABLE -->
        </div>
    </div>
</div>
@endsection