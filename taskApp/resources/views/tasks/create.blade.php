@extends('layouts.app')

@section('content')
    <div class="max-w-2xl mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">Create New Task</h1>
        <form action="" method="POST">
            @csrf

            {{-- Task Name --}}
            <div class="mb-4">
                <label for="task_name">Task Name<span class="text-red-500">*</span>: </label>
                <input type="text" placeholder="Required" required class="w-full border rounded px-3 py-2">
            </div>

            {{-- Task Location --}}
            <div class="mb-4">
                <label for="task_location">Location: </label>
                <input type="text" placeholder="Optional" id="task_location" class="w-full border rounded px-3 py-2">
            </div>

            {{-- Time Estimate (or Time Complexity) --}}
            <div class="mb-4">
                <label for="time_complexity">Time Complexity (Estimate): </label>
                <select name="time_complexity" id="time_complexity" class="w-full border rounded px-3 py-2" required>
                    <option value="1">~10 Minutes</option>
                    <option value="2">~30 Minutes</option>
                    <option value="3">~1 Hour</option>
                    <option value="4">~5 Hours</option>
                    <option value="5">Day+</option>
                </select>
            </div>

            {{-- Materials Required (Optional) --}}
            <div class="mb-4">
                <label for="materials_required">Materials Required</label>
            <input type="text" name="materials_required" id="materials_required" placeholder="Optional" class="w-full border rounded px-3 py-2">
            </div>

            {{-- Deadline (Optional) --}}
            <div class="mb-4">
                <label for="deadline">Deadline: </label>
                <input type="datetime-local" placeholder="Optional" id="deadline" class="w-full border rounded px-3 py-2">
            </div>

            {{-- Priority (Optional) --}}
            <div class="mb-4">
                <label for="priority">Priority</label>
                <select name="priority" id="priority" class="w-full border rounded px-3 py-2">
                    <option value="1">Low</option>
                    <option value="2">Medium</option>
                    <option value="3">High</option>
                </select>
            </div>

            {{-- Category (Optional) --}}
            <!-- <div class="mb-4"> <div> -->

            {{-- Submit and Cancel Buttons --}}
            <div class="flex gap-4">
                <button type="submit" class="rounded bg-blue-500 text-white px-4 py-2 hover:bg-blue-700">Create Task</button>
                <a href="{{ url('/') }}" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-gray-600">Cancel</a>
            </div>
        </form>
    </div>
@endsection