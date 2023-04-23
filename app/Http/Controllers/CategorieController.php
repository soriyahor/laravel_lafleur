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
        
        return view('categories.create');

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
        
            $categories = new Categorie();
            $categories->nom = $request->input('nom');
            
            $categories->save();
            
            return redirect()->route('categories.index');
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
        $categories = Categorie::find($id);
       
        // dd($jeu);
        return view('categories.show', ['id' => $id, 'categories' => $categories]);

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
        $categories = Categorie::find($id);
        return view('categories.edit', ['id' => $id, 'categories' => $categories]);
    }

    public function update(Request $request, $id)
    {
        if ($request->validate([
            'nom' => 'required|string|max:45|min:5'
        ])) {

            $nom = $request->input('nom');
            $categories = Categorie::find($id);
            $categories->nom = $nom;
            $categories->save();
            return redirect()->route('categories.index');
            dd($categories->nom);
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

        Categorie::destroy($id);
        return redirect()->route('categories.index');
    }
}
