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

                                        <a href="{{url('add-country')}}"><button class="au-btn au-btn-icon au-btn--green au-btn--small"> <i class="zmdi zmdi-plus"></i>Add Country</button></a>

                                    </div>
                                </div>
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead style="text-align: center;">
                                            <tr></tr>
                                            <th>Country</th>
                                            <th>Image</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           

                                            @foreach($country as $country)
                                                <tr class="table-row" >
                                                <tr class="spacer"></tr>
                                                <td style="text-align: center; vertical-align: middle;">{{$country->name}}</td>
                                                <td style="width: 20%; height: 30%;"><img src="{{$country->image}}" alt="country image"/></td>
                                               

                                                <td>
                                                <div class="table-data-feature" style="justify-content: center;">

                                                        <a href="{{url('edit-country/'.$country->id)}}"> <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                                <i class="zmdi zmdi-edit"></i>
                                                            </button></a>
                                                        </div> 
                                                    </td>


                                                <td>
                                                <div class="table-data-feature" style="justify-content: center;">
                                                        <a href="{{url('delete-country/'.$country->id)}}">

                                                            <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                                <i class="zmdi zmdi-delete"></i>
                                                            </button>
                                                            
                                                        </a>
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
