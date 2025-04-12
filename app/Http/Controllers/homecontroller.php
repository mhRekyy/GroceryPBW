<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homecontroller extends Controller
{
    public function index()
    {
        $featuredProducts = [
            [
                'id' => 1,
                'name' => "Chinese Cabbage",
                'price' => 14.99,
                'image' => "https://images.unsplash.com/photo-1603049404411-13c2e30e4637?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80",
                'rating' => 4,
                'featured' => true,
            ],
            [
                'id' => 2,
                'name' => "Green Lettuce",
                'price' => 14.99,
                'image' => "https://images.unsplash.com/photo-1622206151226-18ca2c9ab4a1?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80",
                'rating' => 4,
                'featured' => true,
            ],
            [
                'id' => 3,
                'name' => "Green Chili",
                'price' => 14.99,
                'image' => "https://images.unsplash.com/photo-1627735055374-cd2736d5f0ed?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80",
                'rating' => 4,
                'featured' => true,
            ],
            [
                'id' => 4,
                'name' => "Indian Malta",
                'price' => 14.99,
                'image' => "https://images.unsplash.com/photo-1611080626919-7cf5a9dbab12?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80",
                'rating' => 4,
                'featured' => true,
            ],
        ];

        return view('pages.home', compact('featuredProducts'));
    }
}
