@extends('layouts.app')

@section('content')
    
<div class="container">
    <div class="card">
        <div class="card-header">
            <h1>Categories</h1>
        </div>
        <div class="card-body">
          <div class="mb-3">
            <a href="{{route('admin.categories.create')}}" class="btn btn-success">Insert New Category</a>
            
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
                    @foreach ($categories as $category)
                        
                    <tr>
                    <td>{{$category->id}}</td>
                    <td>{{$category->title}}</td>
                    <td>{{$category->slug}}</td>
                    
                    <td>
                      <a class="btn btn-primary" href="{{route('admin.categories.show', $category->id)}}">Show</a>
                      <a href="{{route('admin.categories.edit', $category->id)}}" class="btn btn-warning">Edit Category</a>
                      <form action="{{route('admin.categories.destroy', $category->id)}}" method="POST">
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