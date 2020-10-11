<?php

namespace App\Http\Controllers;

use App\Model\product;
use App\Model\users;
use Illuminate\Http\Request;

class CatalogueController extends Controller
{
    //
    public function see()
    {
        $products = new product();

        $all_product = $products::all();

        return view('catalogue.see')->withProducts($all_product);
    }

    public function index(product $product)
    {
        dd($product);
    }

    public function store(Request $request)
    {
        dd($request->get('name'));
    }
}
