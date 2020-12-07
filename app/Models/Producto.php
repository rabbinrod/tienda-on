<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'categoria', 'cantidad', 'precio', 'imagen', 'consencionado',
    ];

    public function users(){
        return $this->belongsTo('App\Models\User');
    }
}
