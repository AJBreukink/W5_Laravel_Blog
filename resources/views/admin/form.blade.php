
@extends ('layout')

@section ('content')

@include ('layouts.errors')

<form method="POST" action="/articles">
    {{ csrf_field() }}

    <div class="form-group">
      <label for="article_title"> Article Title </label>
      <input type="text" name="title" class="form-control" id="article_title" aria-describedby="articleHelp" placeholder="Enter post title">
      <small id="articleHelp" class="form-text text-muted">Give your post a catchy name</small>
  </div>

    <div class="form-group">
        <label for="article_content"> Article Content </label>
        <textarea class="form-control" name="content" rows="5" id="article_content"></textarea>
    </div>


  <!-- <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div> -->
    <div class="form-group">
      <button type="submit" class="btn btn-primary">Publish</button>
    </div>
</form>
@endsection
