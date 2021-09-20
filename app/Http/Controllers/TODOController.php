<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TODOList;
use Illuminate\Support\Carbon;

class TODOController extends Controller
{
    public function todo()
    {
        $todo = TODOList::get();
        return view('admin.todo.index', compact('todo'))->with('no', 1);;
    }
    public function storeTask(Request $request){
        TODOList::insert([
            'name' => $request->task,
            'status' => 0,
            'created_at' => Carbon::now(),
        ]);
        return redirect()->route('todo')->with('success', 'Task Added Successfully');

    }
    public function changeStatus3(Request $request){
        $toDos = TODOList::find($request->id);
        $toDos->status = $request->status;
        $toDos->save();

    }
    public function delete($id)
    {
        TODOList::find($id)->delete();
        return redirect()->back()->with('success', 'Task deleted successfully');

    }
}
