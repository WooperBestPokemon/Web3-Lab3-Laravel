<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ModifyController extends Controller
{
    //
    function index($id)
    {
        return view('modify', ['product' => Product::find($id)]);
    }
    function modifyProduct(Request $request)
    {
        $product = Product::find($request->id);

        $product->name = $request->name;
        $product->provider = $request->provider;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->description = $request->description;
        $product->image = $request->imageLink;

        $product->save();
        //return "There is some data in here ヾ(￣▽￣) Bye~Bye~ !";
        return view('list',  ['products' => Product::all()]);
    }
}
