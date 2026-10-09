<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CartController extends Controller
{
    public function add(Request $request, $productId)
    {
         $product = Product::findOrFail($productId);

         $quantity = $request->input('quantity', 1);

         $sessionId = $request->session()->getId();

         $cartItem = CartItem::where('session_id', $sessionId)
            ->where('product_id', $product->id)
            ->first();

        if ($cartItem) {

            $cartItem->quantity += $quantity;
            $cartItem->save();

        } else {

            CartItem::create([
                'product_id' => $product->id,
                'session_id' => $sessionId,
                'quantity' => $quantity,
            ]);
        }

        return redirect()
            ->route('cart.index')
            ->with('success', 'Product added to cart!');
    }
    

    public function index(Request $request)
    {
        $sessionId = $request->session()->getId();

        $cartItems = CartItem::with('product')
            ->where('session_id', $sessionId)
            ->get();

        return view('cart.cart', compact('cartItems'));
    }

    public function remove(Request $request, $cartItemId)
    {
    $sessionId = $request->session()->getId();

    $cartItem = CartItem::where('id', $cartItemId)
        ->where('session_id', $sessionId)
        ->firstOrFail();

    $cartItem->delete();

    return redirect()
        ->route('cart.index')
        ->with('success', 'Product removed from cart!');
    }

    public function update(Request $request, $cartItemId)
    {
    $sessionId = $request->session()->getId();

    $cartItem = CartItem::where('id', $cartItemId)
        ->where('session_id', $sessionId)
        ->firstOrFail();

    $quantity = $request->input('quantity');

    if ($quantity < 1) {
        $quantity = 1;
    }

    $cartItem->quantity = $quantity;
    $cartItem->save();

    return redirect()
        ->route('cart.index')
        ->with('success', 'Cart quantity updated!');
    }
}