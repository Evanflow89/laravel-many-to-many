@extends('layouts.app')

@section('content')
    
<div class="container">
    <div class="card">
        <div class="card-header">
            <h1>Posts</h1>
        </div>
        <div class="card-body">
          <div class="mb-3">
            <a href="{{route('admin.posts.create')}}" class="btn btn-success">Insert New Post</a>
            
          </div>
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Slug</th>
                    <th scope="col">Content</th>
                    <th scope="col">State</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        
                    <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->slug}}</td>
                    <td class="text-truncate" style="max-width: 150px">{{$post->content}}</td>
                    <td>
                        @if ($post->published) 
                        <span class="badge rounded-pill bg-primary text-light">Published</span>     
                        @else
                        <span class="badge rounded-pill bg-warning text-dark">Draft</span>
                        @endif
                        
                    </td>
                    <td>
                      <a class="btn btn-primary" href="{{route('admin.posts.show', $post->id)}}">Show</a>
                      <a href="{{route('admin.posts.edit', $post->id)}}" class="btn btn-warning">Edit Post</a>
                      <form action="{{route('admin.posts.destroy', $post->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                    </td>
                  </tr>

                  @endforeach
                </tbody>
              </table>

        </div>
    </div>
</div>

@endsection