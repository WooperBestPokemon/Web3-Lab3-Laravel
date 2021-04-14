<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ListController extends Controller
{
    //
    function index()
    {
        return view('list',  ['products' => Product::all()]);
    }
}
