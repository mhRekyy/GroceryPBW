@php
    $featuredProducts = [
        ['name' => 'Chinese Cabbage', 'price' => 14.99, 'image' => asset('images/cabbage.png'), 'sku' => '2,51,594', 'discount' => 64],
        ['name' => 'Green Lettuce', 'price' => 14.99, 'image' => asset('images/lettuce.png')],
        ['name' => 'Green Chili', 'price' => 14.99, 'image' => asset('images/chili.png')],
        ['name' => 'Corn', 'price' => 14.99, 'image' => asset('images/corn.png')],
    ];

    $tabs = [
        'Hot Deals' => [
            ['name' => 'Green Apple', 'price' => 14.99, 'image' => asset('images/greenapple.png')],
            ['name' => 'Indian Malta', 'price' => 14.99, 'image' => asset('images/indianmalta.png')],
            ['name' => 'Green Lettuce', 'price' => 14.99, 'image' => asset('images/lettuce.png')],
        ],
        'Best Seller' => [
            ['name' => 'Eggplant', 'price' => 14.99, 'image' => asset('images/eggplant.png')],
            ['name' => 'Red Capsicum', 'price' => 14.99, 'old_price' => 20.99, 'image' => asset('images/redcapsicum.png')],
            ['name' => 'Red Tomatos', 'price' => 14.99, 'image' => asset('images/redtomatos.png')],
        ],
        'Top Rated' => [
            ['name' => 'Big Potatos', 'price' => 14.99, 'image' => asset('images/bigpotatos.png')],
            ['name' => 'Corn', 'price' => 14.99, 'old_price' => 20.99, 'image' => asset('images/corn.png')],
            ['name' => 'Fresh cauliflower', 'price' => 14.99, 'image' => asset('images/freshcauliflower.png')],
        ],
    ];
@endphp

<section class="container mx-auto px-4 py-12">
    <!-- Header -->
    <div class="text-center mb-10">
        <h4 class="font-bold text-center text-green-600">PRODUCTS</h4>
        <h2 class="text-2xl font-bold text-center mb-8">Our Featured Products</h2>
    </div>

    <!-- Featured Products Grid -->
    <div class="grid grid-cols-1 md:grid-cols-5 gap-6 mb-16">
        <!-- Summer Sale Banner -->
        <div class="col-span-1 md:col-span-1 bg-gray-100 rounded-lg overflow-hidden relative">
            <!-- Image as background -->
            <img src="{{ asset('images/summer.png') }}" class="absolute inset-0 w-full h-full object-cover" alt="Summer sale">

            <!-- Text overlay (in front of image) -->
            <div class="p-6 relative z-10 text-center flex items-center flex-col pt-10 mt-8">
                <h3 class="text-sm font-bold uppercase text-black mb-2 text-center">SUMMER SALE</h3>
                <h1 class="text-4xl text-green-600 font-bold mb-4">75% off</h1>
            </div>

            <!-- Shop Now button (centered) -->
            <div class="relative z-10 flex justify-center pb-10 mt-12">
                <a href="#" class="bg-white text-green-600 px-6 py-3 rounded-full font-semibold hover:bg-green-50 transition-colors flex items-center">
                    Shop Now
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                    </svg>
                </a>
            </div>
        </div>

        <!-- Featured Products -->
        @foreach ($featuredProducts as $product)
            <div
                class="border rounded-lg p-4 transition-all duration-200 hover:border-green-500 relative group cursor-pointer"
                onclick="showProductDetail(
                    '{{ $product['name'] }}',
                    {{ $product['price'] }},
                    '{{ $product['image'] }}',
                    '{{ $product['sku'] ?? '2,51,594' }}',
                    {{ isset($product['discount']) ? $product['discount'] : 'null' }},
                    {{ isset($product['old_price']) ? $product['old_price'] : 'null' }}
                )"
            >
                <div class="mb-4 relative">
                    <img src="{{ $product['image'] }}" alt="{{ $product['name'] }}" class="w-full h-48 object-contain">
                </div>

                <h4 class="text-gray-800 font-medium mb-1">{{ $product['name'] }}</h4>
                <p class="text-gray-900 font-semibold mb-2">${{ number_format($product['price'], 2) }}</p>

                <div class="text-amber-400 flex mb-4">
                    <span>★</span>
                    <span>★</span>
                    <span>★</span>
                    <span>★</span>
                    <span class="text-gray-300">★</span>
                </div>

                <!-- Product Actions -->
                <div class="absolute bottom-4 right-4">
                    <button class="bg-gray-100 text-gray-400 p-2 rounded-full hover:bg-green-50 hover:text-green-500 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </button>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Category Tabs Section -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
        <!-- Category Columns -->
        @foreach ($tabs as $category => $products)
            <div class="col-span-1">
                <h3 class="text-xl font-bold mb-6">{{ $category }}</h3>
                <div class="space-y-6">
                    @foreach ($products as $product)
                        <div
                            class="flex items-center gap-4 border rounded-lg p-3 transition-all duration-200 hover:border-green-500 cursor-pointer group"
                            onclick="showProductDetail(
                                '{{ $product['name'] }}',
                                {{ $product['price'] }},
                                '{{ $product['image'] }}',
                                '{{ $product['sku'] ?? '2,51,594' }}',
                                {{ isset($product['discount']) ? $product['discount'] : 'null' }},
                                {{ isset($product['old_price']) ? $product['old_price'] : 'null' }}
                            )"
                        >
                            <img src="{{ $product['image'] }}" alt="{{ $product['name'] }}" class="w-20 h-20 object-contain">

                            <div class="flex-1">
                                <h4 class="font-medium text-gray-800">{{ $product['name'] }}</h4>
                                <div class="flex items-center gap-2 mt-1">
                                    @if (!empty($product['old_price']))
                                        <span class="line-through text-gray-400">${{ number_format($product['old_price'], 2) }}</span>
                                    @endif
                                    <span class="font-semibold">${{ number_format($product['price'], 2) }}</span>
                                </div>

                                <div class="text-amber-400 flex text-sm mt-1">
                                    <span>★</span>
                                    <span>★</span>
                                    <span>★</span>
                                    <span>★</span>
                                    <span class="text-gray-300">★</span>
                                </div>
                            </div>

                            <!-- Product Actions -->
                            <div class="flex flex-col gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                                <button class="text-gray-400 hover:text-green-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach

        <!-- Promo Banner -->
        <div class="relative col-span-1 rounded-lg overflow-hidden border border-yellow-300 flex flex-col justify-between max-h-[420px] h-[420px]">
        <img src="{{ asset('images/37%.png') }}" class="w-full h-full object-cover" alt="Promo banner">

            {{-- Gradient Overlay --}}
            <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-black/20 to-transparent p-4 flex flex-col justify-center text-center text-white">
            <h1 class=" uppercase font-bold text-black text-3xl">HOT SALE</h1>
                <h3 class="text-3xl font-bold my-4">Save 37% on<br>Every Order</h3>
                <a href="/shop"
                   class="bg-white text-green-600 px-6 py-3 rounded-full font-semibold inline-flex items-center justify-center mt-4 hover:bg-green-50 transition-colors mx-auto">
                    Shop Now
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M14 5l7 7m0 0l-7 7m7-7H3" />
                    </svg>
                </a>
            </div>
        </div>
    </div>

    <!-- Include Product Detail Modal Component -->
    @include('components.detail')
</section>
