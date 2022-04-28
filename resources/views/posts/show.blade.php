@extends("layouts.app")
@section("title", $post->title)
@section("content")

	<h1>{{ $post->title }}</h1>

	<img src="{{ str_starts_with($post->img_url, "http") ? $post->img_url : asset('storage/'.$post->img_url); }}" alt="Image de couverture" style="max-width: 300px;">

	<div>{{ $post->description }}</div>
	<p>{{$user->name}}</p>

	<p><a href="{{ route('posts.index') }}" title="Retourner aux articles" >Retourner aux posts</a></p>

@endsection
