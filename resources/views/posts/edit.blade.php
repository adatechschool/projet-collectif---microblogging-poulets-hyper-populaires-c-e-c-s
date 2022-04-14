@extends("layouts.app")
@section("title", "Créer un post")
@section("content")

	<h1>Créer un post</h1>

	<!-- Le formulaire est géré par la route "posts.store" -->
	<form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data" >

		<!-- Le token CSRF -->
		@csrf
		
		<p>
			<label for="title" >Titre</label><br/>
			<input type="text" name="title" value="{{ old('title') }}"  id="title" placeholder="Le titre du post" >

			<!-- Le message d'erreur pour "title" -->
			@error("title")
			<div>{{ $message }}</div>
			@enderror
		</p>
		<p>
			<label for="img_url" >Couverture</label><br/>
			<input type="file" name="img_url" id="img_url" >

			<!-- Le message d'erreur pour "picture" -->
			@error("img_url")
			<div>{{ $message }}</div>
			@enderror
		</p>
		<p>
			<label for="description" >Description</label><br/>
			<textarea name="description" id="description" lang="fr" rows="10" cols="50" placeholder="La description du post" >{{ old('description') }}</textarea>

			<!-- Le message d'erreur pour "content" -->
			@error("description")
			<div>{{ $message }}</div>
			@enderror
		</p>

		<input type="submit" name="valider" value="Valider" >

	</form>

@endsection