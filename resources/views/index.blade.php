@extends('layouts.app')

@section('title', 'The list of tasks')

@section('content')
    <button><a href="/tasks/create">Create Task</a></button>
    @forelse ($tasks as $task)
    <div>
        <a href="{{ route('tasks.show',['task' => $task->id]) }}">{{ $task->title }}</a>
    </div>
    @empty
        <div>There is not any task.</div>
    @endforelse
@endsection