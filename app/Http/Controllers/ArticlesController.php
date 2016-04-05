<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

use Request;

use App\Http\Requests;

use App\Article;


class ArticlesController extends Controller
{
    //
    
    public function index() {
        $articles = Article::latest()->get();
//        return $articles;
//        return  view('articles.index')->with('articles', $articles);
        return  view('articles.index', compact('articles'));
    }
    
    public function show($id) {
         $article = Article::findOrFail($id);
        
        
        return view('articles.show', compact('article'));
    }
    
    public function create() {
        
        return view('articles.create');
    }
    
    public function store() {
        $input = Request::all();
        
        Article::create($input);
        
//        return $input;
        
        return redirect('articles');
    }
}
