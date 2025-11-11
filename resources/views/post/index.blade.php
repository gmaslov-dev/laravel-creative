@extends('layouts.app')

@section('title', 'post')

@section('head', 'Посты')

@section('content')
    <div class='container'>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>

            </tr>
            </thead>
            <tbody>
            @foreach($posts as $post)
            <tr>
                <th scope="row">{{ $post->id }}</th>
                <td><a href="{{ route('post.show', $post->id) }}">{{ $post->title }}</a></td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
