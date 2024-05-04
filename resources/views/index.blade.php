@extends('layouts.app')
@section('title')
    My Todo App
@endsection
@section('nav')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1><span class="navbar-brand mb-0 h1" style="color:blue;">PHP Simple Todo List App</span></h1>
            </div>
            <div class="col-6 mt-2">
                <a href="/details"><span class="btn btn-primary float-end">Show All</span></a>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="row mt-3">
        <div class="col-12 align-self-center">
            <ul class="list-group">
                    <table>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        <?php $count = 1; ?>
                        @foreach($todos as $key =>  $todo)
                            @if($todo->status  != 'Done') 
                                <tr>
                                    <td> {{$count}}</td>
                                    <td> {{$todo->name}}</td>
                                    @if($todo->status  == 'Done') 
                                        <td>{{$todo->status}}</td>
                                    @else
                                        <td></td>
                                    @endif
                                    <td>
                                    @if($todo->status  != 'Done') 
                                        <a href="/update/{{$todo->id}}/{{$todo->name}}"><span class="btn btn-success">Done</span></a>
                                    @endif
                                        <a href="/delete/{{$todo->id}}"><span class="btn btn-danger">Delete</span></a>
                                    </td>
                                </tr>
                                <?php $count++; ?>
                            @endif
                        @endforeach
                    </table>
            </ul>
        </div>
    </div>
    @if(session()->has('success'))
        <div class="alert alert-success row mt-3">

            {{ session()->get('success') }}

        </div>
    @elseif (session()->has('danger')) 
        <div class="alert alert-danger row mt-3">

            {{ session()->get('danger') }}

        </div>
    @endif

@endsection