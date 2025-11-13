@extends('layouts.app')

@section('title', 'post')

@section('head', $post->title)

@section('content')
    <div class='container'>
        <div class="row">
            <div class="col">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Title</th>
                        <th scope="col">Content</th>
                        <th scope="col">Image</th>
                        <th scope="col">Likes</th>
                        <th scope="col">Category</th>
                        <th scope="col">Tags</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">{{ $post->id }}</th>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->content }}</td>
                        <td>{{ $post->image }}</td>
                        <td>
                            @if (!$post->likes)
                                {{ 0 }}
                            @else
                                {{$post->likes}}
                            @endif
                        </td>
                        <td>{{ $post->category->title }}</td>
                        <td>
                            @foreach($tags as $tag)
                                {{ $tag->title }}
                            @endforeach
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-3 d-flex flex-row justify-content-between">
                <a class="btn btn-primary" href="{{ route('post.index') }}">Back</a>
                <form action="{{ route('post.delete', $post->id) }}" method="post">
                    @csrf
                    @method('delete')
                    <input type="submit" class="btn btn-primary" value="Delete">
                </form>
                <a class="btn btn-primary" href="{{ route('post.edit', $post->id) }}">Edit</a>
            </div>
        </div>
    </div>
@endsection
