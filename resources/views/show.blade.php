@extends('layouts.app')

@section('title', $task->title)

@section('content')
    <p class="mb-4 text-slate-700">{{ $task->description }}</p>

    @if ($task->long_description)
    <p class="mb-4 text-slate-700">{{ $task->long_description }}</p>
    @endif

    <p class="mb-4 text-sm text-slate-500"> Created {{ $task->created_at->diffForHumans() }} ⚫ Updated {{ $task->updated_at->diffForHumans() }}</p>

    <form action="{{ route('tasks.toggle-complete', ['task' => $task]) }}" method="POST">
        @csrf
        @method('PUT')
        @if ($task->completed)
            <button class="font-medium text-green-500" type="submit">✅Completed</button>
        @else
            <button class="font-medium text-red-500" type="submit">❌ Not completed</button>
        @endif
    </form>

    <div class="mt-10 flex gap-2 my-auto">
        <a class="btn" href="{{ route('tasks.index') }}">🏡 Home</a>
        <a class="btn" href="{{ route('tasks.edit', ['task' => $task])}}">✏️ Edit</a>
        <form action="{{ route('tasks.destroy', ['task' => $task ]) }}" method="POST">
            @csrf
            @method('DELETE')
            <button class="btn" type="submit">❌ Delete</button>
        </form>
    </div>
    delete
@endsection
