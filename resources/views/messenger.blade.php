@extends('layouts.messengerLayout')

@section('content')

<!--Main layout-->
<main>
  <div style="padding-top:40px;" class="test">
    <!-- Section: Products v.4 -->
    <div class="messaging">
      <div class="inbox_msg">
        <div class="inbox_people">
          <div class="headind_srch">
            <div class="recent_heading">
              <h4>Recent</h4>
            </div>

          </div>
          <div class="inbox_chat">

            @foreach($conversations as $key => $conversation)
            <a href="{{route('messages.index',['convo'=>$conversation->id])}}">
            <div class="chat_list @if($key == 0) active_chat @endif">
              <div class="chat_people">
                <div class="chat_img"> <img src="https://cdn.pixabay.com/photo/2016/08/08/09/17/avatar-1577909_960_720.png" alt="sunil"> </div>
                <div class="chat_ib">
                  @if($conversation->messages->isNotEmpty())
                  <h5>{{$conversation->user_one === $user->id ? $conversation->receiver->name : $conversation->sender->name  }} <span class="chat_date">{{Carbon\Carbon::parse($conversation->messages[0]->created_at)->format("F d")}}</span></h5>
                  <p>{{$conversation->messages[0]->message}}</p>
                  @else
                  <h5>{{$conversation->user_one === $user->id ? $conversation->receiver->name : $conversation->sender->name  }} </h5>
                  @endif
                </div>
              </div>
            </div>
            </a>
            @endforeach

          </div>
        </div>
        <div class="mesgs">
          <div class="msg_history">
            @if($messages->isNotEmpty())
            @foreach($messages as $key=>$message)
            @if($message->user_id != $user->id)
            <div class="incoming_msg">
              <div class="incoming_msg_img"> <img src="https://cdn.pixabay.com/photo/2016/08/08/09/17/avatar-1577909_960_720.png" alt="sunil"> </div>
              <div class="received_msg">
                <div class="received_withd_msg">
                  <p>{{$message->message}}</p>
                  <span class="time_date"> {{Carbon\Carbon::parse($message->created_at)->format("F d")}}  | {{Carbon\Carbon::parse($message->created_at)->diffForHumans()}}</span>
                </div>
              </div>
            </div>
            @else
            <div class="outgoing_msg">
              <div class="sent_msg">
                <p>{{$message->message}}</p>
                <span class="time_date"> {{Carbon\Carbon::parse($message->created_at)->format("F d")}}  | {{Carbon\Carbon::parse($message->created_at)->diffForHumans()}}</span>
              </div>
            </div>
            @endif
            @endforeach
            @endif
        </div>
        <div class="type_msg">
          <div class="input_msg_write">
            <form class="text-center" style="color: #757575;" method="POST" action="{{ route('messages.store') }}">
              @csrf
              <input type="hidden" name="convo_id" value="{{$conversations->first()->id}}"/>

              <input type="text" class="write_msg" name="message" placeholder="Type a message" />
              <button class="msg_send_btn" type="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</main>
<!--Main layout-->
@endsection
