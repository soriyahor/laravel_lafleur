<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LigneCommandeClient extends Model
{
    use HasFactory;
    protected $table = "ligne_commande_clt";
    public $timestamps = false;
    protected $fillable = ['quantite', 'nom_article', 'prix'];
    protected $fillable_desc = array('desc');

    public function article(){
        return $this->belongsTo(Article::class);

    }

    public function commandeClient(){
        return $this->belongsTo(CommandeCLient::class);

    }
}
