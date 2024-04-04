@extends('layouts.template')

@section('title', "Todo: " . $todo->title)

@section('content')
    <h3>{{ $todo->title }}</h3>
    <p><strong>Priority: </strong>{{ $todo->priority }}</p>
    <p><strong>Done: </strong>{{ $todo->done == true ? 'YES' : 'NO' }}</p>
    <div>
        <a href="{{ route('todos.edit', $todo->id) }}">Edit</a>
        <form action="{{ route('todos.destroy', $todo->id) }}" method="post">
            @csrf
            @method('DELETE')
            <button>Delete</button>
        </form>
    </div>
    <a href="{{ route('todos.index') }}">Back</a>
@endsection