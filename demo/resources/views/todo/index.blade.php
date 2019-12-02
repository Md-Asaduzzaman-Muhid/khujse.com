@extends('layouts.app')

@section('content')
    <div class="app-content content" id="khujse">
            <div class="content-wrapper">
                <div class="content-header row">
                    <div class="content-header-right col-md-4 col-12">
                        <div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown">
                            <a href="javascript:void(0)" class="btn btn-social width-150 mb-1 mr-1 btn-primary" id="addBtn">
                                <span class="ft-plus-circle font-medium-5"></span><b>Add New</b></a>
                        </div>
                        <div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown" style="display: none" id="listBtn">
                            <a href="javascript:void(0)" class="btn btn-social width-150 mb-1 mr-1 btn-primary">
                                <span class="ft-list font-medium-5"></span><b>View List</b></a>
                        </div>
                    </div>
                    <div class="content-body">
                        <div class="row match-height">
                            <div class="col-md-12">
                                <todo-list :taskList="{{json_encode($taskList ?? '')}}"></todo-list>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        {{-- <form class="form-inline" action="{{route('todo.store')}}" method="post">
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
        </table> --}}
    </div>
@endsection

@section('content')
    {{-- <script type="text/javascript" src="{{ asset('js/Todo/Todo.js') }}"></script> --}}
@stop
