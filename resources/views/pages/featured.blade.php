@php
    $featuredProducts = [
        ['name' => 'Chanise Cabbage', 'price' => 14.99, 'image' => asset('images/cabbage.png')],
        ['name' => 'Green Lettuce', 'price' => 14.99, 'image' => asset('images/lettuce.png')],
        ['name' => 'Green Chili', 'price' => 14.99, 'image' => asset('images/chili.png')],
        ['name' => 'Corn', 'price' => 14.99, 'image' => asset('images/corn.png')],
    ];

    $tabs = [
        'Hot Deals' => [
            ['name' => 'Green Apple', 'price' => 14.99, 'image' => ('images/Green-apple.jpg')],
            ['name' => 'Indian Malta', 'price' => 14.99, 'image' => 'images/Orange.jpg'],
            ['name' => 'Green Lettuce', 'price' => 14.99, 'image' => 'images/lettuce.png'],
        ],
        'Best Seller' => [
            ['name' => 'Eggplant', 'price' => 14.99, 'image' => 'images/egg-plant.jpg'],
            ['name' => 'Red Capsicum', 'price' => 14.99, 'old_price' => 20.99, 'image' => 'images/red-capsium.jpg'],
            ['name' => 'Red Tomatos', 'price' => 14.99, 'image' => 'images/red-tomato.jpg'],
        ],
        'Top Rated' => [
            ['name' => 'Big Potatos', 'price' => 14.99, 'image' => 'images/Big-potatos.jpg'],
            ['name' => 'Corn', 'price' => 14.99, 'old_price' => 20.99, 'image' => 'images/corn.jpg'],
            ['name' => 'Fresh cauliflower', 'price' => 14.99, 'image' => 'images/cauliflower.jpg'],
        ],
    ];
@endphp

<section class="container mx-auto px-4 py-12">
    <!-- Header -->
    <div class="text-center mb-10">
        <h4 style="color: #71B53A; " class="font-bold text-center">Product</h4>
        <h2 class="text-2xl font-bold text-center mb-8">Our Featured Products</h2>
    </div>

    <!-- Featured Products Grid -->
    <div class="grid grid-cols-1 md:grid-cols-5 gap-6 mb-16">
        <!-- Summer Sale Banner -->
        <div class="col-span-1 md:col-span-1 flex flex-col justify-between bg-gray-100 rounded-lg overflow-hidden relative">
            <!-- Image as background -->
            <img src="{{asset('images/summer.png')}}" class="absolute inset-0 w-full h-full object-cover">

            <!-- Text overlay (in front of image) -->
            <div class="p-6 relative z-10 text-center flex items-center flex-col pt-100">
                <h3 class="text-sm font-bold uppercase text-black mb-2 text-center">SUMMER SALE</h3>
                <h1 class="text-4xl text-green-600 font-bold mb-4">75% off</h1>
            </div>

            <!-- Shop Now button (centered) -->
            <div class="relative z-10 flex justify-center pb-6">
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
            <div class="border rounded-lg p-4 transition-all duration-200 hover:border-green-500 relative group">
                <div class="mb-4 relative">
                    <img src="{{ $product['image'] }}" alt="{{ $product['name'] }}" class="w-full h-56 object-contain">
                    @if (!empty($product['wishlist']))
                        <button class="absolute top-2 right-2 text-gray-400 hover:text-red-500 bg-white rounded-full p-2 shadow-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                            </svg>
                        </button>
                    @endif
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
                    @if (!empty($product['cart']))
                        <button class="bg-green-500 text-white p-2 rounded-full hover:bg-green-600 transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </button>
                    @else
                        <button class="bg-gray-100 text-gray-400 p-2 rounded-full hover:bg-green-50 hover:text-green-500 transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </button>
                    @endif
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
                        <div class="flex items-center gap-4 border rounded-lg p-3 transition-all duration-200 hover:border-green-500 cursor-pointer group">
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
                                @if (!empty($product['wishlist']))
                                    <button class="text-gray-400 hover:text-red-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                        </svg>
                                    </button>
                                @endif

                                @if (!empty($product['cart']))
                                    <button class="text-green-500 hover:text-green-700">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                        </svg>
                                    </button>
                                @else
                                    <button class="text-gray-400 hover:text-green-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                        </svg>
                                    </button>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach

        <!-- Promo Banner -->
        <div class="bg-yellow-100 p-8 rounded-lg text-center flex flex-col justify-center col-span-1">
            <p class="text-sm uppercase text-yellow-800 font-semibold">HOT SALE</p>
            <h3 class="text-3xl font-bold my-4">Save 37% on<br>Every Order</h3>
            <a href="#" class="bg-white text-green-600 px-6 py-3 rounded-full font-semibold inline-flex items-center justify-center mt-4 hover:bg-green-50 transition-colors mx-auto">
                Shop Now
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                </svg>
            </a>
        </div>
    </div>
</section>
