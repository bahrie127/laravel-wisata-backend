<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderItem;

class OrderController extends Controller
{
    //
    public function store(Request $request)
    {
        $request->validate([
            'transaction_time' => 'required',
            'total_price' => 'required',
            'total_item' => 'required',
            'payment_amount' => 'required',
            'cashier_id' => 'required',
            'cashier_name' => 'required',
            'payment_method' => 'required',
            'order_items' => 'required',
        ]);

        $order = new Order;
        $order->transaction_time = $request->transaction_time;
        $order->total_price = $request->total_price;
        $order->total_item = $request->total_item;
        $order->payment_amount = $request->payment_amount;
        $order->cashier_id = $request->cashier_id;
        $order->cashier_name = $request->cashier_name;
        $order->payment_method = $request->payment_method;
        $order->save();

        foreach ($request->order_items as $item) {
            $orderItem = new OrderItem;
            $orderItem->order_id = $order->id;
            $orderItem->product_id = $item['product_id'];
            $orderItem->quantity = $item['quantity'];
            $orderItem->total_price = $item['total_price'] * $item['quantity'];
            $orderItem->save();
        }

        return response()->json(['status' => 'success', 'data' => $order], 201);
    }
}
