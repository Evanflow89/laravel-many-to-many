@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card">
        <div class="card-header">
            <h1>{{$post->title}}</h1>
            @if ($post->category)
               <span class="badge badge-primary">{{$post->category->name}}</span>
            @endif
        </div>
        <div class="card-body">
            <div>{{$post->content}}</div>
            <a class="btn btn-primary mt-3" href="{{route('admin.posts.index')}}">Back</a>
            @if (count($post->tags) > 0)
            <div class="mt-3">
                <h5>Tags</h5>
                <ul>
                @foreach ($post->tags as $tag)
                    <li>{{$tag}}</li>
                @endforeach
            </ul>
            </div>
        </div>
        @endif
    </div>
</div>
@endsection