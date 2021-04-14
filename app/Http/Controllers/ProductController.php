<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    function index($id)
    {
        return view('product', ['product' => Product::find($id)]);
    }
}
