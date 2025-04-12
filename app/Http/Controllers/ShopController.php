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

        // Ambil produk dan relasi ke kategori
        $query = Product::with('category');

        // Filter berdasarkan kategori jika dipilih
        if ($category) {
            $query->whereHas('category', function ($q) use ($category) {
                $q->where('name', $category);
            });
        }

        // Sorting
        switch ($sort) {
            case 'price-low-high':
                $query->orderBy('price', 'asc');
                break;
            case 'price-high-low':
                $query->orderBy('price', 'desc');
                break;
            case 'rating':
                $query->orderBy('rating', 'desc');
                break;
            default:
                $query->orderBy('id', 'asc');
                break;
        }

        // Ambil hanya 25 produk (5x5)
        $products = $query->take(25)->get();

        // Ambil semua kategori
        $categories = Category::all();

        // Kirim ke view
        return view('pages.shop', [
            'products' => $products,
            'categories' => $categories,
            'selectedCategory' => $category,
            'sort' => $sort,
        ]);
    }
}
