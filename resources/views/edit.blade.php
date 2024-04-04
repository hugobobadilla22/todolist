@extends('layouts.template')

@section('title', 'Update Todo: ' . $todo->title)

@section('content')
    <h1>Add New Todo to List</h1>
    <form action="{{ route('todos.update', $todo->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="title">Todo:</label>
            <input type="text" name="title" id="title" value="{{ $todo->title }}" placeholder="What's your to do?">
        </div>
        <div>
            <label for="title">Priority:</label>
            <select name="priority" id="priority">
                <option disabled selected>Priority</option>
                <option value="high" {{ $todo->priority == 'High' ? 'selected' : '' }}>High</option>
                <option value="medium" {{ $todo->priority == 'Medium' ? 'selected' : '' }}>Medium</option>
                <option value="low" {{ $todo->priority == 'Low' ? 'selected' : '' }}>Low</option>
            </select>
        </div>
        <div>
            <span>Is it Done?</span>
            <label for="no">No</label>
            <input type="radio" name="done" id="no" value="0" {{ $todo->done == '0' ? 'checked' : '' }}>
            <label for="yes">Yes</label>
            <input type="radio" name="done" id="yes" value="1" {{ $todo->done == '1' ? 'checked' : '' }}>
        </div>
        <input type="submit" value="Update">
    </form>
@endsection