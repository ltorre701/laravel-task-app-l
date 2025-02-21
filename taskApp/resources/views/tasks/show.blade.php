@extends('layouts.app')

@section('content')
    <div class="max-w-2xl mx-auto p-4">
        <h1 class="text-2xl">
            <strong>Task Details:</strong>
        </h1>
        <div class="mb-4">
            <strong>Task Name:</strong> {{ $task->task_name }}
        </div>
        <div class="mb-4">
            <strong>Location:</strong> {{ $task->task_location }}
        </div>
        <div class="mb-4">
            <strong>Time Complexity:</strong> {{ $task->time_complexity }}
        </div>
        <div class="mb-4">
            <strong>Materials Required:</strong> {{ $task->materials_required }}
        </div>
        <div class="mb-4">
            <strong>Deadline: </strong> {{ $task->deadline }}
        </div>
        <div class="mb-4">
            <strong>Priority: </strong> {{ $task->priority }}
        </div>

        <div style="margin-top:20px" class="flex gap-4">
            <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-primary rounded bg-blue-500 text-white px-4 py-2 hover:bg-blue-700">Edit Task</a>
            <a href="{{ route('tasks.index') }}" class="btn btn-secondary rounded bg-gray-500 text-white px-4 py-2 hover:bg-gray-700">Back to List</a>
        </div>
    </div>
@endsection