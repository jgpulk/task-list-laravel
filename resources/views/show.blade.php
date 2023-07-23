@extends('layouts.app')

@section('title',$task->title)

@section('content')
    <p><b>Description :</b></p>
    <p>{{$task->description}}</p>

    @if ($task->long_description)
        <p><b>Long Description :</b></p>
        <p>{{ $task->long_description }}</p>
    @endif

    <p><b>Task Status :</b></p>
    @if ($task->completed == TRUE)
        <p>Completed</p>
    @else
        <p>Not Completed</p>
    @endif

    <p><b>Created At :</b></p>
    <p>{{$task->created_at}}</p>
    <p><b>Updated At :</b></p>
    <p>{{$task->updated_at}}</p>
@endsection