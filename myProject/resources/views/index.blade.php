@extends('layouts.app')
@section('title', 'List of the  Tasks')
{{-- <h1> This is the list of the task to do</h1> --}}

{{-- <br> --}}
{{-- @isset($name)
    this is {{$name}}
@endisset --}}

{{-- <div> --}}
    
    {{-- @if(count($tasks))
        <div>there is tasks to do</div>
    @else
        <div>this is no tasks to do</div>
    
    @endif
    @foreach ($tasks as $item)
        <br>{{$item->id}}.{{$item->title}}.<br>
    @endforeach --}}
    
    {{-- we can also use forelse to handle the same thing --}}
    @section('content')
    @forelse ($tasks as $task)
        {{-- <div>{{$task->title}}</div> --}}
        <div>
            <a href="{{ route('tasks.show', ['task'=> $task->id])}}">{{$task->title}}</a>
        </div>
    @empty
        <div>There is no task</div>
    @endforelse

    @endsection
{{-- </div> --}}