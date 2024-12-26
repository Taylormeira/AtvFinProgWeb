<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EventModel;

class EventController extends Controller
{
    public function index() {
        $events = EventModel::all();
        return view('events.index', compact('events'));
       }

       public function update( Request $request){
        $update = $request;
       }
}
