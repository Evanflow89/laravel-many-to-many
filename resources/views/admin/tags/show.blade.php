@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card">
        <div class="card-header">
            <h1>{{$category->name}}</h1>
        </div>
        <div class="card-body">
            @if (count($category->posts) > 0)
            <h3>Posts Related</h3>
<ul>
    @foreach ($category->posts as $post)
        <li>{{$post->title}}</li>
    @endforeach
</ul>
@endif  
            <a class="btn btn-primary mt-3" href="{{route('admin.categories.index')}}">Back</a>
        </div>
    </div>
</div>
@endsection