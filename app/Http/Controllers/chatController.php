<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Support\Facades\DB;
use App\Chat;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class chatController extends Controller
{
    public function chat(){
        $users = DB::table('users')->select('id','name','email')->get();
        // $users_message = DB::table('chat')->select('id','message','created_at')->get();
        $from = Session::get('user')['id'];
        // dd($from);
        $users_message = DB::table('chat')->select('id','message','created_at')->where('from', $from)->get();
        return view('chatbox', compact('users','users_message'));
        // return view('chatbox')->with('users', $users);
    }
    
    public function save_chat(Request $req){
        $chat = new Chat;
        $chat->from = $req->session()->get('user')['id'];
        $chat->message = $req->message;
        $chat->from_to= $req->from_to;
        $chat->save();
    }

    public function open_chat_messages(Request $request){
        $toUserId = $request->get('toUserId','default_value');
        $users_message = DB::table('chat')->select('id','message','created_at')->where('from_to',$toUserId)->get();
        return response()->json($users_message->toArray());
        // json_encode()
    }
}