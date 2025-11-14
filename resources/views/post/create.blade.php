@extends('layouts.app')

@section('title', 'post')

@section('head', 'Посты')

@section('content')
    <div class='container'>
        <div class="row">
            <form action="{{ route('post.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" name="title" class="form-control" id="title" placeholder="Title">
                    <p></p>
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label">Content</label>
                    <textarea class="form-control" name="content" id="content" placeholder="Content"></textarea>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="text" name="image" class="form-control" id="image" placeholder="Image">
                </div>
                <div class="mb-3">
                    <label for="category" class="form-label">Category</label>
                    <select class="form-select" name="category_id" id="category">
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->title }}</option>
                        @endforeach
                    </select>
                </div>
                @foreach($tags as $tag)
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="tags[]" value="{{ $tag->id  }}" id="checkDefault">
                        <label class="form-check-label" for="checkDefault">
                            {{ $tag->title }}
                        </label>
                    </div>
                @endforeach
                <button type="submit" class="btn btn-primary">Create</button>
            </form>
        </div>
    </div>
@endsection
