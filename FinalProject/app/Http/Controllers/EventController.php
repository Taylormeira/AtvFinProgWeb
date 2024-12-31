<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Category;
/*Verificar por qual motido não consigo setar o nome da model como eventModel, ele não reconhece a table caso coloque esse nome*/ 

class EventController extends Controller
{
    public function index() {
        $events = Event::all();
        return view('events.index', compact('events'));
    }

    public function create(){
        $categories = Category::all();

        return view ('events.create');
    } 
    
    public function store(Request $request){
        $category = new Event();

        $category->name = $request->name;
        $category->description = $request->description;

        $category->save();

        return redirect('categories')->with( 'msg', 'Categoria criada com sucesso!' );
    }
}