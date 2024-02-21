<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function displayProducts(Request $request, $theme)
    {
        $themes = [
            'Gadgets' => [ 
                'iPhone 15', 'Samsung Galaxy S24', 'Google Pixel 8'
            ]
        ];

        $products = $themes[$theme];
        return view('products.index', compact('products', 'theme'));
    }
}


