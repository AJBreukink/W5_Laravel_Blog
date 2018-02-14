<div class='comments'>

  <ul class="list-group">

    @foreach($article->comments as $comment)

      <li class="list-group-item">

        {{$comment->content}}

      </li>

    @endforeach

  </ul>
</div>
