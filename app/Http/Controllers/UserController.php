<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    function user_login(Request $req){
      $user= User::where(['email' => $req->email])->first();
      if (!$user || !Hash::check($req->password, $user->password)) {
        return redirect('/login');
    } else {
            $req->session()->put('user', $user);
        return redirect('/chat');
    }
    }
}