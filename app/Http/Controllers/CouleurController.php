<?php

namespace App\Http\Controllers;

use App\Models\Couleur;
use Illuminate\Http\Request;

class CouleurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $couleurs = Couleur::all();
        return view('couleurs.index', ['couleurs' => $couleurs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('couleurs.create');

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
        
            $couleurs = new Couleur();
            $couleurs->nom = $request->input('nom');
            
            $couleurs->save();
            
            return redirect()->route('couleurs.index');
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
        $couleurs = Couleur::find($id);
       
        // dd($jeu);
        return view('couleurs.show', ['id' => $id, 'couleurs' => $couleurs]);

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
        $couleurs = Couleur::find($id);
        return view('couleurs.edit', ['id' => $id, 'couleurs' => $couleurs]);
    }

    public function update(Request $request, $id)
    {
        if ($request->validate([
            'nom' => 'required|string|max:45|min:5'
        ])) {

            $nom = $request->input('nom');
            $couleurs = Couleur::find($id);
            $couleurs->nom = $nom;
            $couleurs->save();
            return redirect()->route('couleurs.index');
            dd($couleurs->nom);
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

        Couleur::destroy($id);
        return redirect()->route('couleurs.index');
    }
}
