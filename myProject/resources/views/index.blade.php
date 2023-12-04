hello this a blade template
<br>
{{-- @isset($name)
    this is {{$name}}
@endisset --}}

<div>
    
    @if (count($tasks)){
        <div>there is tasks to do</div>
    }
    @else{
        <div>this is no tasks to do</div>
    }
    @endif
    @foreach ($tasks as $item)
        <br>.{{$item->id}}.{{$item->name}}.<br>
    @endforeach
    
</div>