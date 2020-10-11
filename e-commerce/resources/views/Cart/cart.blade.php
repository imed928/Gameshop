@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form class="card">
                    <form class="box"">
                    <img id="imgo" src="https://i.pinimg.com/originals/7a/f8/81/7af881beae40f40fa9827d73dd267214.png">
                    <h1 class="col-md-5 offset-md-5" id="white-text">Cart</h1>
                    <table>
                        <thead>
                        <tr>
                            <th colspan="1">Image</th>
                            <th colspan="1">Nom article</th>
                            <th colspan="1">Prix</th>
                            <th colspan="1">Remove</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $somme = 0; $qte = 1; ?>

@foreach($paniers as $panier)
                        <tr>
                            <td id="white-text"><img src="{{$panier->produit[0]->url_image}}" style="width: 50%"></td>
                            <td id="white-text">{{$panier->produit[0]->name}}</td>
                            <td id="white-text">{{$panier->produit[0]->price}} €</td>
                            <td>
                                <form action="{{action('CartController@removeproduct')}}" method="post">
                                    @csrf
                                    <input type="number" value="{{$panier->id}}" hidden name="id" id="id">
                                    <button onclick="location.href = '/cart';" id="lebouton-rouge" type="submit">Remove</button>
                                </form>
                            </td>
                        </tr>
                        <?php $somme += $panier->produit[0]->price * $qte;?>
@endforeach
                        </tbody>
                        <tfoot>
                        <?php
                        echo "<tr><th> Prix Total : $somme €</th><th></th></tr>";
                        ?>
                        </tfoot>
                        <tr> </tr>
</table>
    </form>
    </div>
    </div>
    </div>
@endsection