<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function products()
    {
        return view('products');
    }

    public function singleproducts()
    {
        return view('singleproduct');
    }

    public function list()
    {
        return view('list');
    }

}
