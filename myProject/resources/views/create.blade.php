@extends('layouts.app')
@section('title', 'Add Task')
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
    <form action="{{route('tasks.store')}}" method="POST">
        
        {{-- {{$errors}} --}}
        @csrf

        <div class="container col-md-4" >

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" id="title" value="{{old('title')}}" >
                @error('title')
                    <p class="error-message">{{$message}}</p>
                @enderror
                
            </div>
            
            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" class="form-control" name="description" id="description" value="{{old('description')}}">
                @error('description')
                    <p class="error-message">{{$message}}</p>
                @enderror
                
            </div>
            
            <div class="form-group">
                <label for="long_description">Long Description</label>
                <textarea class="form-control" name="long_description" id="long_description" rows="4" >{{old('long_description')}}</textarea>
                @error('long_description')
                    <p class="error-message">{{$message}}</p>
                @enderror
            </div>
            
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Add Task</button>
            </div>
        </div>
            

    </form>
@endsection