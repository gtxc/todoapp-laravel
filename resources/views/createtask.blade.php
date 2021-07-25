@extends('layouts.app')

@section('content')
    <div align="center">
        <h1>Create new task</h1>
        <br>
        <a href="/tasks">Return to Tasks</a>
        <br><br>
        <form action="/tasks" method="post">
            @csrf
            <input type="text" name="title" placeholder="title">
            <br>
            <textarea type="text" name="description" placeholder="description" rows="5" cols="26"></textarea>
            <br>
            <input type="date" name="due_date">
            <br>
            <input type="submit" value="submit">
        </form>
    </div>
@endsection
