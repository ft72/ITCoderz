<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Contact;
use Hash;
use Session;

class LoginController extends Controller
{
    public function index(){        $user = Auth::user();
        
            return view('auth.login');
        
    }
    

    public function login(Request $request){
        $validator = $request->validate([
            'email'=> 'required',
            'password' => 'required'
        ]);
        
        $credentials = $request->only('email', 'password');



        if(Auth::attempt($credentials)){
            return view('user.index');
        }

        $validator['emailPass'] = 'Email or Password is incorrect';
        return redirect("/showLogin")->withErrors($validator);
    }

    public function showRegistration(){
        return view('auth.register');
    }

    public function register(Request $request){
        $request->validate([
            'email'=> 'required',
            'name'=>'required',
            'password' => 'required'
        ]);

        $contact = Contact::all();
        
        $data = $request->all();

        $check = $this->create($data);

        return view("user.index");
    }

    public function create(array $data){
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' =>  Hash::make($data['password']),
        ]);
    }

    public function home(){
        if(Auth::check()){
            return view('user.index');
        }

        return redirect("login");
    }

    public function signout(){
        Session::flush();
        Auth::logout();

        return redirect("/");
    }

}
