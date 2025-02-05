<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Participant;
use App\Models\Event;
use App\Models\User;

class ParcipantsController extends Controller
{
    public function index() {
        $participants = Participant::join('events', 'participants.event_id', '=', 'events.id')
        ->join('users', 'participants.user_id', '=', 'users.id')
        ->select('participants.*', 'events.name as event_name', 'users.name as user_name')
        ->get();
    
    return view('participants.index', compact('participants'));
    
    }
    public function create(){
        $events = Event::all();
        $users = User::all();

        return view ('participants.create', compact('events','users'));
    } 

    public function store(Request $request){
        $participant = new Participant();

        $participant->event_id = $request->event_id;
        $participant->user_id = $request->user_id;


        $participant->save();

        return redirect('participants')->with( 'msg', 'Evento relacionado com sucesso!' );
    }
}