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
                <!-- <div class="table-data__tool-right">

                    <a href="{{url('accepted-reservations')}}"><button class="au-btn au-btn-icon au-btn--green au-btn--small">Accepted Reservations</button></a>

                </div> -->
            </div>
            <div class="table-responsive table-responsive-data2">
                <table class="table table-data2">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Subject</th>
                            <th>Message</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($inquiry as $item)
                        <tr class="border">
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->subject }}</td>
                            <td style="overflow-x:scroll;">{{ $item->message }}</td>
                            <td>{{ $item->created_at->diffForHumans() }}</td>
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