@extends('layouts.app')

@section('content')

@foreach($products as $product)
    <div id="tqt">
        <div class="col-md-6 offset-md-3" id="white-text">
         <h1>{{$product->name}}</h1>
            <img src="{{$product->url_image}}"></img>
            <p>Description : {{$product->description}}</p>
            <p>Price : {{$product->price}}</p>
            <p>Stock : {{$product->stock}}</p>
            <form action="{{action('ProductController@bangbang')}}" method="post">
                @csrf
                <input type="number" value="{{$product->id}}" hidden name="id" id="id">
                <button id="lebouton" type="submit" >Add To Card</button>
                <button onclick="location.href = 'product/{{$product->id}}';" id="lebouton-rouge" type="button">Description!</button>
            </form>
        </div>
    </div>
@endforeach

@endsection