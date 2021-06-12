<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Task;

class TaskController extends Controller
{
    public function index() {
        
        $tasks = Task::all();

        

        return view('tasks.index', compact('tasks'));


    }


    public function store(Request $request) {

        //return view('tasks.index');

        //validation

        $request->validate([
            'title'=>'required'
        ]);

        Task::create([
            'title'=> $request->title
        ]);

        session()->flash('msg', 'Task has been created');
        
        return redirect('/');


    }

    public function update(Request $request, $id) {

        $tasks = Task::find($id);


        
      // 'title'= $request->title
        

        
        
        //return redirect('/');


    }
     


    public function edit($id) {

        $tasks = Task::find($id);

        return view('tasks.edit', compact('tasks'));

        

    }

    public  function destroy($id) {
         
        Task::destroy($id);

        return redirect()->back()->with('msg', 'Task has been deleted');
    }


}
