<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Loterie;
use App\Models\CommandeClient;
use App\Models\Livraison;
use App\Models\Client;
use Illuminate\Http\Request;

class CommandeClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $commandesClient = CommandeClient::all();
        return view('commandes_client.index', ['commandesClient' => $commandesClient]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $commandesClient = CommandeClient::find($id);
        // dd($jeu);
        return view('commandes_client.show', 
        ['id' => $id, 'commandesClient' => $commandesClient]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    public function update(Request $request, $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
}
