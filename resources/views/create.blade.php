@extends('layouts.template')

@section('title', 'Add a New Todo')

@section('content')
    <h1>Add New Todo to List</h1>
    <form action="{{ route('todos.store') }}" method="POST">
        @csrf
        <div>
            <label for="title">Todo:</label>
            <input type="text" name="title" id="title" placeholder="What's your to do?">
        </div>
        <div>
            <label for="title">Priority:</label>
            <select name="priority" id="priority">
                <option disabled selected>Priority</option>
                <option value="High">High</option>
                <option value="Medium">Medium</option>
                <option value="Low">Low</option>
            </select>
        </div>
        <div>
            <span>Is it Done?</span>
            <label for="no">No
                <input type="radio" name="done" id="no" value="0" checked>
            </label>
            <label for="yes">Yes
                <input type="radio" name="done" id="yes" value="1">
            </label>
        </div>
        <input type="submit" value="Add">
    </form>
@endsection