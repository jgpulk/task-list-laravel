@extends('layouts.app')

@section('title','Welcome to Tasks Page')

@section('content')
    @forelse ($tasks as $task)
        <div><b>Task {{ $loop->index+1 }}</b> - {{ $task->title }}</div>
        <a href="{{ route('task.show', ['id' => $task->id]) }}">Open Task</a>
    @empty
        <div>No tasks founded</div>
    @endforelse
@endsection