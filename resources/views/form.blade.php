@extends('layouts.app')

@section('title', isset($task) ? 'Edit Task' : 'Add Task')

@section('content')
    <form method="POST" action="{{  isset($task) ? route('tasks.update', ['task' => $task->id]) : route('tasks.store') }}">
        @csrf
        @isset($task)
            @method('PUT')
        @endisset
        <div class="mb-5">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" @class(['border-red-500' => $errors->has('title')]) value="{{ $task->title ?? old('title') }}">
            @error('title')<p class="error">{{ $message }}</p>@enderror
        </div>
        <div class="mb-5">
            <label for="title">Description</label>
            <textarea name="description" id="description" @class(['border-red-500' => $errors->has('description')]) rows="5">{{ $task->description ?? old('description') }}</textarea>
            @error('description')<p class="error">{{ $message }}</p>@enderror
        </div>
        <div class="mb-5">
            <label for="title">Long Description</label>
            <textarea name="long_description" id="long_description" @class(['border-red-500' => $errors->has('long_description')]) rows="10">{{ $task->long_description ?? old('long_description') }}</textarea>
            @error('long_description')<p class="error">{{ $message }}</p>@enderror
        </div>
        <div class="my-5">
            <button class="btn" type="submit">✔️ Save</button>
            <button><a class="btn" style="text-decoration: none; color:black" href="{{ route('tasks.index') }}">✖️ Cancel</a></button>
        </div>
    </form>
@endsection>