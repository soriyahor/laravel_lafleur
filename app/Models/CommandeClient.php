<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommandeClient extends Model
{
    use HasFactory;
    protected $table = "commande_clt";
    protected $primaryKey = "id";
    public $timestamps = false;
    protected $fillable = ['date_commande','etat_commande'];
    protected $fillable_desc = array('desc');

    public function client(){
        return $this->belongsTo(Client::class);

    }

    public function livraison(){
        return $this->belongsTo(Livraison::class);

    }

    public function loterie(){
        return $this->belongsTo(Loterie::class);

    }
}
