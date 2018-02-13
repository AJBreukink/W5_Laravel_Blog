@extends ('layout')

@section ('content')

            @foreach ($articles as $article)

            <h2> <a href="/articles/{{$article ->id}}">{{ $article->title }} </a></h2>
            @endforeach

@endsection

  @section ('footer')
           footer
@endsection
