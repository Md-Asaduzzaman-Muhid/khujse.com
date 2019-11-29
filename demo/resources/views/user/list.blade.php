@extends('layouts.app')

@section('content')
    <div class="container">
        <a class="btn btn-primary" href="{{route('user.create')}}">Add User</a>
        <h2>User list</h2>
        <table class="table">
            <thead>
            <tr>
                <th>Name</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{$user->name}}</td>
                    <td>
                        <a class="btn btn-primary" href="{{route('user.detail',['id'=>$user->id])}}">Details</a>
                        @role('admin')
                        <a class="btn btn-danger" href="{{route('user.delete',['id'=>$user->id])}}">Delete</a>
                        @if(!$user->hasAnyRole(['super_admin']))
                            @if(!$user->hasAnyRole(['admin']))
                                <a class="btn btn-success" href="{{route('user.make.admin',['id'=>$user->id])}}">Make
                                    Admin</a>
                            @else
                                <a class="btn btn-info" href="{{route('user.make.user',['id'=>$user->id])}}">Make
                                    User</a>
                            @endif
                        @endif
                        @endrole
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
