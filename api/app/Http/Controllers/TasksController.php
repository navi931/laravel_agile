<?php

namespace App\Http\Controllers;
use \App\Task;

use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function index()
    {
      $tasks = Task::all();
      return response()->json([
          'data' =>
          [
            'tasks' => $tasks
          ]
      ]);
    }
    public function insert(Request $request)
    {
      $user_id = $request['user_id'];
      $title = $request['title'];
      $description = $request['description'];
      $status = $request['status'];

      $data = ['user_id'=>$user_id,'title'=>$title,'description'=>$description,'status'=>$status];

      $task = Task::create($data);
      return response()->json([
          'data' =>
          [
            'tasks' => $task
          ]
      ],201);
    }
    public function modify($id)
    {
      $status = Task::find($id)['status'];
      if ($status >= 3)
      {
        $status = 3;
      }
      else
      {
        ++$status;
      }
      Task::find($id)->update(['status' => $status]);
      $task = Task::find($id);
      return response()->json([
          'data' =>
          [
            'tasks' => $task
          ]
      ],201);
    }
}
