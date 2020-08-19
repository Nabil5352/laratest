<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

/**
 * TaskController
 * Create, Edit, Update, Delete all tasks
 */
class TaskController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $tasks = Task::orderBy('created_at', 'asc')->get();

        return view(
            'tasks', [
            'tasks' => $tasks
            ]
        );
    }

    /**
     * Show the application dashboard.
     *
     * $param $request Illuminate\Http\Request
     * 
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function new(Request $request)
    {
        $request->validate(
            [
                'name' => 'required|max:255'
            ]
        );

        $task = new Task;
        $task->name = $request->name;
        $task->save();

        return redirect('/');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function edit($id)
    {
        $task = Task::find($id)->first();
        dd($task);
        return view('tasks');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function update($id)
    {
        dd($request->all());
        Task::find($id)->first();
        return view('tasks');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function delete($id)
    {
        Task::findOrFail($id)->delete();

        return redirect('/');
    }
}
