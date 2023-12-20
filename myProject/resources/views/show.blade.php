@extends('layouts.app')

@section('title', $task->title)

@section('content')
    <nav class="mb-4">
        <a class="text-medium text-gray-700 underline decoration-pink-500" href="{{ route('tasks.index') }}">Home</a>
    </nav>

    {{-- Uncomment if you want to display success/error messages --}}
    {{-- @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif --}}

    <h1 class="text-2xl font-bold mb-2">{{ $task->title }}</h1>
    <h2 class="text-lg font-semibold mb-4">{{ $task->description }}</h2>

    @if($task->long_description)
        <p class="mb-4">{{ $task->long_description }}</p>
    @endif

    <p class="mb-2">Created {{ $task->created_at->diffForHumans() }} . Updated {{ $task->updated_at->diffForHumans() }}</p>
    <p class="mt-4 mb-4">
        @if ($task->completed)
        <span class="font-medium text-green-500">Completed</span>
        @else
        <span class="font-medium text-red-500">Not Completed</span>
    @endif
    </p>

        <div class="flex gap-2">
        <a href="{{ route('tasks.edit', ['task' => $task->id]) }}" class="rounded-md px-2 py-1 text-center font-medium text-slate-700 shadow-sm ring-1 ring-slate-700/10 hover:bg-slate-50">Edit</a>
        
        <form action="{{ route('tasks.toggle-complate', ['task' => $task]) }}" method="POST">
            @csrf
            @method('PUT')
            <button type="submit" class="rounded-md px-2 py-1 text-center font-medium text-slate-700 shadow-sm ring-1 ring-slate-700/10 hover:bg-slate-50">
                Mark as {{ $task->completed ? 'Not Completed' : 'Completed' }}
            </button>
        </form>
    

    <form action="{{ route('tasks.destroy', ['task' => $task->id]) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="rounded-md px-2 py-1 text-center font-medium text-slate-700 shadow-sm ring-1 ring-slate-700/10 hover:bg-slate-50">Delete</button>
    </form>
        </div>
@endsection
