@extends('layouts.app')

@section('title', 'Product')

@section('content')
    <div class="dashboard-wrapper">
        <div class="dashboard-ecommerce">
            <div class="container-fluid dashboard-content ">

                <div class="row">
                    <div class="offset-xl-2 col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 pr-xl-0 pr-lg-0 pr-md-0  m-b-30">
                                <div class="product-slider">
                                    <img class="d-block" src='{{ $product->image }}' alt="Product" width="285" height="313">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 pl-xl-0 pl-lg-0 pl-md-0 border-left m-b-30">
                                <div class="product-details">
                                    <div class="border-bottom pb-3 mb-3">
                                        <h2 class="mb-3">{{ $product->name }}</h2>
                                        <h3 class="mb-0 text-primary">${{ $product->price }}</h3>
                                    </div>
                                    <div class="product-size border-bottom">
                                        <h4>Provider</h4>
                                        <div>{{ $product->provider }}</div>
                                        <div class="product-qty">
                                            <h4>Quantity</h4>
                                            <div class="quantity">
                                                {{ $product->quantity }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-description">
                                        <h4 class="mb-1">Description</h4>
                                        <p>{{ $product->description }}</p>
                                        <a href="{{ url('products/'.$product->id.'/edit') }}" class="btn btn-primary btn-block btn-lg">Modify</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
