<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Categorie;
use App\Models\Conditionnement;
use App\Models\Couleur;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all()->where('quantite_stock','<=', 5);
        $countArticles = count($articles);
        return view('dashboard.index', ['articles' => $articles, 'countArticles' => $countArticles]);
    }
}
