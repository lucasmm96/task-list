@extends('layouts.app')

@section('title', $task->title)

@section('content')
    <button><a href="/tasks/{{$task->id}}/edit">Edit</a></button>
    <p>{{ $task->description }}</p>

    @if ($task->long_description)
    <p>{{ $task->long_description }}</p>
    @endif

    <p>{{ $task->created_at }}</p>
    <p>{{ $task->updated_at }}</p>

    <div><button><a href="/tasks">Home</a></button></div>
@endsection
