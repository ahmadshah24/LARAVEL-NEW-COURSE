@extends('layouts.app')
@section('title', 'Add Task')

@section('content')
    <form action="{{route('tasks.store')}}" method="POST">
        @csrf

        <div class="container col-md-4" >

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" id="title" required>
            </div>
            
            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" class="form-control" name="description" id="description" required>
            </div>
            
            <div class="form-group">
                <label for="long_description">Long Description</label>
                <textarea class="form-control" name="long_description" id="long_description" rows="4" required></textarea>
            </div>
            
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Add Task</button>
            </div>
        </div>
            

    </form>
@endsection