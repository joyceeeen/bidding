<?php

namespace App\Http\Controllers;

use App\Conversation;
use App\ConversationReply;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Vinkla\Hashids\Facades\Hashids;
class ConversationController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index(Request $request)
  {
    $user = auth()->user();

    $conversations = null;
    $messages = null;
    
    if($request->convo){
      $conversations = Conversation::where('user_one',$user->id)->orWhere('user_two',$user->id)->orderBy('updated_at','desc')->get();
      $messages = ConversationReply::where('conversation_id',$request->convo)->get();
    }else{
      $conversations = Conversation::where('user_one',$user->id)->orWhere('user_two',$user->id)->orderBy('updated_at','desc')->get();
      $messages = ConversationReply::where('conversation_id',$conversations[0]->id)->get();

    }

    return view('messenger',compact('conversations','user','messages'));

  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create(Request $request)
  {

    $receiver = Hashids::decode($request->receiver)[0];
    $sender = auth()->user()->id;

    $conversation = Conversation::where(function ($query) use($sender,$receiver){
      $query->where('user_one',$sender)->where('user_two',$receiver);
    })->orWhere(function ($query2) use($sender,$receiver){
      $query2->where('user_one',$receiver)->where('user_two',$sender);
    })->first();

    if(!$conversation){
      $createConvo = new Conversation();
      $createConvo->user_one = $sender;
      $createConvo->user_two = $receiver;
      $createConvo->save();
    }

    return redirect()->route('messages.index');

  }

  /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function store(Request $request)
  {
    $reply = new ConversationReply();
    $reply->user_id = auth()->user()->id;
    $reply->conversation_id = $request->convo_id;
    $reply->message = $request->message;
    $reply->save();

    $conversation = Conversation::find($request->convo_id);
    $conversation->updated_at = Carbon::now();
    $conversation->save();

    return redirect()->route('messages.index');

  }


  /**
  * Display the specified resource.
  *
  * @param  \App\Conversation  $conversation
  * @return \Illuminate\Http\Response
  */
  public function show(Conversation $conversation)
  {
    //
  }

  /**
  * Show the form for editing the specified resource.
  *
  * @param  \App\Conversation  $conversation
  * @return \Illuminate\Http\Response
  */
  public function edit(Conversation $conversation)
  {
    //
  }

  /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  \App\Conversation  $conversation
  * @return \Illuminate\Http\Response
  */
  public function update(Request $request, Conversation $conversation)
  {
    //
  }

  /**
  * Remove the specified resource from storage.
  *
  * @param  \App\Conversation  $conversation
  * @return \Illuminate\Http\Response
  */
  public function destroy(Conversation $conversation)
  {
    //
  }
}
