@extends('layouts.app')

@section('title')
    Create Todo
@endsection

@section('content')

    <form action="store-data" method="post" class="mt-4 p-4">
        @csrf
        <div class="form-group m-3">
            <label for="name">Task</label>
            <input type="text" class="form-control" name="task">
        </div>
        <div class="form-group m-3">
            <label for="description">Deadline</label>
            <input type="datetime-local" class="form-control" id="deadline" name="deadline">
        </div>
        <div class="form-group m-3">
            <input type="submit" class="btn btn-primary float-end" value="Submit">
        </div>
    </form>

@endsection
