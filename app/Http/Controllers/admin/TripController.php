<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Trip;
use Illuminate\Support\Facades\Storage;
use App\Models\Country;
use App\Models\Reservation;

class TripController extends Controller
{
    public function apiIndex (){
        $trip = Trip::all();
        $countries = Country::all();
        return response()->json([
           "success" =>"yes",
           "trips"=>$trip , 
           "countries"=>$countries 
        ]);
    }
    public function index (){
        $trip = Trip::all();
        $country = Country::all();
        return view('admin.trips.index', compact('trip','country'));
    }
    public function showAllProducts (){
        $trip = Trip::all();
        $country = Country::all();
        return view('destinations', compact('trip','country'));
    }
    public function showFilteredProducts ($id){
        $trip = Trip::where('cat_id','=',$id)->get();
        $country = Country::all();
        return view('destinations', compact('trip','country'));
    }
    public function showHighestProducts (){
        $trip = Trip::orderBy('price', 'desc')->get();
        $country = Country::all();
        return view('destinations', compact('trip','country'));
    }
    public function showLowestProducts (){
        $trip = Trip::orderBy('price', 'asc')->get();
        $country = Country::all();
        return view('destinations', compact('trip','country'));
    }

    public function showAllProductsWelcome (){
        $trip = Trip::orderBy('id', 'desc')->take(3)->get();
        $country = Country::all();
        return view('welcome', compact('trip','country'));
    }

    public function show($id)
    {
        //
        $oneTrip = Trip::find($id);
        // dd($oneTrip);
        return view('detailed', compact('oneTrip'));
    }


    public function add (){
        $country = Country::all();
        $trip = Trip::all();
        return view('admin.trips.create' ,compact('trip','country'));
    }

    public function insert (Request $request ){
        $trip = new Trip();
        
        $trip->cat_id = $request->input('cat_id');
        $trip->name = $request->input('name');
        $trip->image = $request->input('image');
        $trip->brief = $request->input('brief');
        $trip->price = $request->input('price');
        $trip->description = $request->input('description');
        $trip->date = $request->input('date');
        $trip->days = $request->input('days');
        $trip->capacity = $request->input('capacity');
        $trip->trending = $request->input('trending') == True?'1':'0';
        $trip->meta_title = $request->input('meta_title');
        $trip->meta_keywords = $request->input('meta_keywords');
        $trip->meta_description = $request->input('meta_description');
        $trip->save();
        return redirect('/trips')->with('status' , "Trip Added Successfully!!!");
    }

    public function edit($id){
        $trip = Trip::find($id);
        $country = Country::all();
        return view('admin.trips.edit', compact('trip','country'));
    }

    public function update(Request $request ,$id){
        $trip = Trip::findOrFail($id);
        $trip->cat_id = $request->input('cat_id');
        $trip->name = $request->input('name');
        $trip->image = $request->input('image');
        $trip->brief = $request->input('brief');
        $trip->price = $request->input('price');
        $trip->description = $request->input('description');
        $trip->date = $request->input('date');
        $trip->days = $request->input('days');
        $trip->capacity = $request->input('capacity');
        // $trip->trending = $request->input('trending') == True?'1':'0';
        // $trip->meta_title = $request->input('meta_title');
        // $trip->meta_keywords = $request->input('meta_keywords');
        // $trip->meta_description = $request->input('meta_description');
        $trip->update();
        return redirect('/trips')->with('success', 'Trip Updated!');
    }

    public function destroy($id){
        $trip = Trip::find($id);
        if($trip->image)
        {
            $path = 'assets/uploads/trip'.$trip->image;
            if(file_exists($path))
            {
                Storage::disk('local')->delete($path);
            }
        }
        Reservation::where('trip_id','=',$id)->delete();
        $trip->delete();
        return redirect('/trips')->with('success', 'Deleted Successfully!');
    }
}
