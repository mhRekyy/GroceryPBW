<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ShopController extends Controller
{
    public function index(Request $request)
    {
        $category = $request->query('category');
        $sort = $request->query('sort', 'default');

        $query = Product::query();

        if ($category) {
            $query->whereHas('category', function ($q) use ($category) {
                $q->where('name', $category);
            });
        }

        switch ($sort) {
            case 'price-low-high':
                $query->orderBy('price');
                break;
            case 'price-high-low':
                $query->orderByDesc('price');
                break;
            case 'rating':
                $query->orderByDesc('rating');
                break;
            default:
                $query->orderBy('id');
                break;
        }

        $products = $query->get();
        $categories = Category::all();

        return view('pages.shop', [
            'products' => $products,
            'categories' => $categories,
            'selectedCategory' => $category,
            'sort' => $sort,
        ]);
    }
}
