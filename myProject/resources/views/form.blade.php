@extends('layouts.app')

@section('title', isset($task) ? 'Edit Task' : 'Add Task')

@section('content')
    <form method="POST" action="{{ isset($task) ? route('tasks.update', ['task' => $task->id]) : route('tasks.store') }}" class="mx-auto mt-8    bg-white shadow-md rounded-lg">
        @csrf
        @isset($task)
            @method('PUT')
        @endisset

        <div class="mb-4">
            <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Title</label>
            <input type="text" class="form-input rounded-md shadow-sm w-full" name="title" id="title" @class(['border-red-500' => $errors->has('title')]) value="{{ $task->title ?? old('title') }}" >
            @error('title')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Description</label>
            <input type="text" class="form-input rounded-md shadow-sm w-full" name="description" id="description" value="{{ $task->description ?? old('description') }}">
            @error('description')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="long_description" class="block text-gray-700 text-sm font-bold mb-2">Long Description</label>
            <textarea class="form-input rounded-md shadow-sm w-full" name="long_description" id="long_description" rows="4">{{ $task->long_description ?? old('long_description') }}</textarea>
            @error('long_description')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <button type="submit" class="rounded-md px-2 py-1 text-center font-medium text-slate-700 shadow-sm ring-1 ring-slate-700/10 hover:bg-slate-50 mx-3 mb-3"> 
                @isset($task) Edit Task @else Add Task @endisset
            </button>
            <a href="{{route('tasks.index')}}" class="text-medium text-gray-700 underline decoration-pink-500">Cancel</a>
        </div>
    </form>
@endsection
