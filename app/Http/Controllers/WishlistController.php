<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Wishlist;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    public function index(Request $request)
    {
        $items = Wishlist::with('product')
            ->where(
                'session_id',
                $request->session()->getId()
            )
            ->get();

        return view('wishlist.index', compact('items'));
    }

    public function toggle(Request $request, Product $product)


    {
    if (!$product->is_active) {
        abort(404);
    }

    $sessionId = $request->session()->getId();

    $item = Wishlist::where('session_id', $sessionId)
        ->where('product_id', $product->id)
        ->first();

    if ($item) {

        $item->delete();

        return back()->with(
            'success',
            'Product removed from wishlist.'
        );

    }

    Wishlist::create([
        'session_id' => $sessionId,
        'product_id' => $product->id,
    ]);

    return back()->with(
        'success',
        'Product added to wishlist!'
    );
   }
}
