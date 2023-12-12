@extends('layouts.app')
@section('title', isset($task) ? 'Edit Task' : 'Add Task')
@section('styles')
<style>
    body{
        background: green;
    }
    .error-message{
        color: red;
        font-size: 0.8rem;
    }
</style>
@endsection
@section('content')
    <form action="{{isset($task) ? route('tasks.update', ['task' => $task->id]) : route('tasks.store')}}" method="POST">
        
        {{-- {{$errors}} --}}
        @csrf
        @isset($task)
            @method('PUT')
        @endisset

        <div class="container col-md-4" >

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" id="title" value="{{$task->title ?? old('title')}}" >
                @error('title')
                    <p class="error-message">{{$message}}</p>
                @enderror
                
            </div>
            
            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" class="form-control" name="description" id="description" value="{{$task->description ?? old('description')}}">
                @error('description')
                    <p class="error-message">{{$message}}</p>
                @enderror
                
            </div>
            
            <div class="form-group">
                <label for="long_description">Long Description</label>
                <textarea class="form-control" name="long_description" id="long_description" rows="4" >
                    {{$task->long_description ?? old('long_description')}}
                </textarea>
                @error('long_description')
                    <p class="error-message">{{$message}}</p>
                @enderror
            </div>
            
            <div class="form-group">
                <button type="submit" class="btn btn-primary">
                    @isset($task)
                        Edit Task
                    @else
                        Add Task
                    @endisset
                </button>
            </div>
        </div>
            

    </form>
@endsection