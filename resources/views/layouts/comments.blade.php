<div class='comments'>

  <ul class="list-group">

    @foreach($article->comments as $comment)

      <li class="list-group-item">

        <em>An anonymous reader: </em>

        {{$comment->content}}

      </li>

    @endforeach

  </ul>
</div>
