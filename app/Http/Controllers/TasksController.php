<?php

namespace App\Http\Controllers;
Use App\Task;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($ord = 'asc')
    {
    	if($ord == 'asc'){
    		$tasks = \DB::table('tasks')->where('user_id', '=', Auth::id())->orderBy('created_at', 'asc')->get();
    	}elseif ($ord == 'desc') {
    		$tasks = \DB::table('tasks')->where('user_id', '=', Auth::id())->orderBy('created_at', 'desc')->get();
    	}
        
        return view('tasks', compact('tasks'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $this->validate(request(), [
            'title' => 'required',
            'body'  => 'required'
       ]);
       $task = new Task;
       $task->title = request('title');
       $task->body = request('body');
       $task->user_id = Auth::id();
       $task->completed = 0;
       $task->save();
       return redirect('/tasks');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $task = Task::find($id);
        return view('task', compact('task'));
        //return($task);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $task = Task::find($id);
        return view('edit', compact('task'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate(request(), [
            'title' => 'required',
            'body'  => 'required'
       ]);

        $task = Task::find($id);
        $task->body = request('body');
        
        $task->title = request('title') ;
       $task->completed = request('completed');
       $task->save();
       return redirect('/tasks');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $task = Task::find($id);
       $task->delete();

       // redirect
       return redirect('/tasks');
    }
}
