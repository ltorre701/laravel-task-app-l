<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Task;
class TaskSeeder extends Seeder
{
/**
* Run the database seeds.
*/
public function run(): void
{
    Task::create([
        'task_name' => 'Take out trash',
        'task_location' => 'Kitchen',
        'time_complexity' => 1, // (1 => ~10 min, 2 => ~30 min, etc.)
        'materials_required'=> 'Trash bags',
        'deadline' => '2025-02-20 10:00:00',
        'priority' => 2, // (1 => low, 2 => medium, 3 => high)
        'category' => 'chores'
    ]);
    Task::create([
        'task_name' => 'Wash dishes',
        'task_location' => 'Home',
        'time_complexity' => 1,
        'materials_required' => 'Soap, sponge',
        'deadline' => '2025-02-21 11:00:00',
        'priority' => 2,
        'category' => 'chores'
    ]);
    Task::create([
        'task_name' => 'Vacuum',
        'task_location' => 'Living Room',
        'time_complexity' => 2,
        'materials_required' => 'Vacuum cleaner',
        'deadline' => '2025-02-21 8:00:00',
        'priority' => 1,
        'category' => 'chores'
    ]);
    Task::create([
        'task_name' => 'Grocery shopping',
        'task_location' => 'store',
        'time_complexity' => 3,
        'materials_required' => 'Wallet, shopping list',
        'deadline' => '2025-02-22 15:00:00',
        'priority' => 3,
        'category' => 'shopping'
    ]);
    Task::create([
        'task_name' => 'Cook',
        'task_location' => 'Kitchen',
        'time_complexity' => 3,
        'materials_required' => 'Pasta, tomato sauce, meatballs, parmesan cheese',
        'deadline' => '2025-02-21 18:00:00',
        'priority' => 2,
        'category' => 'health'
    ]);
    Task::create([
        'task_name' => 'Sleep',
        'task_location' => 'Home',
        'time_complexity' => 1,
        'materials_required' => 'Bed',
        'deadline' => '2025-02-21 20:00:00',
        'priority' => 3,
        'category' => 'health'
    ]);
}
}
