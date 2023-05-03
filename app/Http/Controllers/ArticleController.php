<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Categorie;
use App\Models\Conditionnement;
use App\Models\Couleur;
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
        $conditionnements = Conditionnement::all();
        $couleurs = Couleur::all();


        return view('articles.create', ['categories' => $categories, 'conditionnements' => $conditionnements, 'couleurs' => $couleurs]);
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

            $photo = $request->input('photo');
            if (!isset($photo) || $photo == "") {
                $photo = "defaut.jpg";
            }
            $articles = $this->createNewArticle(
                $request->input('nom'),
                $photo,
                $request->input('prix'),
                $request->input('quantite_stock'),
                $request->input('selection')
            );

            $articles->categorie()->associate($request->input('categorie'));
            $articles->conditionnement()->associate($request->input('conditionnement'));
            $articles->couleur()->associate($request->input('couleur'));

            $articles->save();

            return redirect()->route('articles.index');
            dd($request);
        } else {
            return redirect()->back();
        }
    }

    public function createNewArticle($nom, $photo, $prix, $quantite_stock, $selection)
    {
        $article = new Article();
        $article->photo = $photo;
        $article->nom = $nom;
        $article->prix = $prix;
        $article->quantite_stock = $quantite_stock;
        $article->selection = $selection;

        return $article;
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
        $couleur = $articles->couleur;
        $conditionnement = $articles->conditionnement;
        // dd($jeu);
        return view('articles.show', ['id' => $id, 'articles' => $articles, 'categorie' => $categorie, 'couleur' => $couleur, "conditionnement" => $conditionnement]);

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
            $articles = Article::find($id);
            $articles->nom = $request->input('nom');
            $articles->quantite_stock = $request->input('quantite_stock');
            $articles->save();
            return redirect()->route('articles.index');
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
