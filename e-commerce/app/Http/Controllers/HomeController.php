<?php

namespace App\Http\Controllers;

use App\Model\categorie;
use App\Model\product;
use App\Model\cart;
use App\Model\users;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $imed = new users();

        $skandar = $imed->find(1);
        //dd($skandar->cart);
        //return redirect()->action('CatalogueController@see');
        return redirect()->action('CatalogueController@see');
    }

    public function see()
    {
        return view('home');
    }
}
