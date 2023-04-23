<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livraison extends Model
{
    use HasFactory;
    protected $table = "livraison";
    protected $primaryKey = "id";
    public $timestamps = false;
    protected $fillable = ['date_livraison','etat_livraison','numero_rue','rue','complement','code_postal','ville','prix'];
    protected $fillable_desc = array('desc');

}
