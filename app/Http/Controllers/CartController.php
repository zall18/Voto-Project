<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Log;
use Session;

class CartController extends Controller
{
    public function addCart(Request $request)
    {

        $cart = Cart::where('user_id', 1)
            ->where('product_id', $request->id)
            ->first();


        if ($cart) {
            $request->session()->flash('errorCart', 'This product is already in the cart');
        } else {
            Cart::create([
                'user_id' => 1,
                'product_id' => $request->id,
                'quantity' => 1
            ]);
            $request->session()->flash('successCart', 'Successfully added to cart');
        }

        return redirect('/home');

    }

    public function cart()
    {
        $data['cart'] = Cart::where('user_id', 1)->get();
        $data['cartCount'] = Cart::where('user_id', 1)->count();

        return view('CustomerView.cart', $data);
    }

    public function remove(Request $request)
    {
        Cart::find($request->id)->delete();
        return redirect('/cart');
    }
}
