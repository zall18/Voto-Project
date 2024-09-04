<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Log;
use RealRashid\SweetAlert\Facades\Alert;

class CartController extends Controller
{
    public function addCart(Request $request)
    {

        $cart = Cart::where('user_id', Session::get('id'))
            ->where('product_id', $request->id)
            ->first();


        if ($cart) {
            Alert::toast('This product is already in cart', 'error');
            $request->session()->flash('errorCart', 'This product is already in the cart');
        } else {
            Cart::create([
                'user_id' => Session::get('id'),
                'product_id' => $request->id,
                'quantity' => 1
            ]);
            Alert::toast('success to add to cart', 'success');

            $request->session()->flash('successCart', 'Successfully added to cart');
        }

        return back();

    }
    public function addCartDetail(Request $request)
    {

        $cart = Cart::where('user_id', Session::get('id'))
            ->where('product_id', $request->id)
            ->first();


        if ($cart) {
            Alert::toast('This product is already in cart', 'error');
            $request->session()->flash('errorCart', 'This product is already in the cart');
        } else {
            Cart::create([
                'user_id' => Session::get('id'),
                'product_id' => $request->id,
                'quantity' => $request->quantity
            ]);
            Alert::toast('success to add to cart', 'success');

            $request->session()->flash('successCart', 'Successfully added to cart');
        }

        return back();

    }

    public function cart()
    {
        $data['cart'] = Cart::where('user_id', Session::get('id'))->get();
        // $data['cartId'] = $data['cart']->id;
        $data['cartCount'] = Cart::where('user_id', Session::get('id'))->count();
        $data['title'] = 'cart';

        return view('CustomerView.cart', $data);
    }

    public function remove(Request $request)
    {
        Cart::find($request->id)->delete();
        return redirect('/cart');
    }
}
