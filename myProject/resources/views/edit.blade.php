@extends('layouts.app')
@section('title', 'Edit Task')
@section('styles')
<style>
    body{
        background: lightcoral;
    }
    .error-message{
        color: red;
        font-size: 0.8rem;
    }
</style>
@endsection
@section('content')
    <form action="{{route('tasks.update', ['task' => $task->id])}}" method="POST">
        
        @csrf
        @method('PUT')

        <div class="container col-md-4" >

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" id="title" value="{{$task->title}}" >
                @error('title')
                    <p class="error-message">{{$message}}</p>
                @enderror
                
            </div>
            
            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" class="form-control" name="description" id="description" value="{{$task->description}}" >
                @error('description')
                    <p class="error-message">{{$message}}</p>
                @enderror
                
            </div>
            
            <div class="form-group">
                <label for="long_description">Long Description</label>
                <textarea class="form-control" name="long_description" id="long_description" rows="4" >
                    {{$task->long_description}}
                </textarea>
                @error('long_description')
                    <p class="error-message">{{$message}}</p>
                @enderror
            </div>
            
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Eidt Task</button>
            </div>
        </div>
            

    </form>
@endsection