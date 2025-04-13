<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $fruits = Category::where('name', 'Fruits')->first();
        $vegetables = Category::where('name', 'Vegetables')->first();

        Product::create([
            'name' => 'Apple',
            'description' => 'Fresh red apples',
            'price' => 3.99,
            'rating' => 4.5,
            'category_id' => $fruits->id,
            'image' => 'apple.jpg',
        ]);

        Product::create([
            'name' => 'Carrot',
            'description' => 'Organic carrots',
            'price' => 2.50,
            'rating' => 4.2,
            'category_id' => $vegetables->id,
            'image' => 'carrot.jpg',
        ]);
    }
}
