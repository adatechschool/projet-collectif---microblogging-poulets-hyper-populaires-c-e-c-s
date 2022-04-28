@extends("layouts.app")
@section("title", $post->title)
@section("content")

	<div id="details">
	<h1>{{ $post->title }}</h1>	
	
	<form role="form" action="{{ url('/likes') }}" method='POST'>
		{!! csrf_field() !!}
		<input type="hidden" name="like" value='{{$post->id}}'>
		<div style="margin-right:20px;">
		<x-button  >
						 {{ __('Incocoricroyable !') }}
	   </x-button>
	 
	   <p>    🤳  {{$post->likes->count()}}</p>
	   </div>
	 </form>


	<img src="{{ str_starts_with($post->img_url, "http") ? $post->img_url : asset('storage/'.$post->img_url); }}" alt="Image de couverture" style="max-width: 300px;">


	<div>{{ $post->description }}</div>
	<p>{{$user->name}}</p>


	<p><a href="{{ route('posts.index') }}" title="Retourner aux articles" >Retourner aux posts</a></p>
	</div>
@endsection
