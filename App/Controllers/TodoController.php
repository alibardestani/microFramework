<?php

namespace App\Controllers;

class TodoController{
    public function list(){
        # db
        $task = [
            'First Task',
            'Second Task',
            'Third Task',
            'Test Task',
            'another Task'
        ];
        $data = ['tasks' => $task, 'title' => 'لیست تسک ها'];
        view('todo.list',$data);
    }
}