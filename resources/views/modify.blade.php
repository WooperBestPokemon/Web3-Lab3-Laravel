@extends('layouts.app')

@section('title', 'Modify a product')

@section('content')
    <div class="dashboard-wrapper">
        <div class="dashboard-ecommerce">
            <div class="container-fluid dashboard-content ">
                <div class="row">
                    <div class="offset-xl-2 col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12">
                        <form class="row" action="{{ url('ModifyProduct') }}" method="POST">
                            @csrf
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 pr-xl-0 pr-lg-0 pr-md-0  m-b-30">
                                <div class="product-slider">
                                    <img class="d-block" src="{{ $product->image }}" alt="First slide" width="285" height="313">
                                    Image URL <input name="imageLink" id="imageLink" type="text" @focusout="showPicture" value="{{ $product->image }}"/>
                                    <div>
                                        ID <input name="id" id="id" type="number" value="{{ $product->id }}"/>
                                    </div>


                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 pl-xl-0 pl-lg-0 pl-md-0 border-left m-b-30">
                                <div class="product-details">
                                    <div class="border-bottom pb-3 mb-3">
                                        <h2 class="mb-3">
                                            <input type="text" name="name" id="name" value="{{ $product->name }}" minlength="4" required/>
                                        </h2>
                                        <h3 class="mb-0 text-primary">$<input type="number" name="price" id="price" value="{{ $product->price }}" step="0.01" required/></h3>
                                    </div>
                                    <div class="product-size border-bottom">
                                        <h4>Provider</h4>
                                        <input type="text" name="provider" id="provider" value="{{ $product->provider }}" minlength="3" required/>
                                        <div class="product-qty">
                                            <h4>Quantity</h4>
                                            <div class="quantity">
                                                <input type="number" name="quantity" id="quantity" value="{{ $product->quantity }}" required/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-description">
                                        <h4 class="mb-1">Description</h4>
                                        <textarea name="description" id="description" rows="4" cols="50" minlength="50" required>{{ $product->description }}</textarea>
                                        <button type="submit" class="btn btn-primary btn-block btn-lg">Save</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
