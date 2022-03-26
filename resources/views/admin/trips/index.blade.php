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

                    <a href="{{url('add-trip/')}}"><button class="au-btn au-btn-icon au-btn--green au-btn--small"> <i class="zmdi zmdi-plus"></i>Add Trip</button></a>

                </div>
            </div>
            <div class="table-responsive table-responsive-data2">
                <table class="table table-data2">
                    <thead>
                        <tr></tr>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Country ID</th>
                        <th>Brief</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Date</th>
                        <th>Days</th>
                        <th>Capacity</th>

                        <th></th>
                        </tr>
                    </thead>
                    <tbody>


                        @foreach($trip as $tripp)
                        <tr class="table-row">
                        <tr class="spacer"></tr>
                        <td>{{$tripp->name}}</td>
                        <td><img src="{{$tripp->image}}" /></td>
                        <td>
                        {{$tripp->cat_id}}
                        
                    </td>
                        <td>{{$tripp->brief}}</td>
                        <td>{{$tripp->description}}</td>
                        <td>{{$tripp->price}}</td>
                        <td>{{$tripp->date}}</td>
                        <td>{{$tripp->days}}</td>
                        <td>{{$tripp->capacity}}</td>

                        <!-- <td>{{$tripp->phone}}</td>
                                                <td>{{$tripp->isAdmin!==0?'Admin':'User'}}</td> -->

                        <td>

                            <div class="table-data-feature">
                                <a href="{{url('delete-trip/'.$tripp->id)}}">

                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                        <i class="zmdi zmdi-delete"></i>
                                    </button>
                                </a>
                                <a href="{{url('edit-trip/'.$tripp->id)}}"> <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                        <i class="zmdi zmdi-edit"></i>
                                    </button></a>
                            </div>

                        </td>
                        </tr>
                        <!-- <tr class="spacer"></tr> -->
                        @endforeach


                    </tbody>
                </table>
            </div>
            <!-- END DATA TABLE -->
        </div>
    </div>
</div>
@endsection