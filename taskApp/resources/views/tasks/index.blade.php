@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-semibold">All Tasks</h1>

    <form action="{{ route('tasks.index') }}" method="GET" class="mb-4">
        <input type="text" name="search" value="{{ request('search') }}" placeholder="Search Tasks" class="border border-gray-300 px-2 py-1 rounded">

        <select name="sort" class="border border-gray-300 px-2 py-1 rounded">
            <option value="task_name" {{ request('sort') === 'task_name' ? 'selected' : '' }}>
                Alphabetical
            </option>
            <option value="deadline" {{ request('sort') === 'deadline' ? 'selected' : '' }}>
                Deadline
            </option>
            <option value="category" {{ request('sort') === 'category' ? 'selected' : '' }}>
                Category
            </option>
        </select>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 ml-2 rounded hover:bg-blue-600">Search & Sort</button>
    </form>

    <ul>
        @forelse($tasks as $task)
            <li class="mb-2">
                {{ $task->task_name }}
            </li>

            <a href="{{ route('tasks.show', $task->id) }}" class="text-blue-500 underline ml-2">View</a>
        @empty
            <li>No Tasks Yet</li>
        @endforelse
    </ul>

    <div class="mt-4">
        <a href="{{ route('tasks.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Create New Task</a>
    </div>
@endsection