<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;
    // protected $table = "categories";
    protected $primaryKey = "id";
    protected $fillable = ['libelle'];
    public $timestamps = false;


    public function categorie(){
        return $this->hasMany(Jeu::class);
    }
}
