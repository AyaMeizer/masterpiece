@extends('admin.layout')
@section('content')
<div class="container-fluid">
                        <div class="card">
                            <div class="card-header">
                                <strong>Users</strong> Form
                            </div>
                            <div class="card-body card-block">
                            <form method="post" action="{{url('createUser/'
                                            )}}">
                                        @csrf 
                                    <div class="form-group">
                                        <label for="nf-email" class=" form-control-label">Username</label>
                                        <input type="text" id="nf-email" name="name"  placeholder="Enter username.." class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="nf-email" class=" form-control-label">Email</label>
                                        <input type="email" id="nf-email" name="email"  placeholder="Enter Email.." class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="nf-password" class=" form-control-label">Password</label>
                                        <input type="password" id="nf-password"  name="password" placeholder="Enter Password.." class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="nf-password" class=" form-control-label">Phone</label>
                                        <input type="number" id="nf-password" name="phone" placeholder="Enter Your Phone.." class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="nf-password" class=" form-control-label">Role</label>
                                        <select class="form-control"  name="isAdmin" required>
                                            <!-- <option selected>categories</option> -->
                                             <?php


                                            echo "<option  value=0> User</option> </br>
                                                <option  value=1> Admin</option> </br>";

                                            ?> 
                                        </select>

                                    </div>

                                    <div class="card-footer">

                                        <input type="submit" class="btn btn-info"  name="edit_submit" value="submit">
                                    </div>
                                </form>
                                @endsection




                            </div>

                        </div>
                     

                    </div>