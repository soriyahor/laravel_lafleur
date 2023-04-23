<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $table = "article";
    protected $primaryKey = "id";
    public $timestamps = false;
    protected $fillable = ['nom', 'prix', 'quantite_stock', 'selection', 'photo'];
    protected $fillable_desc = array('desc');

    public function conditionnement(){
        return $this->belongsTo(Conditionnement::class);

    }

    public function couleur(){
        return $this->belongsTo(Couleur::class);

    }

    public function categorie(){
        return $this->belongsTo(Categorie::class);

    }
}
