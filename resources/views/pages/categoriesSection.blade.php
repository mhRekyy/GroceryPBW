<section class="py-10">
    <div class="container mx-auto px-4">
        <h4 style="color: #71B53A; "class="font-bold text-center">Categories</h4>
        <h2 class="text-2xl font-bold text-center mb-8">Shop by Top Categories</h2>

        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-4">
            @php
                $categories = [
                    ['name' => 'Fresh Fruit', 'image' => asset('images/fresh-fruits.jpeg')],
                    ['name' => 'Fresh Vegetables', 'image' => asset('images/Fresh-Vegetables.jpg')],
                    ['name' => 'Meat & Fish', 'image' => asset('images/meat-fish.jpg')],
                    ['name' => 'Snacks', 'image' => asset('images/snack.jpg.webp')],
                    ['name' => 'Eggs & Dairy', 'image' => asset('images/egg-dairy.jpg')],
                    ['name' => 'Bakery & Pastry', 'image' => asset('images/bakery.jpg')],
                    ['name' => 'Honey & Jam', 'image' => asset('images/honey-jam.jpg')],
                    ['name' => 'Cooking', 'image' => asset('images/cooking.jpg')],
                    ['name' => 'Breakfast', 'image' => asset('images/Breakfast.jpg')],
                    ['name' => 'Beverages', 'image' => asset('images/beverages.jpg')],
                    ['name' => 'Fruits Juice', 'image' => asset('images/fresh-fruit-juice.jpg')],
                    ['name' => 'Tea', 'image' => asset('images/tea.jpg')],
                ];
            @endphp


        @foreach($categories as $category)
                <a href="#" class="flex flex-col items-center p-4 border rounded-md transition-all hover:shadow-md">
                    <div class="w-16 h-16 rounded-full mb-3 overflow-hidden">
                        <img src="{{ $category['image'] }}" alt="{{ $category['name'] }}" class="w-full h-full object-cover" />
                    </div>
                    <h3 class="text-sm text-center font-medium">{{ $category['name'] }}</h3>
                </a>
            @endforeach
        </div>
    </div>
</section>
