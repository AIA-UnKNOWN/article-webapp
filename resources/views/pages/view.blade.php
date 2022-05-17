@extends('layouts.app')

@section('content')
<div class="container">
  <div>
    <h1>{{ $article->title }}</h1>
    <p>{{ $article->content }}</p>
    <hr>
    <span>{{ $article->created_at }}</span>
    <br>
    <a href={{ route('articles') }}>Back</a>
  </div>
</div>
@endsection