@extends('layouts.app')

@section('title', 'post')

@section('head', 'Пост')

@section('content')
    <div class='container'>
        <div class="row">{{ $post->id }}</div>
        <div class="row">{{ $post->title }}</div>
        <div class="row">{{ $post->content }}</div>
        <div class="row">{{ $post->image }}</div>
{{--        <div class="row">{{ $post->category }}</div>--}}
    </div>
    <div class="container">
        <div class="row">
            <div class="col-1"><a href="{{ route('post.index') }}">Back</a></div>
            <form action="{{ route('post.delete', $post->id) }}" method="post">
                @csrf
                @method('delete')
                <input type="submit" value="delete">
            </form>
            <div class="col-1"><a href="{{ route('post.edit', $post->id) }}">Edit</a></div>
        </div>
    </div>
@endsection
