<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Support\Facades\DB;
use App\Chat;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ChatController extends Controller
{
    public function chat(){
        $session_id = Session::get('user')['id'];
        $users = DB::table('users')->select('id','name','email')
        ->where('id','!=',$session_id)->get();
    //    dd($users);
       $userListArr = array();
       foreach ($users as $key => $value) {
        // dd($value);
            $toUserId = $value->id;
            $users_message = DB::table('chat')->select('*')
            // ->where('from_to', $toUserId)
            // ->orWhere('from', $from)
            ->where(function ($query) use ($session_id, $toUserId) {
                $query->where('from_to', $toUserId)
                      ->where('from', $session_id);
            })
            ->orWhere(function ($query) use ($session_id, $toUserId) {
                $query->where('from_to', $session_id)
                      ->where('from', $toUserId);
            })
            ->orderBy('id', 'desc')->first();
            $value->messageObj = $users_message;
            array_push($userListArr, $value);
       }  
        // dd($userListArr);
        return view('chatbox', compact('users'));
           // $users_message = DB::table('chat')->select('id','message','created_at')->get();
        
    }
    
    public function save_chat(Request $req){
        $chat = new Chat;
        $chat->from = $req->session()->get('user')['id'];
        $chat->message = $req->message;
        $chat->from_to= $req->from_to;
        $chat->image = "";
        // dd($req->file('file'));
        if($req->has('file') ) {
            $file_local =  $req->file('file');
            $extension = $req->file('file')->getClientOriginalExtension();
            if($extension == 'jpg' || $extension == 'png' || $extension == 'jpeg'){
              $name=$req->file('file')->getClientOriginalName();
            //   $path = $file_local->storeAS('./public/images',$name);
              $path = public_path().'/images';
              $uplaod = $file_local->move($path,$name);
            //   dd($path);
                $chat->image = $name;
          }   
      }
        $chat->save();
    }

    public function open_chat_messages(Request $request){
        $toUserId = $request->get('toUserId');
        $from = Session::get('user')['id'];
        // dd($from);
        // $users_message = DB::table('chat')->select('id','message','created_at')->where('from_to',$toUserId)->where('from',$from)->get();
        // $users_message_lock = DB::table('chat')->select('id','message','created_at')->where('from_to',$toUserId) || where('from_to',$from)&& ->where('from',$toUserId) ->get();
        $users_message = DB::table('chat')->select('*')
          
            ->where(function ($query) use ($from, $toUserId) {
                $query->where('from_to', $toUserId)
                      ->where('from', $from);
            })
            ->orWhere(function ($query) use ($from, $toUserId) {
                $query->where('from_to', $from)
                      ->where('from', $toUserId);
            })
            ->get();
        return response()->json($users_message->toArray());
      
    }
    public function latest_chat_user(Request $request){
        $toUserId = $request->get('toUserId','default_value');
        $users_message = DB::table('chat')->where('from_to',$toUserId)->first();
        return response()->json($users_message->toArray());
    }

    public function chat_user_name(Request $request){
        $toUserId = $request->get('toUserId','default_value');
        $chat_user_name =  DB::table('users')
        ->select('users.id','users.name')
        ->join('chat','chat.from_to','=','users.id')
        ->where('from_to',$toUserId)
        ->first();
        // dd($chat_user_name);
        return response()->json($chat_user_name);
    }

    public function search(Request $req)
    {
       $data = DB::table('users')->where('name','like','%'.$req->input('query').'%')->get() ;
       return response()->json($data);
    //    return view('search',['product'=>$data]);
    }
}