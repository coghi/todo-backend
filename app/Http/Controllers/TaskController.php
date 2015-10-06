<?php

namespace App\Http\Controllers;

use App\Task;
use App\Http\Controllers\Controller;

class TaskController extends Controller
{
    public function index()
    {
        return Task::all();
    }
    
    public function add($content)
    {
        $task = new Task;
        
        $task->content = $content;
        
        $task->save();
        
        
        $return = [];
        $return['status'] = 'Success!';
        
        return $return;
    }
    
    public function update($id,$new_content)
    {
        $task = Task::find($id);
        
        if (!count( $task ))
        {
            $return = [];
            $return['status'] = 'Task not found';
            
            return $return;
        }
        
        $task->content = $new_content;
        
        $task->save();
        
        $return = [];
        $return['status'] = 'Success!';
        
        return $return;
    }
    
    public function delete($id)
    {
        $task = Task::find($id);
        
        if (!count( $task ))
        {
            $return = [];
            $return['status'] = 'Task not found';
            
            return $return;
        }
        
        $task->delete();
        
        $return = [];
        $return['status'] = 'Successully deleted!';
        
        return $return;
    }
}