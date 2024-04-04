@extends('layouts.template')

@section('title', 'All Todos')

@section('content')
    <h1>My Todo List</h1>
    @if ($todos->isEmpty())
        <p>No todos.</p>
    @endif

    <ul>
        @foreach ($todos as $todo)
            <li>
                {{ $todo->title }}
                <a href="{{ route('todos.show', $todo->id) }}">View</a>
            </li>
        @endforeach
    </ul>
@endsection