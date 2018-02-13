@extends ('layout')

@section ('content')
       <h1> Blog posts</h1>
        <ul>
            @foreach ($articles as $article)

            <li> <a href="/articles/{{$article ->id}}">{{ $article->title }} </a></li>
            @endforeach
          </ul>
@endsection

  @section ('footer')
           footer
@endsection
