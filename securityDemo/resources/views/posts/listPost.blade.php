@extends('layouts.app')

@section('content')
<div class="container">
    <a href="{{ route('createPost') }}" class="btn btn-primary mb-2"><i class="fas fa-plus"></i>Add Post</a>
    <div class="card-header">{{ __('List Post') }}</div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Title</th>
                <th scope="col">Content</th>
                <th scope="col">Handle</th>
            </tr>
        </thead>
        <tbody>
            @foreach($list_posts as $key => $post)
            @can('view',$post)
                <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->content }}</td>
                    <td>
                        <form action="{{ route('deletePost', $post->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                        <a href="{{ route('editPost', $post->id) }}" class="btn btn-info">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection