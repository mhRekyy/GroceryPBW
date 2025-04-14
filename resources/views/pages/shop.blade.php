@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <div class="flex flex-col lg:flex-row gap-8">
            <!-- Sidebar -->
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

            <!-- Produk Grid -->
            <div class="lg:w-3/4">
                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 xl:grid-cols-5 gap-6">
                    @forelse($products as $product)
                        @php
                            $productData = [
                                'name' => $product->name,
                                'price' => $product->price,
                                'description' => $product->description,
                                'image_url' => asset('images/products/' . $product->image),
                                'category' => $product->category->name ?? '-',
                            ];
                        @endphp

                        <div onclick='openPopup(@json($productData))'
                             class="cursor-pointer border rounded-lg p-3 shadow hover:shadow-lg text-center bg-white">
                            <img src="{{ asset('images/products/' . $product->image) }}" alt="{{ $product->name }}" class="w-full h-32 object-contain mb-2" />
                            <h3 class="font-semibold text-gray-800">{{ $product->name }}</h3>
                            <p class="text-green-600 font-bold">${{ number_format($product->price, 2) }}</p>
                            <p class="text-sm text-gray-500">{{ $product->category->name ?? '-' }}</p>
                        </div>
                    @empty
                        <div class="col-span-5 text-center py-12">
                            <h3 class="text-xl font-medium text-gray-800">No products found</h3>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>

    <!-- Popup Detail Produk -->
    <div id="product-popup" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
        <div class="bg-white w-full max-w-5xl rounded-lg shadow-lg relative p-6 grid md:grid-cols-2 gap-6">
            <button onclick="closePopup()" class="absolute top-3 right-4 text-xl font-bold text-gray-500 hover:text-gray-800">&times;</button>

            <!-- Gambar -->
            <div>
                <img id="popup-image" src="" alt="Product" class="w-full h-auto object-contain mb-4">
                <!-- Thumbnail tetap dummy -->
                <div class="flex space-x-2">
                    <img src="https://via.placeholder.com/60x40" class="w-16 h-16 object-cover border border-gray-200 rounded" />
                    <img src="https://via.placeholder.com/60x40" class="w-16 h-16 object-cover border border-gray-200 rounded" />
                </div>
            </div>

            <!-- Detail -->
            <div>
                <h2 id="popup-name" class="text-2xl font-bold text-gray-800 mb-2">Nama Produk</h2>
                <p id="popup-description" class="text-gray-700 mb-4">Deskripsi Produk</p>
                <span id="popup-price" class="text-green-600 text-2xl font-semibold">$0.00</span>
            </div>
        </div>
    </div>

    <!-- Script -->
    <script>
        function openPopup(product) {
            document.getElementById('popup-name').textContent = product.name;
            document.getElementById('popup-description').textContent = product.description;
            document.getElementById('popup-image').src = product.image_url;
            document.getElementById('popup-price').textContent = "$" + parseFloat(product.price).toFixed(2);
            document.getElementById('product-popup').classList.remove('hidden');
        }

        function closePopup() {
            document.getElementById('product-popup').classList.add('hidden');
        }
    @include('components.detail')
    </script>
@endsection
