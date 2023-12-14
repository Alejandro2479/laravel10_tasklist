@extends('layouts.app')

@section('title', 'Task List App - Index')

@section('htitle', 'Task List')
@section('content')
    @forelse($tasks as $task)
        <div>
            <a @class(['line-through' => $task->completed]) href="{{ route('tasks.show', ['task' => $task->id]) }}">{{ $task->title }}</a>
        </div>
    @empty
        <div>There are not tasks!</div>
    @endforelse

    <nav class="mt-4">
        <a class="link" href="{{ route('tasks.create') }}">Create a task</a>
    </nav>

    @if ($tasks->count())
        <nav class="mt-4">
            {{ $tasks->links() }}
        </nav>
    @endif
@endsection
