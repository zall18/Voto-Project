<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showAll()
    {
        $data['Products'] = Product::all();
        return view('adminView.ProductControl', $data);
    }

    public function showHome()
    {
        $data['products'] = Product::orderByDesc('id')->paginate(10);
        return view('CustomerView.home', $data);
    }
}
