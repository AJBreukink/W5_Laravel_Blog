@extends ('layout')

@section('content')

  <h1>{{ $article->id }} {{ $article->title }} </h1>

  <p> {{ $article->content }} </p>

@endsection

@section ('footer')
footer test
@endsection
