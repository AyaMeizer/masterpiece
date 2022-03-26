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

                                        <a href="{{url('users/create/')}}"><button class="au-btn au-btn-icon au-btn--green au-btn--small"> <i class="zmdi zmdi-plus"></i>Add Users</button></a>

                                    </div>
                                </div>
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead>
                                            <tr></tr>
                                            <th>Username</th>
                                            <th>Email</th>
                                            <th>phone</th>
                                            <th>Role</th>

                                            <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           

                                            @foreach($users as $user)
                                                <tr class="table-row">
                                                <tr class="spacer"></tr>
                                                <td>{{$user->name}}</td>
                                                <td>{{$user->email}}</td>
                                                <td>{{$user->phone}}</td>
                                                <td>{{$user->isAdmin!==0?'Admin':'User'}}</td>

                                                <td>
                                                   
                                                    <div class="table-data-feature">
                                                        <a href="{{url('deleteUser/'.$user->id)}}">

                                                            <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                                <i class="zmdi zmdi-delete"></i>
                                                            </button>
                                                        </a>
                                                        <a href="{{url('users/edit/'.$user->id)}}"> <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
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
