@extends('layouts.app')
@section('title', $task->title)
@section('content')
    {{-- @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif --}}

{{-- @if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif --}}
{{-- <h1>{{$task->title}}</h1> --}}
<h2>{{$task->description}}</h2>

@if($task->long_description)
    <h2>{{$task->long_description}}</h2>
@endif

<h2>{{$task->created_at}}</h2>
<h2>{{$task->updated_at}}</h2>

<a href="{{ route('tasks.edit', ['task'=> $task->id])}}" class="btn btn-primary p-3 px-5">Edit</a>
<form class="btn btn-danger" action="{{ route('tasks.destroy', ['task'=> $task->id])}}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Delete</button>
</form>

@endsection