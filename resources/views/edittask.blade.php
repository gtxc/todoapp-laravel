@extends('layouts.app')

@section('content')
    <div align="center">
        <h1>Edit Task</h1>
        <br>
        <a href="/tasks">Return to Tasks</a>
        <br><br>
        <form action="/tasks/{{ $task->id}}" method="post">
            @csrf
            @method('put')
            <input type="text" name="title" value="{{ $task->title }}">
            <br>
            <textarea type="text" name="description" rows="5" cols="26">{{ $task->description }}</textarea>
            <br>
            <input type="date" name="due_date" value="{{ $task->due_date }}">
            <br>
            <input type="submit" value="submit">
        </form>
        <form action="/tasks/{{ $task->id }}" method="post">
            @csrf
            @method('delete')
            <input type="submit" value="delete">
        </form>
    </div>
@endsection
