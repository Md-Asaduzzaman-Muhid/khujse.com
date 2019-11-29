@extends('layouts.app')

@section('content')
    <div class="container">

        <form class="form-inline" action="{{route('todo.store')}}" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <input type="text" class="form-control" name="task">
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>

        <h2>Todo list</h2>
        <table class="table">
            <thead>
            <tr>
                <th>Task Name</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($taskList as $task)
                <tr>
                    <td>{{$task->task}}</td>
                    <td>
                        <a class="btn btn-danger" href="{{route('todo.delete',['id'=>$task->id])}}">Delete</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
