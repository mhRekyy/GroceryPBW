@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <h1 class="text-3xl font-bold text-gray-800 mb-6">
            {{ $selectedCategory ?? 'All Products' }}
        </h1>

        <div class="flex flex-col lg:flex-row gap-8">
            <!-- Sidebar Filters -->
            <div class="lg:w-1/4">
                <div class="bg-white rounded-lg shadow-md p-6 mb-6">
                    <h2 class="font-bold text-gray-800 mb-4">Categories</h2>
                    <div class="space-y-2">
                        <a href="{{ route('shop') }}" class="block py-1 px-2 rounded {{ !$selectedCategory ? 'bg-gray-200 font-medium' : '' }}">
                            All Products
                        </a>
                        @foreach($categories as $category)
                            <a href="{{ route('shop', ['category' => $category->name]) }}" class="block py-1 px-2 rounded {{ $selectedCategory === $category->name ? 'bg-gray-200 font-medium' : '' }}">
                                {{ $category->name }}
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Product List -->
            <div class="lg:w-3/4">
                <div class="flex justify-between items-center mb-6">
                    <p class="text-gray-600">{{ $products->count() }} products</p>
                    <form method="get" action="{{ route('shop') }}" class="flex items-center">
                        @if($selectedCategory)
                            <input type="hidden" name="category" value="{{ $selectedCategory }}">
                        @endif
                        <label for="sort" class="text-gray-600 mr-2">Sort by:</label>
                        <select name="sort" id="sort" onchange="this.form.submit()" class="border rounded p-2">
                            <option value="default" {{ $sort === 'default' ? 'selected' : '' }}>Featured</option>
                            <option value="price-low-high" {{ $sort === 'price-low-high' ? 'selected' : '' }}>Price: Low to High</option>
                            <option value="price-high-low" {{ $sort === 'price-high-low' ? 'selected' : '' }}>Price: High to Low</option>
                            <option value="rating" {{ $sort === 'rating' ? 'selected' : '' }}>Best Rating</option>
                        </select>
                    </form>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                    @forelse($products as $product)
                        <div class="border rounded p-4 shadow hover:shadow-lg">
                            <h3 class="font-bold text-lg">{{ $product->name }}</h3>
                            <p class="text-gray-600">{{ $product->category->name }}</p>
                            <p class="text-gray-800 font-semibold">${{ number_format($product->price, 2) }}</p>
                            <p class="text-yellow-500">Rating: {{ $product->rating }}</p>
                        </div>
                    @empty
                        <div class="col-span-3 text-center py-12">
                            <h3 class="text-xl font-medium text-gray-800">No products found</h3>
                            <p class="text-gray-600 mt-2">Try changing your filters or check back later.</p>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
@endsection
