<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

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
        $data['products'] = Product::orderByDesc('id')->where('stock', ">", 0)->where('is_publish', true)->paginate(8);
        $data['cartCount'] = Cart::where('user_id', Session::get('id'))->count();
        $data['title'] = 'home';
        return view('CustomerView.home', $data);
    }

    public function shopUnauthorize()
    {
        $data['products'] = Product::paginate(9);
        return view('CustomerView.shopUnauthorize', $data);
    }

    public function shop()
    {
        $data['products'] = Product::paginate(8);
        $data['cartCount'] = Cart::where('user_id', Session::get('id'))->count();
        $data['title'] = 'shop';
        return view('CustomerView.shop', $data);
    }

    public function productDetail(Product $product)
    {
        $data['product'] = $product;
        $data['title'] = 'home';
        $data['cartCount'] = Cart::where('user_id', Session::get('id'))->count();
        return view('CustomerView.productDetail', $data);
    }

    public function productCreate(Request $request)
    {
        $validation = $request->validate([
            'name' => ['required', 'min:3'],
            'description' => ['required'],
            'price' => ['required'],
            'stock' => ['required', 'integer'],
            // 'brand' => ['required'],
            'model' => ['required'],
            // 'image' => ['nullable', 'image'],
            'category_id' => ['required'],

        ]);
        $save_file = "";

        if ($request->hasFile('image')) {
            // dd($request->file('image'));
            $ext = $request->file('image')->getClientOriginalExtension();
            $save_file = time() . '.' . $ext;
            $request->file('image')->storeAs('image', $save_file);
        } else {
            $save_file = "-";
        }

        Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'stock' => $request->stock,
            'brand' => $request->brand,
            'model' => $request->model,
            'image' => $save_file,
            'category_id' => $request->category_id,
            'user_id' => Session::get('id'),
        ]);

        if ($validation) {
            Session::flash('pesan', 'Product added successfully');
        } else {
            Session::flash('pesan', 'Failed to add product');
        }

        return redirect('/me');
    }

    public function productCreateView()
    {
        $data['title'] = 'profile';
        $data['cartCount'] = Cart::where('user_id', Session::get('id'))->count();
        $data['categories'] = Category::all();
        return view('CustomerView.productCreate', $data);
    }
}
