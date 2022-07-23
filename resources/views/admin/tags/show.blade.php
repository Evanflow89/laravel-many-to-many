@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card">
        <div class="card-header">
            <h1>{{$tag->name}}</h1>
        </div>
        <div class="card-body">
            @if (count($tag->posts) > 0)
            <h3>Posts Related</h3>
<ul>
    @foreach ($tag->posts as $post)
        <li>{{$tag->title}}</li>
    @endforeach
</ul>
@endif  
            <a class="btn btn-primary mt-3" href="{{route('admin.tags.index')}}">Back</a>
        </div>
    </div>
</div>
@endsection