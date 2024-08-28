<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItems;
use Illuminate\Http\Request;

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
}
