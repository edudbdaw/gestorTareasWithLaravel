<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $task1 = new Task();
        $task1->title = 'Tarea 1';
        $task1->description = 'Descripcion para la tarea 1';
        $task1->user_id = 1;
        $task1->save();

        $task2 = new Task();
        $task2->title = 'Tarea 2';
        $task2->description = 'Descripcion para la tarea 2';
        $task2->user_id = 1;
        $task2->save();
    }
}
