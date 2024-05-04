
@extends('layouts.app')

@section('title')
    Create Todo
@endsection

@section('content')

    <form action="store-data" method="post" class="mt-4 p-4">
        @csrf
        <div class="form-group m-3" class="mt-4 p-4" >
            <input type="text" name="name">
            <input type="submit" class="btn btn-primary float-end" value="Add Task">
        </div>
    </form>

@endsection