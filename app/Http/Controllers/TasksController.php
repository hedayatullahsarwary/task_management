<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Http\Requests\TaskRequest;
use Illuminate\Http\Request;

class TasksController extends Controller {
    protected $task;

    //---Constructor Function
    public function __construct(Task $task) {
        $this->task = $task;
    }//---End of Function Constructor

    //---Index Function
    public function Index() {
        $tasks = Task::orderBy('priority', 'asc')->get();
        return view('tasks.task_list', compact('tasks'));
    }//---End of Function Index

    //---Create Function
    public function Create() {
        return view('tasks.task_create');
    }//---End of Function Create

    //---Store Function
    public function Store(TaskRequest $request) {
        $task_add_array = array(
            'name'          =>  $request->name,
            'priority'      =>  $request->priority
        );
        $task = Task::create($task_add_array);
        return view('tasks.task_view', compact('task'));
    }//---End of Function Store

    //---View Function
    public function View($id) {
        $task = Task::findOrFail($id);
        return view('tasks.task_view', compact('task'));
    }//---End of Function View

    //---Edit Function
    public function Edit($id) {
        $task = Task::findOrFail($id);
        return view('tasks.task_edit', compact('task'));
    }//---End of Function Edit

    //---Update Function
    public function Update(TaskRequest $request, $id) {
        $task = Task::findOrFail($id);
        $task_edit_array = array(
            'name'          =>  $request->name,
            'priority'      =>  $request->priority
        );
        $task->update($task_edit_array);
        return view('tasks.task_view', compact('task'));
    }//---End of Function Update

    //---Delete Function
    public function Delete($id) {
        $task = Task::findOrFail($id);
        $task->delete();
        return back();
    }//---End of Function Delete

    //---Change Priority
    public function ChangePriority(Request $request) {
        $tasks = Task::all();

        foreach ($tasks as $task) {
            foreach ($request->priority as $priority) {
                if ($priority['id'] == $task->id) {
                    $task->update(['priority' => $priority['position']]);
                }
            }
        }

        return response('Update Successfully.', 200);
    }
}
