<h1> The list of tasks. </h1>

<div>
    @forelse ($tasks as $task)
        <div>{{ $task->title }}</div>
    @empty
        <div>There is not any task.</div>
    @endforelse
</div>