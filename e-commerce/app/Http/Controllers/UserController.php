<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 12/11/18
 * Time: 10:06
 */

namespace App\Http\Controllers;

use App\Model\users;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{


    public function see (Request $request)
    {
        dd($request->get('toto'));
        //return view('users.see');
    }

    public function index (users $users)
    {
        dd($users);
    }
}