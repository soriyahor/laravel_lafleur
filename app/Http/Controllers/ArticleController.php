<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Categorie;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all();
        return view('articles.index', ['articles' => $articles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $categories = Categorie::all();

        return view('articles.create', ['categories' => $categories]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->validate([
            'nom' => 'required|string|max:45|min:4'
        ])) {
        
            $articles = new Article();
            $articles->nom = $request->input('nom');
            $articles->prix = 10;
            $articles->quantite_stock = 100;
            $articles->selection = 0;
            $articles->categorie()->associate($request->input('categorie'));
            $articles->conditionnement()->associate(1);
            $articles->couleur()->associate(1);
            $articles->save();
            
            return redirect()->route('articles.index');
            dd($request);
        } else {
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $articles = Article::find($id);
        $categorie = $articles->categorie;
        // dd($jeu);
        return view('articles.show', ['id' => $id, 'articles' => $articles, 'categorie' => $categorie]);

        // return view('articles.show', compact('jeu', 'categorie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $articles = Article::find($id);
        return view('articles.edit', ['id' => $id, 'articles' => $articles]);
    }

    public function update(Request $request, $id)
    {
        if ($request->validate([
            'nom' => 'required|string|max:45|min:5'
        ])) {

            $nom = $request->input('nom');
            $articles = Article::find($id);
            $articles->nom = $nom;
            $articles->save();
            return redirect()->route('articles.index');
            dd($articles->nom);
        } else {
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        Article::destroy($id);
        return redirect()->route('articles.index');
    }
}
