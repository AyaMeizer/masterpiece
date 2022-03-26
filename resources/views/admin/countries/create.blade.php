@extends('admin.layout')
@section('content')
<div class="container-fluid">
                        <div class="card">
                            <div class="card-header">
                                <strong>Countries</strong> Form
                            </div>
                            <div class="card-body card-block">
                            <form method="post" action="{{url('insert-country/'
                                            )}}">
                                        @csrf 
                                    <div class="form-group">
                                        <label for="nf-email" class=" form-control-label">Country Name</label>
                                        <input type="text" id="nf-email" name="name"  placeholder="Enter Country Name" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="nf-email" class=" form-control-label">Image</label>
                                        <input type="text" id="nf-email" name="image"  placeholder="Enter image URL" class="form-control" required>
                                    </div>

                                    <div class="card-footer">

                                        <input type="submit" class="btn btn-info"  name="submit" value="submit">
                                    </div>
                                </form>
                                @endsection




                            </div>

                        </div>
                     

                    </div>