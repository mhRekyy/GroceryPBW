<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        // Hapus semua data kategori lama agar tidak double
        Category::truncate();

        $categories = ['Fruits', 'Vegetables', 'Spices', 'Grains', 'Drinks'];

        foreach ($categories as $name) {
            Category::create(['name' => $name]);
        }
    }
}
