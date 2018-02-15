<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Article;

use App\Category;
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

}
