<?php

namespace App\Http\Controllers;
use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{


    public function index(){

        return response()->json(Todo::all());

     
    }
       
    public function store(Request $request)
    {
        $request->validate(['Titulo' => 'required|string']);
        $todo = Todo::create(['Titulo' => $request->Titulo, 'completed' => false]);
        return response()->json($todo, 201);
    }
    
    public function update(Request $request, $id)
    {
        $todo = Todo::findOrFail($id);
        
        $request->validate(['Titulo' => 'required|string']);
        $todo->update(['Titulo' => $request->Titulo, 'completed' => $request->completed]);
    
        return response()->json($todo);
    }

    public function destroy($id){

        $todo= Todo::findOrfail($id);
        $todo->delete();

        return response()->json(null,204);
    }

    public function show($id){
       $todo=Todo::findOrFail($id);
        return response()->json($todo);
    }
}
