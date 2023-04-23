<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Loterie;
use App\Models\CommandeClient;
use App\Models\Livraison;
use App\Models\Client;
use App\Models\LigneCommandeClient;
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
        $lignesCommande = LigneCommandeClient::where('commande_clt_id', $id)->get();

        $total = 0;

        foreach ($lignesCommande as $ligneCommande) {
            $total += $ligneCommande->prix;
        }
        $total = number_format($total, 2);
        // dd($jeu);
        return view('commandes_client.show', 
        ['id' => $id, 'commandeClient' => $commandesClient, 'lignesCommandeClient' => $lignesCommande, 'total' => $total]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $etatsCommande = ['payé','annulée'];
        $etatsLivraison = ['en cours de livraison','livré'];

        $commandeClient = CommandeClient::find($id);
        $etatLivraison = $commandeClient->livraison()->first()->etat_livraison;
        return view('commandes_client.edit', [
            'etatsCommande' => $etatsCommande,
         'commandeClient' => $commandeClient,
          'etatLivraison' => $etatLivraison,
          'etatsLivraison' => $etatsLivraison]);

    }

    public function update(Request $request, $id)
    {
        $commandeClient = CommandeClient::find($id);
        $commandeClient->etat_commande =  $request->input('etatCommande');
        $livraison = $commandeClient->livraison()->first();
        $livraison->etat_livraison =  $request->input('etatLivraison');
        $livraison->save();
        $commandeClient->save();
        return redirect()->route('commandes_client.index');
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
