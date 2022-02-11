@extends('layouts.app')
@section('title')
    Edit Todo
@endsection
@section('content')
    <form action="/update/{{$todos->id}}" method="post" class="mt-4 p-4">
        @csrf
        <div class="form-group m-3">
            <label for="name"> Task</label>
            <input type="text" class="form-control" value="{{$todos->task}}" name="task">
        </div>
        <div class="form-group m-3">
            <label for="description"> Deadline</label>
            <input type="datetime-local" class="form-control" name="deadline"  value="{{\Carbon\Carbon::parse($todos->deadline)}}"/>
        </div>
        <div class="form-group m-3">
            <input type="submit" class="btn btn-primary float-end" value="Submit">
        </div>
    </form>
@endsection
