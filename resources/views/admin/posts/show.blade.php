@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card">
        <div class="card-header">
            <h1>{{$post->title}}</h1>
        </div>
        <div class="card-body">
            <div>{{$post->content}}</div>
            <a class="btn btn-primary mt-3" href="{{route('admin.posts.index')}}">Back</a>
        </div>
    </div>
</div>
@endsection