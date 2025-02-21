@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Edit Task</h1>
    <form action="{{ route('tasks.update', $task->id) }}" method="POST">
        @csrf
        @method('PUT') {{-- Important for updating (PUT/PATCH) --}}

        <div class="mb-4">
            <label for="task_name">Task Name:</label>
            <input type="text" class="w-full border rounded px-3 py-2" name="task_name" id="task_name" value="{{ old('task_name', $task->task_name) }}">
            @error('task_name')
                <div style="color: red;">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-4">
            <label for="task_location">Location:</label>
            <input type="text" class="w-full border rounded px-3 py-2" name="task_location" id="task_location" value="{{ old('task_location', $task->task_location) }}">
            @error('task_location')
                <div style="color: red;">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-4">
            <label for="meterials_required">Materials Required:</label>
            <input type="text" class="w-full border rounded px-3 py-2" name="materials_required" id="materials_required" value="{{ old('materials_required', $task->materials_required) }}">
            @error('materials_required')
                <div style="color: red;">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-4">
            <label for="deadline">Deadline:</label>
            <input type="text" class="w-full border rounded px-3 py-2" name="deadline" id="deadline" value="{{ old('deadline', $task->deadline) }}">
            @error('deadline')
                <div style="color: red;">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-4">
            <label for="priority">Priority:</label>
            <select name="priority" id="priority" class="w-full border rounded px-3 py-2">
                    <option value="1">Low</option>
                    <option value="2">Medium</option>
                    <option value="3">High</option>
                </select>
            @error('priority')
                <div style="color: red;">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="rounded bg-blue-500 text-white px-4 py-2 hover:bg-blue-700">Update Task</button>
    </form>

    <br>

    <form action="{{ route('tasks.destroy', $task->id) }}" method="DELETE">
        @csrf
        @method('DELETE')

        <button type="submit" class="rounded bg-red-500 text-white px-4 py-2 hover:bg-red-700" style="background-color: red; color: #fff;">Delete Task</button>
    </form>
</div>
@endsection