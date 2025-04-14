<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        // Hapus data lama biar tidak double
        DB::table('products')->truncate();

        $fruits = Category::where('name', 'Fruits')->first();
        $vegetables = Category::where('name', 'Vegetables')->first();
        $spices = Category::where('name', 'Spices')->first();
        $grains = Category::where('name', 'Grains')->first();
        $drinks = Category::where('name', 'Drinks')->first();

        $products = [
            // Fruits
            ['Green Apple', 'Fresh Green apples', 3.99, 4.5, 'greenapple.png', $fruits],
            ['Banana', 'Sweet bananas', 1.49, 4.0, 'banana.jpg', $fruits],
            ['Orange', 'Juicy oranges', 2.99, 4.3, 'orange.jpg', $fruits],
            ['Mango', 'Tropical mangoes', 4.50, 4.6, 'manggo.png', $fruits],
            ['Grapes', 'Seedless grapes', 3.20, 4.1, 'Grape.jpg', $fruits],

            // Vegetables
            ['Carrot', 'Organic carrots', 2.50, 4.2, 'Carrot.jpg', $vegetables],
            ['Broccoli', 'Fresh broccoli', 2.99, 4.4, 'freshcauliflower.png', $vegetables],
            ['Spinach', 'Leafy spinach', 1.89, 4.0, 'spinach.jpg', $vegetables],
            ['Tomato', 'Ripe tomatoes', 2.20, 4.1, 'redtomatos.png', $vegetables],
            ['Cucumber', 'Crunchy cucumbers', 1.70, 3.9, 'cucumber.jpg', $vegetables],
            ['Potato', 'Starchy potatoes', 1.50, 4.2, 'potatos.jpg', $vegetables],
            ['Onion', 'Yellow onions', 1.10, 4.0, 'onion.jpg', $vegetables],
            ['Lettuce', 'Fresh lettuce heads', 2.00, 4.3, 'lettuce.png', $vegetables],
            ['Cabbage', 'Fresh cabbage', 2.00, 4.0, 'cabbage.png', $vegetables],
            ['Cauliflower', 'White cauliflower', 2.80, 4.3, 'freshcauliflower.png', $vegetables],
            ['Eggplant', 'Purple eggplants', 2.30, 4.0, 'eggplant.png', $vegetables],

            // Spices
            ['Coriander', 'Coriander seeds', 1.40, 4.3, 'coriander.jpg', $spices],
            ['Black Pepper', 'Crushed black pepper', 2.00, 4.6, 'black-peppers.jpg', $spices],
            ['Cinnamon', 'Cinnamon sticks', 2.50, 4.7, 'kayumanis.jpg', $spices],
            ['Ginger', 'Dry ginger powder', 1.80, 4.4, 'ginger.jpg', $spices],

            // Grains
            ['White Rice', 'Premium white rice', 4.00, 4.5, 'berasputih.png', $grains],
            ['Wheat', 'Whole wheat grains', 2.80, 4.2, 'gandum.jpg', $grains],
            ['Barley', 'Organic barley', 3.00, 4.1, 'kacangijo.jpg', $grains],
            ['Oats', 'Rolled oats', 3.50, 4.4, 'oats.jpg', $grains],
            ['Corn', 'Dried corn kernels', 2.20, 4.0, 'corn.png', $grains],

            // Drinks
            ['Green Tea', 'Organic green tea', 3.99, 4.6, 'greentea.jpg', $drinks],
            ['Coffee', 'Ground Arabica coffee', 5.99, 4.8, 'Coffe.jpg', $drinks],
            ['Milk', 'Fresh cow milk', 2.50, 4.5, 'milk.jpg', $drinks],
            ['Orange Juice', 'Pure orange juice', 3.00, 4.6, 'orangejuice.jpg', $drinks],
            ['Lemonade', 'Refreshing lemonade', 2.20, 4.2, 'lemonade.jpg', $drinks],
            ['Soda', 'Sparkling soda drink', 1.80, 4.0, 'soda.jpg', $drinks],
            ['Mineral Water', 'Natural mineral water', 1.50, 4.3, 'mineralwater.jpg', $drinks],
        ];

        foreach ($products as [$name, $description, $price, $rating, $image, $category]) {
            if ($category) {
                Product::create([
                    'name' => $name,
                    'description' => $description,
                    'price' => $price,
                    'rating' => $rating,
                    'category_id' => $category->id,
                    'image' => $image,
                ]);
            }
        }
    }
}
