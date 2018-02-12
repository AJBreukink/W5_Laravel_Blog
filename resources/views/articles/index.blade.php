<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->

    </head>
    <body>

       <h1> Blog posts</h1>
<ul>
       @foreach ($articles as $article)

      <li> <a href="/articles/{{$article ->id}}">{{ $article->title }} </a></li>
      @endforeach
    </ul>
    </body>
</html>
