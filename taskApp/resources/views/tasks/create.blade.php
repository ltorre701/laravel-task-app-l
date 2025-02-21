@extends('layouts.app')

@section('content')
    <div class="max-w-2xl mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">Create New Task</h1>
        <form action="" method="POST">
            @csrf

            {{-- Task Name --}}
            <div class="mb-4">
                <label for="task_name" class="block mb-1">Task Name<span class="text-red-500">*</span>: </label>
                <input type="text" 
                id="task_name"
                pattern="^[a-zA-Z0-9\s\-_]{3,255}$"
                title="Task name must be 3-255 characters long and can contain letters, numbers, spaces, hyphens and underscores"
                class="w-full border rounded px-3 py-2"
                oninvalid="this.setCustomValidity('Please enter a valid task name')"
                oninput="this.setCustomValidity('')"
                placeholder="Required" required>
            </div>

            {{-- Task Location --}}
            <div class="mb-4">
                <label for="task_location">Location:</label>
                <input type="text" 
                placeholder="Optional"
                name="task_location" 
                id="task_location"
                pattern="^a-zA-Z0-9\s\-_,]{0,255}$"
                title="Location can contain letters, numbers, spaces, hyphens, underscores, and commas"
                class="w-full border rounded px-3 py-2">
            </div>

            {{-- Time Estimate (or Time Complexity) --}}
            <div class="mb-4">
                <label for="time_complexity">Time Complexity (Estimate): </label>
                <input type="text" placeholder="Optional" id="time_complexity">
            </div>

            {{-- Materials Required (Optional) --}}
            <div class="mb-4">
                <label for="materials_required">Materials Required</label>
            <input type="text" name="materials_required" id="materials_required">
            </div>

            {{-- Deadline (Optional) --}}
            <div class="mb-4">
                <label for="deadline">Deadline: </label>
                <input type="date" placeholder="Optional" id="deadline">
            </div>

            {{-- Priority (Optional) --}}
            <div class="mb-4">
                <label for="priority">Priority</label>
                <select name="priority" id="priority">
                    <option value="1">Low (1)</option>
                    <option value="2">Low (2)</option>
                    <option value="3">Low (3)</option>
                </select>
            </div>

            {{-- Category (Optional) --}}
            <!-- <div class="mb-4"> <div> -->

            {{-- Submit and Cancel Buttons --}}
            <div class="flex gap-4">
                <button type="submit" class="rounded bg-blue-500 text-white px-4 py-2">Create Task</button>
            </div>
        </form>
    </div>
@endsection