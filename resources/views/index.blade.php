<h1> The list of tasks. </h1>

<div>
    @if(count($tasks))
        @foreach ($tasks as $task)
            <div>{{ $task->title }}</div>
        @endforeach
    @else
        <div>There is not any task.</div>
    @endif
</div>