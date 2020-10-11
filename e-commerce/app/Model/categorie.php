<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class categorie extends Model
{
    protected $table = 'categorie';

    public function Produit ()
    {
        return $this->hasMany('app/Model/product');
    }
}
