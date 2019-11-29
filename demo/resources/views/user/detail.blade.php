
@extends('layouts.app')
@section('content')
<div class="text-right">
    <a class="btn btn-primary" href="{{route('user.list')}}">Back</a>
</div>
    <div class="container">
        <h2>User detail</h2>
        <table class="table">
            <tbody>
                <tr>
                    <td>Name : </td>
                    <td>{{$user->name}}</td>
                </tr>
                <tr>
                    <td>Email : </td>
                    <td>{{$user->email}}</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
