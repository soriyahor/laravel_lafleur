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
    protected $fillable = ['titre'];
    protected $fillable_desc = array('desc');

    public function categorie(){
        return $this->belongsTo(Categorie::class);

    }

    public function tags(){
        return $this->belongsToMany(Tag::class, 'pivot_tags');
    }
}
