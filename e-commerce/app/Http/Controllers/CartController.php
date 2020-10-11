<?php

namespace App\Http\Controllers;

use App\Model\cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function index($id)
    {
        $product = DB::select("SELECT * from product where id = '$id'");
        return view('product', ['product' => $product]);

    }

    public function buy_it(Request $request)
    {
        //$product = new product();
        $panier = new cart();
        $panier->produit_id = $request->get('id'); //sert à récuperer l'id du produit pour le mettre dans le panier
        $panier->users_id = Auth::user()->id; //un user en particulier met un produit dans son panier et pas a tout le monde
        $panier->quantity = $request->get('quantity'); // quantité de produit qu'on met dans le panier
        $panier->save(); //sauvegarder le panier
        //$product = DB::select("SELECT * from product where id = '$panier->produit_id'");
        return redirect('/cart');
    }

    public function removeproduct(Request $request)
    {
        $id = $request->get('id');
       // $panierrs = DB::delete("DELETE * FROM cart where id = '$id'");
        DB::table('cart')->delete($id);

        $panier = new cart();
        $paniers = $panier::all()->where('users_id','=',Auth::user()->id);

        return view('Cart.cart')->withPaniers($paniers);
    }

    public function see(Request $request)
    {
        $panier = new cart();
        $paniers = $panier::all()->where('users_id','=',Auth::user()->id);
        return view('Cart.cart')->withPaniers($paniers);
    }
}
