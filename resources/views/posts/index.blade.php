@extends("layouts.app")

@section("title")
@section("content")

<h1>Tous les articles</h1>
<section>
<article>
	
<div id="right">
@foreach ($posts as $post)
	<div id="card">
	<h1>
		<!-- Lien pour afficher un Post : "posts.show" -->
	<a href="{{ route('posts.show', $post) }}" title="Lire l'article" >{{ $post->title }}</a>
</h1>
<img src="{{ str_starts_with($post->img_url, "http") ? $post->img_url : asset('storage/'.$post->img_url); }}" alt="Image de couverture" style="max-width: 300px;">

	<p>

		<!-- Lien pour modifier un Post : "posts.edit" -->
		<a href="{{ route('posts.edit', $post) }}" title="Modifier l'article" >Modifier</a>
		<!-- Formulaire pour supprimer un Post : "posts.destroy" -->
		<form method="POST" action="{{ route('posts.destroy', $post) }}" >
						<!-- CSRF token -->
						@csrf
						<!-- <input type="hidden" name="_method" value="DELETE"> -->
						@method("DELETE")
						<input type="submit" value="x Supprimer" >
					</form>
</p>
</div>
@endforeach

</div>

</article>

</section>
	<!-- Lien pour créer un nouvel article : "posts.create" -->
<a href="{{ route('posts.create') }}" title="Créer un article" >Créer un nouveau post</a>


@endsection


	
	