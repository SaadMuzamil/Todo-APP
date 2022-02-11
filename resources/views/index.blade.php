@extends('layouts.app')
@section('title')
    My Todo App
@endsection
@section('content')

    <div class="row mt-3">
        <div class="col-12 align-self-center">
            <ul class="list-group">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Task</th>
                                <th>Deadline</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($todos as $todo)
                                <tr>
                                    <td>{{$todo->task}}</td>
                                    <td>{{ Timezone::convertToLocal(\Carbon\Carbon::parse($todo->deadline),'g:i a, jS F Y')}}</td>
                                    <th><a class="btn btn-primary" href="/details/{{$todo->id}}">detail</a></th>
                                </tr>
                            @endforeach
                        </tbody>

                    </table>
            </ul>
        </div>
    </div>

@endsection
