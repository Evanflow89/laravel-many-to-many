@extends('layouts.app')

@section('content')
    
<div class="container">
    <div class="card">
        <div class="card-header">
            <h1>Tags</h1>
        </div>
        <div class="card-body">
          <div class="mb-3">
            <a href="{{route('admin.tags.create')}}" class="btn btn-success">Insert New Tags</a>
            
          </div>
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Slug</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($tags as $tag)
                        
                    <tr>
                    <td>{{$tag->id}}</td>
                    <td>{{$tag->title}}</td>
                    <td>{{$tag->slug}}</td>
                    
                    <td>
                      <a class="btn btn-primary" href="{{route('admin.tags.show', $tag->id)}}">Show</a>
                      <a href="{{route('admin.tags.edit', $tag->id)}}" class="btn btn-warning">Edit Tag</a>
                      <form action="{{route('admin.tags.destroy', $tag->id)}}" method="POST">
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