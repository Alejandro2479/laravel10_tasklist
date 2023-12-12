@extends('layouts.app')

@section('title', 'Not Found Page')

@section('content')
    <nav class="mt-4">
        <a class="link" href="{{ route('tasks.index') }}">Go to home!</a>
    </nav>
@endsection
