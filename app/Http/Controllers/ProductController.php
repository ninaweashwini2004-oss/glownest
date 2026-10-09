<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::where('is_active', true)->get();

        return view('products.index', compact('products'));
    }

    public function home()
    {
        $products = Product::where('is_active', true)->get();

        $skincareProducts = Product::where('category', 'skincare')
        ->where('is_active', true)
        ->get();
         
        $haircareProducts = Product::where('category', 'haircare')
        ->where('is_active', true)
        ->get();

        $makeupProducts = Product::where('category', 'makeup')
            ->where('is_active', true)
            ->get();

        $fragranceProducts = Product::where('category', 'fragrance')
            ->where('is_active', true)
            ->get();

        $accessoriesProducts = Product::where('category', 'accessories')
            ->where('is_active', true)
            ->get();

        return view('home', compact(
            'products',
            'skincareProducts',
            'haircareProducts',
            'makeupProducts',
            'fragranceProducts',
            'accessoriesProducts'
        ));
    
    }

    public function search(Request $request)
    {
    $query = trim($request->input('search'));

    $products = Product::where('name', 'LIKE', '%' . $query . '%')
        ->where('is_active', true)
        ->get();

    return view('products.search', compact('products', 'query'));
     }
}