<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //index
    public function index()
    {
        $orders = Order::with(('cashier'))->orderBy('created_at', 'DESC')->paginate(10);
        return view('pages.orders.index', compact('orders'));
    }

    //show
    public function show($id)
    {
        $order = Order::with(('cashier'))->findOrFail($id);

        $orderItems = $order->orderItems;
        return view('pages.orders.view', compact('order', 'orderItems'));
    }
}
