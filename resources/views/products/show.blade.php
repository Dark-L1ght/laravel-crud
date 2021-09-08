@extends('products.layout')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h2>Show Product</h2>
        </div>
        <div class="float-right">
            <a class="btn btn-primary" href="{{ route('products.index') }}">Back</a>
        </div>
    </div>
</div>

<div class="row">
    <div class ="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nama :</strong>
            {{ $product->name }}
        </div>
    </div>
    <div class="col-xs col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Harga :</strong>
            {{ $product->price }}
        </div>
    </div>
    <div class="col-xs col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Stock :</strong>
            {{ $product->stock }}
        </div>
    </div>
    <div class="col-xs col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Detail :</strong>
            {{ $product->detail }}
        </div>
    </div>
</div>
@endsection