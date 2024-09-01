<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\OrderItems;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;

class OrderController extends Controller
{
    public function showAll()
    {
        $data['orders'] = Order::all();
        return view('adminView.OrderControl', $data);
    }
    public function detailOrder(Order $order)
    {
        return view('AdminView.OrderDetail', [
            'title' => 'Order Detail',
            'orderItems' => $order->items,
            'order' => $order
        ]);
    }

    public function checkout(Request $request)
    {
        // $cart = json_decode($request->input('cart'), true);
        $items = json_decode($request->input('items'), true);
    
        // You can now manipulate the $cart and $items arrays as needed
        // dd($cart, $items); // This will dump and die to inspect the data

        $total = 0;
        foreach($items as $item)
        {
            $total += $item[2] * $item[1];
        }
        $data['title'] = 'cart';
        $data['cartCount'] = Cart::where('user_id', Session::get('id'))->count();
        // $data['cart'] = $cart;
        $data['items'] = $items;
        $data['total'] = $total;
        return view('CustomerView.checkout', $data);
    }

    public function checkoutProcess(Request $request)
    {
        // $cart = json_decode($request->input('cart'), true);
        $items = json_decode($request->input('items'), true);
    
        $saveOrder = Order::create([
            'user_id' => Session::get('id'),
            'total_price' => $request->total
        ]);
        $lastId = $saveOrder->id;

            foreach($items as $item)
            {
                OrderItem::create([
                    'order_id' => $lastId,
                    'product_id' => $item[0],
                    'quantity' => 1,
                    'price' => $item[2]
                ]);
            }
            Alert::toast('your product is pending now!', 'success');
            return redirect('/home');
    }
}
