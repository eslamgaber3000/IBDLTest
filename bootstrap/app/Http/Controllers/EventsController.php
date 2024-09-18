<?php

// namespace App\Http\Controllers;

// use App\Models\Event;
// use App\Http\Controllers\Controller;

// class EventsController extends Controller
// {

//     public function get_all(){
//         $all_events=Event::orderBy('id', 'desc')->paginate(6);
//         return view ('event.events', compact('all_events'));
//     }

//     public function event_details(Event $slug){

//         $single_event=Event::where('id', $slug->id)->first();
//         $next_id = ($single_event->id) + 1 ;
//         $previous_id = ($single_event->id) - 1 ;
//         if(isset($next_id)){
//             $event_next = Event::where('id',$next_id)->first();
//         };
//         if(isset($next_id)){
//             $event_previous = Event::where('id',$previous_id)->first();
//         };
//         $h_event=Event::orderBy('id','desc')->paginate(5);

//         return view('event.event-details',compact('single_event','h_event','event_next','event_previous'));
//     }



// }
