@extends('admin.layout')
@section('content')
<div class="container-fluid">
                        <div class="card">
                            <div class="card-header">
                                <strong>Trips</strong> Form
                            </div>
                            <div class="card-body card-block">
                            <form method="post" action="{{url('insert-trip'
                                            )}}">
                                        @csrf 
                                    <div class="form-group">
                                        <label for="nf-email" class=" form-control-label">Name</label>
                                        <input type="text" id="nf-email" name="name"  placeholder="Enter trip name.." class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="nf-email" class=" form-control-label">Image</label>
                                        <input type="text" id="nf-email" name="image"  placeholder="Enter image URL.." class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control"  name="cat_id" required>Country
                                        @foreach($country as $country)
                                        <option type="text" id="nf-password" value="{{$country->id}}" name="cat_id" placeholder="Enter country.." class="form-control" required>{{$country->name}}</option>
                                         @endforeach
                                         </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="nf-password" class=" form-control-label">Brief</label>
                                        <input type="text" id="nf-password" name="brief" placeholder="Enter brief.." class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="nf-password" class=" form-control-label">Description</label>
                                        <input type="text" id="nf-password" name="description" placeholder="Enter description.." class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="nf-password" class=" form-control-label">Price</label>
                                        <input type="number" id="nf-password" name="price" placeholder="Enter price.." class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="nf-password" class=" form-control-label">Date</label>
                                        <input type="date" id="nf-password" name="date" placeholder="Enter date.." class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="nf-password" class=" form-control-label">Days</label>
                                        <input type="number" id="nf-password" name="days" placeholder="Enter days.." class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="nf-password" class=" form-control-label">Capacity</label>
                                        <input type="text" id="nf-password" name="capacity" placeholder="Enter capacity.." class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="nf-password" class=" form-control-label">Trending
                                        <input type="checkbox"  name="trending" placeholder="Enter capacity.."  required>
                                        </label></div>

                                    <div class="form-group">
                                        <label for="nf-password" class=" form-control-label">Meta Title</label>
                                        <input type="text" id="nf-password" name="meta_title" placeholder="Enter capacity.." class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="nf-password" class=" form-control-label">Meta Keywords</label>
                                        <input type="text" id="nf-password" name="meta_keywords" placeholder="Enter capacity.." class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="nf-password" class=" form-control-label">Meta Description</label>
                                        <input type="text" id="nf-password" name="meta_description" placeholder="Enter capacity.." class="form-control" required>
                                    </div>
                                   

                                    <div class="card-footer">

                                        <input type="submit" class="btn btn-info"  name="edit_submit" value="submit">
                                    </div>
                                </form>
                                @endsection




                            </div>

                        </div>
                     

                    </div>