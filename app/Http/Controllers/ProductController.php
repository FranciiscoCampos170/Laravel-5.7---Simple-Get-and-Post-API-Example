<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    //
    public function insert(Request $request)
    {
        print_r($request->input());

        $product = new Product;
        $product->id = $request->input('id');
        $product->name = $request->input('name');
        $product->desc = $request->input('desc');
        $result = $product->save();

        if ($result == 1) {
            return "Record is inserted";
        }
    }
}
