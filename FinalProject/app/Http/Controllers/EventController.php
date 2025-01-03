<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Category;
/*Verificar por qual motido não consigo setar o nome da model como eventModel, ele não reconhece a table caso coloque esse nome*/ 

class EventController extends Controller
{
    public function index() {
        $events = Event::join('categories', 'events.category_id', '=', 'categories.id') 
        -> select('events.*', 'categories.name as category_name')
        -> get();
        
        return view('events.index', compact('events'));
    }

    public function create(){
        $categories = Category::all();

        return view ('events.create', compact('categories'));
    } 
    
    public function store(Request $request){
        $event = new Event();

        $event->name = $request->name;
        $event->description = $request->description;
        $event->location = $request->location;
        $event->date = $request->date;
        $event->category_id = $request->category_id;


        $event->save();

        return redirect('events')->with( 'msg', 'Evento criado com sucesso!' );
    }

    public function destroy($id){
        Event::findOrFail($id)->delete();
        
        return redirect('/events') -> with('msg', 'Evento deletado com sucesso');
    }
    public function edit($id){
        $categories = Category::all();

        $event = Event::findOrFail($id);
        return view('/events.edit', ['event'=> $event,'categories' => $categories]);
    }

    public function update( Request $request){
        Event::findOrFail($request->id )->update($request->all());
        
        return redirect('/events')->with('msg', 'Evento editado com sucesso');
    }
}