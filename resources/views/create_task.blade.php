@extends('layouts.app')

@section('title','Create a new task')

@section('content')
    <form action="{{route('task.creates')}}" method="post">
        @csrf
        <div class="container">
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" name="title" id="title" placeholder="Enter title">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" name="description" id="description" rows="3"></textarea>
            </div>
            <div class="mb-3">
                <label for="long_description" class="form-label">Long Description</label>
                <textarea class="form-control" name="long_description" id="long_description" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Create Task</button>
        </div>
    </form>
@endsection