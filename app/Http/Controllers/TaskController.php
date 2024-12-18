<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    // Ambil semua task
    public function index()
    {
        return Task::all();
    }

    // Tambah task baru
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
        ]);
        $task = Task::create(['title' => $validated['title']]);
        return response()->json($task, 201);
    }

    // Perbarui status task
    public function update(Request $request, Task $task)
    {
        $task->update($request->all());
        return response()->json($task, 200);
    }

    // Hapus task
    public function destroy(Task $task)
    {
        $task->delete();
        return response()->json(null, 204);
    }
}
