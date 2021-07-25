@extends('layouts.app')
@section('content')
    <div align="center">
        <h1>Tasks</h1>
        <br>
        <a href="/tasks/create">Create a New Task</a>
        <br>
        @foreach($tasks as $task)
            <h3>{{ $task->title }}</h3>
            <p>{{ $task->description }}</p>
            <p>Due: {{ $task->due_date }}</p>
            <a href="/tasks/{{ $task->id }}">View</a>
            <a href="/tasks/{{ $task->id }}/edit">Edit</a>
{{--            <a href="/tasks">Delete</a>--}}
            <form action="/tasks/{{ $task->id }}" method="post">
                @csrf
                @method('delete')
                <input type="submit" value="delete">
            </form>
            <br><br>
        @endforeach
    </div>
@endsection
