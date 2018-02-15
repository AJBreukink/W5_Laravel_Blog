<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Article;

class ArticlesController extends Controller
{

    public function index() {

    $articles = Article::published()->get();

    return view('articles.index', compact('articles'));
  }

    public function show(Article $article) {

    return view('articles.show', compact('article'));
  }

    public function create() {

<<<<<<< HEAD
  return view('admin.form');
}
public function store() {
$this->validate(request(), [
'title'=> 'required',
'content'=> 'required'
  
]);

//creat a new article using request data
$article = new Article;
$article->title = request('title');
$article->content = request('content');
=======
    return view('admin.form');
  }
>>>>>>> Comments

    public function store() {

      $this->validate(request(),[

        'title' => 'required',
        'content' => 'required'

      ]);
      //creat a new article using request data
      $article = new Article;
      $article->title = request('title');
      $article->content = request('content');

      //save it to the database
      $article->save();

      //redirect to home page
      return redirect('/');
    }
}
