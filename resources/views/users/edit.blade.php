@extends("layouts.app")
@section("title", "Editer un post")
@section("content")

	<h1>Editer un user</h1>

	<!-- Si nous avons un Post $post -->
	@if (isset($user))

	<!-- Le formulaire est géré par la route "posts.update" -->
	<form method="POST" action="{{ route('users.update', $user) }}" enctype="multipart/form-data" >

		<!-- <input type="hidden" name="_method" value="PUT"> -->
		@method('PUT')

	@else

	<!-- Le formulaire est géré par la route "posts.store" -->
	<form method="POST" action="{{ route('users.store') }}" enctype="multipart/form-data" >

	@endif

		<!-- Le token CSRF -->
		@csrf
		
		<p>
			<label for="title" >Titre</label><br/>

			<!-- S'il y a un $post->title, on complète la valeur de l'input -->
			<input type="text" name="title" value="{{ isset($user->name) ? $user->name : old('name') }}"  id="name" placeholder="Jean Forgeron" >

			<!-- Le message d'erreur pour "title" -->
			@error("name")
			<div>{{ $message }}</div>
			@enderror
		</p>

		<p>
			<label for="biography" >Biographie</label><br/>

			<!-- S'il y a un $post->content, on complète la valeur du textarea -->
			<textarea name="biography" id="biography" lang="fr" rows="10" cols="50" placeholder="Ma vie, mon œuvre" >{{ isset($user->biography) ? $user->biography : old('biography') }}</textarea>

			<!-- Le message d'erreur pour "content" -->
			@error("biography")
			<div>{{ $message }}</div>
			@enderror
		</p>

		<input type="submit" name="valider" value="Valider" >

	</form>

@endsection
