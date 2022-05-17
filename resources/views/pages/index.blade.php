@extends('layouts.app')

@section('content')
<div class="container">
  <div>
    <a href="/create">Create Article</a>
  </div>
  <br>
  <br>
  <div class="articles">
    @foreach($articles as $article)
      <div>
        <a href={{ '/view/'.$article->id }}>
          <h1>{{ $article->title }}</h1>
          <p>{{ $article->content }}</p>
        </a>
        <div>
          <a href={{ '/edit/'.$article->id }}>Edit</a>
          <form action={{ '/delete/'.$article->id }} method="post">
            @csrf
            <button type="submit">Delete</button>
          </form>
        </div>
      </div>
    @endforeach
  </div>
</div>
@endsection