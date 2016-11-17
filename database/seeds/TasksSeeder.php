<?php

use Illuminate\Database\Seeder;

class TasksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tasks')->insert([
            'task' => 'Code'
        ]);
        
        DB::table('tasks')->insert([
            'task' => 'Sleep'
        ]);
    }
}
