@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="card padding">
            <header>
                <h2>My cart</h2>
            </header>
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <products-shopping-component></products-shopping-component>
                    </div>
                    <div class="col-12 col-md-6 payments">
                        <p>Checkout with Paypal</p>
                        <img src="https://www.paypalobjects.com/webstatic/en_US/i/buttons/checkout-logo-large.png" alt="" width="">
                        <img src="https://www.paypalobjects.com/webstatic/en_US/i/buttons/cc-badges-ppcmcvdam.png" alt="" width="">
                        <div class="">
                            <a href="#" class="btn btn-primary">Buy now</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection