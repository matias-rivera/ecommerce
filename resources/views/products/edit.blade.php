@extends('layouts.app')


@section('content')
    
<div class="container">
    <div class="card padding">
        <header>
            <h4>Product edit</h4>
            <p>{{$product->title}}</p>

        </header>
        

        <div class="card-body">
            @include('products.form')
        </div>

        
    </div>
</div>
@endsection