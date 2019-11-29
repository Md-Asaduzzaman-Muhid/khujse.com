<?php

namespace App\Http\Controllers;

use App\Services\TodoService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TodoController extends Controller
{
    private $todoService;
    public function __construct(TodoService $todoService)
    {
        $this->todoService = $todoService;
//        $this->middleware('auth');
    }

    public function index(){
        $taskList = $this->todoService->all();
        return view('todo.index')->with('taskList',$taskList);
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'task' => 'required',
        ]);
        if($validator->fails()) {
            dd('Validation Error');
        }
        $this->todoService->baseRepository()->create($request->all());
        return redirect(route('todo.index'));
    }

    public function delete(Request $request){
        $id = $request->query('id');
        $this->todoService->delete($id);
        return redirect(route('todo.index'));
    }
}
