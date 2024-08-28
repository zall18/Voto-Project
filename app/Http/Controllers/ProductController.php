<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showAll()
    {
        $data['products'] = Product::all();
        return view('adminView.ProductControl', $data);
    }
    public function detailProduct(Product $product)
    {
        return view('AdminView.ProductDetail', [
            'title' => 'Product Detail',
            'product' => $product
        ]);
    }
}
