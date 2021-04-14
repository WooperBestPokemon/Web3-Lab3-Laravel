@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="dashboard-wrapper">
        <div class="dashboard-ecommerce">
            <div class="container-fluid dashboard-content">

                <div class="row">
                    <div class="col-xl-9 col-lg-8 col-md-8 col-sm-12 col-12">
                        <div class="row">
                            @foreach($products as $product)
                            <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-12">
                                <div class="product-thumbnail">
                                    <div class="product-img-head">
                                        <div class="product-img">
                                            <img src="{{ $product->image }}" alt="" class="img-fluid" width="228" height="250"></div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-content-head">
                                            <h3 class="product-title">{{ $product->name }}</h3>
                                            <div class="product-price">{{ $product->price }}</div>
                                        </div>
                                        <div class="product-btn">
                                            <a href="{{ url('products/'.$product->id.'/edit') }}" class="btn btn-primary">Modify</a>
                                            <a href="{{ url('products/'.$product->id) }}" class="btn btn-outline-light">Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
