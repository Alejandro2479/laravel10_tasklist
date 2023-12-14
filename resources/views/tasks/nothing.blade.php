@extends('layouts.app')

@section('title', 'Tasks List App - Nothing Here')

@section('htitle', 'Nothing Here')
@section('content')
    <nav class="mt-4">
        <a class="link" href="{{ route('tasks.index') }}">Go to home</a>
    </nav>
@endsection
