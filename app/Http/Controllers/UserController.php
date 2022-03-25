<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{
    public function create(){
        return view('components.login');
    }

    function login(Request $req)
    {
        $user= User::where(['email'=>$req->email])->first();
        if(! $user || ! Hash::check($req->password,$user->password)) {
            return "Username or password is not matched";
        }
        else{
            $req->session()->put('user',$user);
            return redirect('/');
        }
    }
    function logout(){
        Session::forget('user');
        return redirect('login');
    }


}
