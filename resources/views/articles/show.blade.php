@extends ('layout')

@section('content')

<<<<<<< HEAD
  <h1>{{ $article->id }} {{ $article->title }} </h1>
=======
    <h1> {{ $article->title }} </h1>
>>>>>>> Comments

    <p> {{ $article->content }} </p>

    @include ('layouts.comments')

    @include ('layouts.commentform')

  @include ('layouts.comments')

@endsection

@section ('footer')
footer test
@endsection
