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
        return redirect('/chat_user');
    }
    }

    public function register(Request $req){
                $user = new User;
                $user->name = $req->name;    
                $user->email = $req->email;    
                $user->password = Hash::make($req->password);   
                $user->save();
                return redirect('/login'); 
        
        }
}