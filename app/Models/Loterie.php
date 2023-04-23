<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loterie extends Model
{
    use HasFactory;
    protected $table = "loterie";
    protected $primaryKey = "id";
    public $timestamps = false;
    protected $fillable = ['produit', 'quantite_restant', 'evenement'];
    protected $fillable_desc = array('desc');
}
