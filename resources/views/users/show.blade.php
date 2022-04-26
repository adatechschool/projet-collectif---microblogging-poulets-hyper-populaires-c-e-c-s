<x-guest-layout>
    {{$user->name}}:
    {{$user->biography}}
</x-guest-layout>

<div class="container">
   @foreach($data as $posts)
      <h2>{{ $posts->title }}</h2><hr>
      <p>{{ $posts->description }}</p>
      <p>Posted by: {{ $posts->user_id }}</p>
    @endforeach
</div>
