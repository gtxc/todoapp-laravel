@extends('layouts.app')

@section('content')
    <div align="center">
        <h1>{{ $task->title }}</h1>
        <p>{{ $task->description }}</p>
        <p>Due: {{ $task->due_date }}</p>
        <a href="/tasks">Tasks</a>
        <a href="/tasks/{{ $task->id }}/edit">Edit</a>
{{--        <a href="/tasks">Delete</a>--}}
        <form action="/tasks/{{ $task->id }}" method="post">
            @csrf
            @method('delete')
            <input type="submit" value="delete">
        </form>
        <br><br>
    </div>
@endsection

{{--Below is used for array type--}}
{{--<h1>{{ $task[0]['title'] }}</h1>--}}
{{--<p>{{ $task[0]['description'] }}</p>--}}
{{--<p>Due: {{ $task[0]['due_date'] }}</p>--}}
{{--<a href="/tasks">Tasks</a>--}}
{{--<a href="/tasks/{{ $task[0]['id'] }}/edit">Edit</a>--}}
{{--<a href="/tasks">Delete</a>--}}
