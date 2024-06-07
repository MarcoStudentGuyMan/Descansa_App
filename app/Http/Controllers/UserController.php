<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|regex:/^([^0-9]*)$/',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|confirmed',
        ]);
    
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
    
        try {
            $user->save();
            return redirect("/login")->with('success', 'You have successfully registered.');
        } catch (\Exception $e) {
            return back()->with('error', 'There was an error: ' . $e->getMessage());
        }
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        $user = User::where('email', '=', $request->email)->first();
        if($user){
            if(Hash::check($request->password, $user->password)){
                $request->session()->put('loginID', $user->id);
                return redirect('/');

            }else
            {
                return back()->with('fail', 'Invalid Credentials');
            }

        }else{
            return back()->with('fail', 'Invalid Credentials');
        }
    }
 
    public function home(Request $request){
        $data = array();

        if(Session::has('loginID')){
          $data = User::where('id', '=', Session::get('loginID'))->first();  
        }
        return view ('home', compact('data'));

    }

    public function logout(){
        if(Session::has('loginID')){
            Session::pull('loginID');
           return redirect('/login');
        }
    }
}
