@extends('layouts.app')

@section('content')
<body background="https://juegosrev.com/wp-content/uploads/2017/05/B1-WALL_3809.jpg?w=278&h=156">
<div class="col-md-6 offset-md-3">
<div class="produit" id="white-text">
    <fieldset class="ok">
        <img src="{{$product[0]->url_image}}" alt="pikachu">
    </fieldset>
    <div id="description">
        <h2>{{$product[0]->name}}</h2> <br>
        <h3>Description :</h3>
        <p>{{$product[0]->description}}</p>
        <p>En Stock : {{$product[0]->stock}}</p>
        @if(Auth::user()->type == "admin")
            <form method="POST" action="{{action('AdminController@updateStock')}}">
                {{ csrf_field() }}

                <input type="hidden" name="id" value="{{$product[0]->id}}">
                <p id="button" class="float-left"> Edit stock :  </p>
                <td><input type="number" name="stock" value="{{$product[0]->stock}}" required> </td>
                <td><input type="submit" class="button" value="update"></td>
            </form>
        @endif
        <p>Catégorie : Console</p>
        <div id="prix">
            <p>Price : {{$product[0]->price}} €</p>
            <form action="{{action('CartController@buy_it')}}" method="post">
                @csrf
                <input type="number" value="{{$product[0]->id}}" hidden name="id" id="id">
                <button id="lebouton-rouge" type="submit" >Add To Card</button>
            </form>
        </div>
    </div>
</div>
</div>
</body>

@endsection