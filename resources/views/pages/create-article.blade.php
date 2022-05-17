@extends('layouts.app')

@section('content')
<div class="container">
  <form action="/create" method="post">
    @csrf
    <h1>Create an article</h1>
    <input style="display:block; width: 100%" type="text" name="title" id="title" placeholde="Enter title">
    <br>
    <textarea style="display:block; width: 100%" name="content" id="content" placeholder="Enter content"></textarea>
    <br>
    <button type="submit">Post</button>
  </form>
</div>
@endsection
