<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
use Illuminate\Http\Request;

use App\Models\Order;
use App\Models\OrderItem;

class CheckoutController extends Controller
{
    public function index(Request $request)
    {
        $cartItems = CartItem::with('product')
            ->where('session_id', $request->session()->getId())
            ->get();

        return view('checkout.index', compact('cartItems'));
    }

    public function placeOrder(Request $request)
    {
    $cartItems = CartItem::with('product')
        ->where('session_id', $request->session()->getId())
        ->get();

    if ($cartItems->count() == 0) {
        return redirect()
            ->route('cart.index')
            ->with('error', 'Your cart is empty.');
    }

     // Validate customer details
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:20',
            'address' => 'required|string',
            'city' => 'required|string|max:100',
            'state' => 'required|string|max:100',
            'pincode' => 'required|string|max:10',
        ]);

    $subtotal = 0;

    foreach ($cartItems as $item) {

        $price = $item->product->discount_price
            ?? $item->product->price;

        $subtotal += $price * $item->quantity;
    }

    $delivery = $subtotal >= 999 ? 0 : 49;

    $total = $subtotal + $delivery;

    // Create order
        $order = Order::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'city' => $request->city,
            'state' => $request->state,
            'pincode' => $request->pincode,
            'total_amount' => $total,
            'status' => 'placed',
            'payment_status' => 'pending',
        ]);

        // Save products in order_items
        foreach ($cartItems as $item) {

            $price = $item->product->discount_price
                ?? $item->product->price;

            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $item->product_id,
                'quantity' => $item->quantity,
                'price' => $price,
            ]);
        }

        // Remove cart items after successful order
        CartItem::where('session_id', $request->session()->getId())
            ->delete();

            $orderId = $order->id;

    return view('checkout.success', compact(
        'cartItems',
        'subtotal',
        'delivery',
        'total',
        'orderId'
    ));
    }
}
