<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Blog</title>
    <link rel="stylesheet" href="{{ elixir('css/app.css') }}" >
<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    </head>



  <body>

      <div class="container">
      @include ('layouts.header')

          <div class="jumbotron">
            <h1>Blog week 5</h1>


          </div>

          <div class="row ">
                <div class="col-md-9">
                  @yield('content')
              </div>

              <div class="col-md-3">
                @include ('layouts.sidebar')
              </div>

          </div>
      


          @include ('layouts.footer')
    </div> <!-- /container -->


  </body>
</html>
