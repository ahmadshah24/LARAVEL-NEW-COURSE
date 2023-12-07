@extends('layouts.app')
@section('title', $task->title)
@section('content')
{{-- <h1>{{$task->title}}</h1> --}}
<h2>{{$task->description}}</h2>
@if($task->long_description)
    <h2>{{$task->long_description}}</h2>
@endif

<h2>{{$task->created_at}}</h2>
<h2>{{$task->updated_at}}</h2>

@endsection