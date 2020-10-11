<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $table = 'product';

    public function Categorie ()
    {
        return $this->hasOne('app/Model/categorie');
    }

    public function Cart ()
    {
        return $this->belongsToMany('App\Model\cart');
    }
}
