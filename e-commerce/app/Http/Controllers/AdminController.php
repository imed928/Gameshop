<?php

namespace App\Http\Controllers;

use App\Model\product;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function admin()
    {
        return view('admin.admin');
    }

    public function addProduct(Request $request)
    {
        $post = new product();

        $post->name = $request->get('title');
        $post->description = $request->get('description');
        $post->stock = $request->get('stock');
        $post->url_image = $request->get('photo');
        $post->price = $request->get('prix');

        $post->save();
        return redirect('/admin');
    }

    public function updateStock(Request $request)
    {
        $product = $product::find($request->get('id'));

        if ($request->get('stock') != NULL)
        {
            $product->stock = $request->get('stock');
        }
        $product->save();
        return redirect()->back();
    }
    public function see(Request $request)
    {
        return view('admin');
    }
}
