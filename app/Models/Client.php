<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $table = "client";
    protected $primaryKey = "id";
    public $timestamps = false;
    protected $fillable = ['nom', 'prenom', 'mail', 'tel'];
    protected $fillable_desc = array('desc');
}
