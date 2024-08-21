@extends('layouts.app')

@section('title', $task->title)

@section('content')
    <p>{{ $task->description }}</p>

    @if ($task->long_description)
    <p>{{ $task->long_description }}</p>
    @endif

    <p>{{ $task->created_at }}</p>
    <p>{{ $task->updated_at }}</p>

    <div>
        <button><a style="text-decoration: none; color:black" href="/tasks">Home</a></button>
    </div>
    <div>
        <button><a style="text-decoration: none; color:black" href="/tasks/{{$task->id}}/edit">Edit</a></button>
    </div>
    <div>
        <form action="{{ route('tasks.destroy', ['task' => $task->id ]) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </div>
@endsection
