<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Http\Requests\ArticleRequest;

/**
 * Class ArticleController
 * @package App\Http\Controllers
 */
class ArticleController extends Controller
{
    /**
     * Paginació
     */
    public function index()
    {
        $userId = auth()->id(); // Obté el ID del usuari que esta actualment autenticat
        $articles = Article::where('user_id', $userId)->paginate(5);

        return view('article.index', compact('articles'))
            ->with('i', (request()->input('page', 1) - 1) * $articles->perPage());
    }

    /**
     * Mostrem artcles creats
     */
    public function create()
    {
       $article = new Article();
        return view('article.create', compact('article'));
      
    }

    /**
     * Almacenar l'article que creem
     */
    public function store(ArticleRequest $request)
    {
       // Article::create($request->validated());

       $article = new Article();
       $article->articles = $request->validated()['articles'];
       $article->user_id = auth()->id();
       $article->save();

        return redirect()->route('articles.index')
            ->with('success', 'Article creat');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $article = Article::find($id);

        return view('article.show', compact('article'));
    }

    /**
     * Mostrar la modificació de l'article
     */
    public function edit($id)
    {
        $article = Article::find($id);

        return view('article.edit', compact('article'));
    }

    /**
     * Modificar l'article
     */
    public function update(ArticleRequest $request, Article $article)
    {
        $article->update($request->validated());

        return redirect()->route('articles.index')
            ->with('success', 'Article modificat');
    }

    public function destroy($id)
    {
        Article::find($id)->delete();

        return redirect()->route('articles.index')
            ->with('success', 'Article eliminat');
    }
}
