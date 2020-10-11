<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
    protected $table = 'cart';

    public function produit ()
    {

        return $this->hasMany('App\Model\product','id','produit_id'); //un panier has many de produit product
    }

    public function users ()
    {
        return $this->belongsTo('app/Model/users');
    }

}
