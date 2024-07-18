<h1> The list of tasks. </h1>

<div>
    @forelse ($tasks as $task)
    <div>
        <a href="{{ route('tasks.show',['id' => $task->id]) }}">{{ $task->title }}</a>
    </div>
    @empty
        <div>There is not any task.</div>
    @endforelse
</div>