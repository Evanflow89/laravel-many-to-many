@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1>Insert New Post</h1>
            </div>
            <div class="card-body">
                <form action="{{route('admin.posts.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{old('title')}}">
                        @error('title')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="content">Content</label>
                        <textarea class="form-control @error('content') is-invalid @enderror" id="content" name="content" rows="10">{{old('content')}}</textarea>
                        @error('content')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="category">Category</label>
                        <select class="form-control" id="category" name="category_id">
                            <option value="">Select the Category</option>
                            @foreach ($categories as $category)
                                <option value="{{$category->id}}" {{old('category->id') == $category->id ? 'selected' : ''}}>{{$category->name}}</option>
                            @endforeach
                          </select>
                    </div>
                    <div class="form-group">
                        <p>Tags</p>
                        @foreach ($tags as $tag)
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="{{$tag->slug}}" value="{{$tag->id}}" name="tags[]" {{in_array($tag->id, old('tags', $postTags)) ? 'checked' : ''}}>
                            <label class="form-check-label" for="{{$tag->slug}}">{{$tag->name}}</label>
                          </div>
                        @endforeach
                       
                       
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input @error('published') is-invalid @enderror" id="published" name="published" {{old('published') ? 'checked' : ''}}>
                        <label class="form-check-label" for="published">Publish</label>
                        @error('published')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Insert</button>
                </form>
            </div>
        </div>
    </div>
@endsection