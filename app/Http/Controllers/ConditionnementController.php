<?php

namespace App\Http\Controllers;

use App\Models\Conditionnement;
use Illuminate\Http\Request;

class ConditionnementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $conditionnements = Conditionnement::all();
        return view('conditionnements.index', ['conditionnements' => $conditionnements]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('conditionnements.create');

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
        
            $conditionnements = new Conditionnement();
            $conditionnements->nom = $request->input('nom');
            
            $conditionnements->save();
            
            return redirect()->route('conditionnements.index');
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
        $conditionnements = Conditionnement::find($id);
       
        // dd($jeu);
        return view('conditionnements.show', ['id' => $id, 'conditionnements' => $conditionnements]);

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
        $conditionnements = Conditionnement::find($id);
        return view('conditionnements.edit', ['id' => $id, 'conditionnements' => $conditionnements]);
    }

    public function update(Request $request, $id)
    {
        if ($request->validate([
            'nom' => 'required|string|max:45|min:5'
        ])) {

            $nom = $request->input('nom');
            $conditionnements = Conditionnement::find($id);
            $conditionnements->nom = $nom;
            $conditionnements->save();
            return redirect()->route('conditionnements.index');
            dd($conditionnements->nom);
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

        Conditionnement::destroy($id);
        return redirect()->route('conditionnements.index');
    }
}
