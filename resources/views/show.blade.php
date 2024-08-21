@extends('layouts.app')

@section('title', $task->title)

@section('content')
    <p>{{ $task->description }}</p>

    @if ($task->long_description)
    <p>{{ $task->long_description }}</p>
    @endif

    <p>{{ $task->created_at }}</p>
    <p>{{ $task->updated_at }}</p>

    <p>
        @if ($task->completed)
            Completed
        @else
            Not completed
        @endif
    </p>

    <div>
        <form action="{{ route('tasks.toggle-complete', ['task' => $task]) }}" method="POST">
            @csrf
            @method('PUT')
            <button type="submit">Mark as {{ $task->completed ? 'not completed' : 'completed' }}</button>
        </form>
    </div>
    <div>
        <button><a style="text-decoration: none; color:black" href="{{ route('tasks.index') }}">Home</a></button>
    </div>
    <div>
        <button><a style="text-decoration: none; color:black" href="{{ route('tasks.edit', ['task' => $task])}}">Edit</a></button>
    </div>
    <div>
        <form action="{{ route('tasks.destroy', ['task' => $task ]) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </div>
@endsection
