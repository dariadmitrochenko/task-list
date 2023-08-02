@extends('layouts.app')

@section('title', 'The list of tasks')

@section('content')
<nav class="mb-4">
    <a href="{{ route('tasks.create') }}"
    class="link">Add task</a>
</nav>


@forelse ( $tasks as $task )
    <ul>
        <li>
        <a href="{{ route('tasks.show', ['task' => $task->id]) }}" 
        @class(['line-through' => $task->completed])>{{ $task->title }}</a>
        </li>
    </ul>   
    @empty
    <div>
        There are no tasks!
    </div>    
    @endforelse (count($tasks))

    <div>
        @if ($tasks->count())
        <nav class="mt-4">
          {{ $tasks->links() }}
        </nav>
        @endif
    </div>
    
@endsection