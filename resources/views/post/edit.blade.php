@extends('layouts.app')

@section('title', 'post')

@section('head', 'Посты')

@section('content')
    <div class='container'>
        <div class="row">
            <form action="{{ route('post.update', $post->id) }}" method="post">
                @csrf
                @method('patch')
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" name="title" class="form-control" id="title" value="{{ $post->title }}">
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label">Content</label>
                    <textarea class="form-control" name="content" id="content">{{ $post->content }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="text" name="image" class="form-control" id="image" value="{{ $post->image }}">
                </div>
                <div class="mb-3">
                    <label for="category" class="form-label">Category</label>
                    <select class="form-select" name="category_id" id="category">
                        @foreach($categories as $category)

                            <option
                                {{ $category->id == $post->category->id ? 'selected' : '' }}
                                value="{{ $category->id }}">{{ $category->title }}</option>
                        @endforeach
                    </select>
                </div>
                @foreach($tags as $tag)
                    <div class="form-check">
                        <input
                            @foreach($post->tags as $postTag)
                                {{ $tag->id == $postTag->id ? 'checked' : '' }}
                            @endforeach
                            class="form-check-input" type="checkbox" name="tags[]" value="{{ $tag->id  }}" id="checkDefault">
                        <label class="form-check-label" for="checkDefault">
                            {{ $tag->title }}
                        </label>
                    </div>
                @endforeach
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
            <a href="{{ route('post.show', $post->id) }}">Back</a>
        </div>
    </div>
@endsection
