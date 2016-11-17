<?php

use App\Repositories\TaskRepository;

class TaskRepositoryTest extends TestCase
{
    /**
     * A basic functional test example.
     */
    public function testGetAllTasks()
    {
        $repository = new TaskRepository();
        $tasks = $repository->all();
        
        $this->assertEquals(2, count($tasks));
        $this->assertEquals('Code', $tasks[0]->task);
        $this->assertEquals('Sleep', $tasks[1]->task);
    }
    
    /**
     * Create a new task.
     */
    public function testCreateTask()
    {
        $repository = new TaskRepository();
    
        $data = [
            'name' => 'Learn Laravel',
        ];
        $task = $repository->create($data);
        
        $this->assertEquals(3, count($repository->all()));
        $this->assertEquals(3, $task->id);
    }
    
    /**
     * Test delete task.
     */
    public function testDeleteTask()
    {
        $repository = new TaskRepository();
        $repository->destroy(1);
        
        $this->assertEquals(1, count($repository->all()));
    }
    
}
