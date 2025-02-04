<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Participants;
use App\Models\Event;
use App\Models\User;

class ParcipantsController extends Controller
{
    public function index() {
        $participants = Participants::join('events', 'participants.event_id', '=', 'events.id')
        -> select('participants.*', 'events.name as event_name')
        -> get();
        return view('participants.index', compact('participants'));
    }
    public function create(){
        $events = Event::all();
        $users = User::all();

        return view ('participants.create', compact('events','users'));
    } 

    public function store(Request $request){
        $participant = new Participants();

        $participant->event_id = $request->event_id;
        $participant->user_id = $request->user_id;


        $participant->save();

        return redirect('participants')->with( 'msg', 'Evento relacionado com sucesso!' );
    }
}
