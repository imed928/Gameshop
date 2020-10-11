@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
<body>
<form action="action_page.php">
</form>
<div class="card">
    <form class="box" method="post" action="{{action('AdminController@addProduct')}}">

        {{csrf_field()}}
        <div>
            <img id="imgo" src="https://i.pinimg.com/originals/7a/f8/81/7af881beae40f40fa9827d73dd267214.png">
        </div>
        <div class="col-md-6 offset-md-4" id="white-text">
            <h1>Add a product</h1>
        </div>
        <div class="card-body">
        <div class="form-group row">
            <label for="name" class="col-sm-4 col-form-label text-md-right" id='white-text'>{{ __('Product title') }}</label>
            <div class="col-md-6">
                <input id="name" type="text" name="title" value="" required="required" autofocus="autofocus" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="name" class="col-sm-4 col-form-label text-md-right" id='white-text'>{{ __('Description') }}</label>
            <div class="col-md-6">
                <input id="name" type="text" name="description" value="" required="required" autofocus="autofocus" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="name" class="col-sm-4 col-form-label text-md-right" id='white-text'>{{ __('Stock') }}</label>
            <div class="col-md-6">
                <input id="name" type="number" min="0" name="stock" value="" required="required" autofocus="autofocus" class="form-control">
        </div>
        </div>
        <div class="form-group row">
            <label for="name" class="col-sm-4 col-form-label text-md-right" id='white-text'>{{ __('Image URL') }}</label>
            <div class="col-md-6">
                <input id="name" type="text" name="photo" value="" required="required" autofocus="autofocus" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="name" class="col-sm-4 col-form-label text-md-right" id='white-text'>{{ __('Prix') }}</label>
            <div class="col-md-6">
                <input id="name" type="number" min="0" name="prix" value="" required="required" autofocus="autofocus" class="form-control">
            </div>
        </div>
        <div class="col-md-6 offset-md-4">
            <button type="submit" name="addButton" class="btn btn-primary">
                    Add
            </button>
        </div>
        </div>
    </form>
</div>
</body>
</div>
@endsection