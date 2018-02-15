@extends ('layout')

@section ('content')

            @foreach ($articles as $article)

            <h2> <a href="/articles/{{$article ->id}}">{{ $article->title }} </a>  </h2>
            <!-- @foreach ($article->articles_category as $articles_category)
            Category: {{ $articles_category->id }}
            @endforeach -->
            Category:
            @foreach ($article->articles_category as $a_category)
             {{ $a_category->category->name }}
            @endforeach

            @endforeach

@endsection

  @section ('footer')
           footer
@endsection
