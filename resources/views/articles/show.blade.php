@extends ('layout')

@section('content')

  <h1> {{ $article->title }} </h1>

  <p> {{ $article->content }} </p>

@endsection

@section ('footer')
footer
@endsection
