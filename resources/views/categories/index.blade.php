@extends ('layout')

@section ('content')

            @foreach ($categories as $category)

{{ $category->name }}  

            @endforeach

@endsection

  @section ('footer')
           footer
@endsection
