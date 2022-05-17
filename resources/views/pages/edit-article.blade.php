@extends('layouts.app')

@section('content')
<div class="container">
  <form action="" method="post">
    @csrf
    <input class="display:block; width: 100%" type="text" name="title" value={{ $article->title }}>
    <br>
    <textarea name="content" style="display:block; width: 100%">
      {{ $article->content }}
    </textarea>
    <br>
    <button type="submit">Update</button>
  </form>
</div>
@endsection