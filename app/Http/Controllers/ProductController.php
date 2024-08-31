<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Session;

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

    public function showHome()
    {
        $data['products'] = Product::orderByDesc('id')->paginate(8);
        $data['cartCount'] = Cart::where('user_id', 1)->count();
        $data['title'] = 'home';
        return view('CustomerView.home', $data);
    }
}
