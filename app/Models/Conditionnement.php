<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conditionnement extends Model
{
    use HasFactory;
    protected $table = "conditionnement";
    protected $primaryKey = "id";
    public $timestamps = false;
    protected $fillable = ['nom'];
    protected $fillable_desc = array('desc');

}
