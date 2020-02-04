<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Shop;

class ProductController extends Controller
{
    public function create(Request $request) {
        $product = new Product();
        $product->name = 'whatsapp';
        $product->price = 50;
        $product->save();

        $shop = Shop::find([1 , 2]);
        $product->shops()->attach($shop);
        return 'success';
    }
    public function show(Product $product) {
        $product = $product->with('shops')->get();
        return view('show', compact('product'));
    }
}
