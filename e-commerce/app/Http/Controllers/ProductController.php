<?php

namespace App\Http\Controllers;
use Auth;
use App\Model\cart;
use App\Model\product;
use App\Model\users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function produit($id)
    {
        $product = DB::select("SELECT * from product where id = '$id'");
        return view('Product.product', ['product' => $product]);
    }

//   public function buy_it(Request $request)
//    {
//        $product = new product();
//        $panier = new cart();
//        $panier->produit_id = $request->get('id');
//        $panier->users_id = Auth::user()->id;
//        $panier->quantity = $request->get('quantity');
//        $panier->save();
//        $product = DB::select("SELECT * from product where id = '$panier->produit_id'");
//        return redirect('/catalogue');
//    }

    public function see()
    {
        $panier = new cart();
        $paniers = $panier::all()->where('users_id','=',Auth::user()->id);

        return view('Cart.cart')->withPaniers($paniers);
    }
}
