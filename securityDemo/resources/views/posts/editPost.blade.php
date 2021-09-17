@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card-header">{{ __('Edit Post') }}</div>
    <form action="{{ route('updatePost', $post->id) }}" method="PUT" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" id="title" placeholder="Enter Title" value="{{$post->title}}">
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea class="form-control" name="content" id="content" rows="3">{{$post->content}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
