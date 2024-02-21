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
            ],
            'Books' => [
                'Harry Potter', 'The Subtle Art of Not Giving a F*ck', 'The 4-Hour Workweek'
            ],
            'Movies' => [
                'The Godfather', 'Pulp Fiction', 'The Shawshank Redemption'
            ],
            'Anime'   => [
                'Attack on Titan', 'Fullmetal Alchemist: Brotherhood', 'Death Note'
            ],
            'Restaurants' => [
                'Jollibee', "McDonald's", 'KFC'
            ]
        ];

        if (!array_key_exists($theme, $themes)) {
            abort(404); // Not found
        }

        $products = $themes[$theme];
        return view('products.index', compact('products', 'theme'));
    }
}
