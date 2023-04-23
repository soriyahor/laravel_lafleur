<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Categorie::all();
        return view('categories.index', ['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categories.create', ['message' => "Cette page n'est pas encore développée"]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categories = Categorie::find($id);
        // dd($jeu);
        $jeux = $categories->jeux;
        return view('categories.show', ['id' => $id, 'categories' => $categories, 'jeux'=>$jeux]);
        // return view('categories.show')
        dd($jeux);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Categorie::find($id);
        return view('categories.edit', ['id' => $id, 'categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if ($request->validate([
            'libelle' => 'required|string|max:45|min:5'
        ])){
        $libelle = $request->input('libelle');
        $categorie = Categorie::find($id);
        $categorie->libelle = $libelle;
        $categorie->save();
        return redirect()->route('categories.index');
        dd($categorie->libelle);
    }else {
        return redirect()->back();
    }
    die;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Categorie::destroy($id);
        return redirect()->route('categories.index');
        //
    }
}
