<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    private $form_rules = [
        'user' => 'required|max:75',
        'priority' => ['required','integer'],
        'description' => 'required|max:255',
        'deadline' => 'required|date'
    ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tasks.indexTasks', ['tareas' => Task::all()]);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tasks.formTask');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->all()
        // $request->input('name')
        // $request->name
        
        // Validamos la entrada de datos entrantes
        $validated = $request->validate($this->form_rules);

        // Hacemos la inserción del registro
        $task = new Task();

        $task->user = $request->user;
        $task->priority = $request->priority;
        $task->description = $request->description;
        $task->deadline = $request->deadline;

        $task->save();

        // Redireccionamos al indice
        return redirect('/tasks');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
        return view('tasks.showTask', compact('task'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $task)
    {
        return view('tasks.formTask', compact('task'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Task $task)
    {
        // Validamos la entrada de datos entrantes
        $validated = $request->validate($this->form_rules);

        // Actualizamos el registro existente
        $task->user = $request->user;
        $task->priority = $request->priority;
        $task->description = $request->description;
        $task->deadline = $request->deadline;

        $task->save();

        // Redireccionamos al objeto
        return redirect('/tasks/' . $task->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
