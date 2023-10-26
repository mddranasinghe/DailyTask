<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;// import Task model


class TaskController extends Controller
{
    public function submitTask(Request $request)
    {
     $this->validate($request,['task'=>'required|max:100|min:5',]);

        //dd($request->all());
         $task=new Task; // cretate object

         $task->task=$request->task;
         $task->save();
       

        $TaskData=Task::all();

        // return view('task')->with('task',$TaskData);

         return redirect()->back();
//task table ->task coloms =form pass data

       
    }

    public function completedTask($id)
    {
     
        $task=Task::find($id);
        $task->iscompleted=1;
        $task->save();

        return redirect()->back();
        return view('task');

    }


    public function NotCompletedTask($id)
    {
     
        $task=Task::find($id);
        $task->iscompleted=0;
        $task->save();

        return redirect()->back();

    }
    


    public function DeleteTask($id)
    {
     
        $task=Task::find($id);
        $task->iscompleted=0;
        $task->delete();

        return redirect()->back();

    }
}
