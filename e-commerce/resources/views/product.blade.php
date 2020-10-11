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
        <p>Catégorie : Console</p>
        <div id="prix">
            <p>Price : {{$product[0]->price}} €</p>
            <form action="{{action('ProductController@bangbang')}}" method="post">
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