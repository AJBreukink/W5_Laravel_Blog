<br><hr>
<form method="POST" action="/articles/{{ $article->id }}/comments">

    {{ csrf_field() }}

    <div class="form-group">
        <textarea class="form-control" name="content" rows="1" placeholder="Share your Thoughts..."></textarea>
    </div>

    <div class="form-group">
      <button type="submit" class="btn btn-primary">Add Comment</button>
    </div>
</form>
