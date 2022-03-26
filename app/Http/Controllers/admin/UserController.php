<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\Reservation;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    public function add()
    {
        $user = User::all();
        return view('admin.users.create', compact('user'));
    }

    public function insert(Request $request)
    {

        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');
        $user->password = $request->input('password');
        $user->isAdmin = $request->input('isAdmin') == True ? '1' : '0';
        $user->save();
        return redirect('/users')->with('success', 'User Added Successfully!');
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $users = User::findOrFail($id);

        $users->name = $request->input('name');
        $users->email = $request->input('email');
        $users->phone = $request->input('phone');
        $users->password = $request->input('password');
        $users->isAdmin = $request->input('isAdmin') == True ? '1' : '0';
        $users->update();
        return redirect('/users')->with('success', 'User Updated!');
    }





    public function userProfile()
    {
        $reservation = Reservation::where('user_id','=',Auth::user()->id)->get();

        $userD =  Auth::user();
        return view('profile', compact('userD','reservation'));
    }

    public function updateProfileUser(Request $request, $id)
    {
        $userD = User::find($id);

        $userD->name = $request->input('name');
        $userD->email = $request->input('email');
        $userD->phone = $request->input('phone');
        $userD->isAdmin = $request->input('isAdmin') == True ? '1' : '0';

        $userD->updateOrFail();
        return redirect('users');
    }
    public function destroy($id){
        $users = User::find($id);
        $users->delete();
        return redirect('/users')->with('success', 'Deleted Successfully!');
    }
    public function register(Request $request)
    {

        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');

        $user->password = Hash::make($request->input('password'));
        $user->save();
        return response(['status' => 'created', 'user' => $user, 200]);
    }

    public function login(Request $req)
    {
        $email =  $req->input('email');
        $password = $req->input('password');

        $user = DB::table('users')->where('email', $email)->first();
        if (!Hash::check($password, $user->password)) {
            return response(["Not Matched"]);
        } else {
            return response(['status' => 'created', 'user' => $user, 200]);
        }
    }
}
