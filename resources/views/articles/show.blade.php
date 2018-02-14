@extends ('layout')

@section('content')

    <h1> {{ $article->title }} </h1>

    <p> {{ $article->content }} </p>

    @include ('layouts.comments')

@endsection

@section ('footer')
footer test
@endsection
