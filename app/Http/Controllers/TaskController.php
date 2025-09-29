<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource. (VIEW ALL)
     */
    public function index()
    {
        $tasks = Task::all(); // Get all tasks from the database
        return view('tasks.index', compact('tasks')); // Pass them to the view
    }

    /**
     * Show the form for creating a new resource. (ADD FORM)
     */
    public function create()
    {
        return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage. (ADD SUBMISSION)
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'nullable',
        ]);

        // Create a new task in the database
        Task::create([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return redirect()->route('tasks.index')->with('success', 'Task created successfully!');
    }

    /**
     * Remove the specified resource from storage. (DELETE)
     */
    public function destroy(Task $task) // Laravel's route model binding
    {
        $task->delete(); // Delete the task

        return redirect()->route('tasks.index')->with('success', 'Task deleted successfully!');
    }
}