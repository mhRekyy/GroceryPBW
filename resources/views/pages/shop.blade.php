@extends('layouts.app')

@section('content')
<div class="container py-4">
  {{-- <h1 class="text-3xl font-bold text-gray-800 mb-6">
    {{ $selectedCategory ?? 'All Products' }}
  </h1> --}}

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
          <div onclick="openPopup(@json($product))" class="cursor-pointer border rounded-lg p-3 shadow hover:shadow-lg text-center bg-white">
            <img src="{{ $product->image_url ?? 'https://via.placeholder.com/150' }}" alt="{{ $product->name }}" class="w-full h-32 object-contain mb-2" />
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

<!-- Popup -->
<div id="product-popup" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
  <div class="bg-white w-full max-w-4xl rounded-lg overflow-hidden relative shadow-lg">
    <button onclick="closePopup()" class="absolute top-3 right-4 text-xl font-bold text-gray-500 hover:text-gray-800">&times;</button>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 p-6">
      <img id="popup-image" src="" alt="Product" class="w-full h-auto object-contain">
      <div>
        <h2 id="popup-name" class="text-2xl font-bold text-gray-800 mb-2"></h2>
        <p id="popup-category" class="text-sm text-gray-500 mb-2"></p>
        <p id="popup-price" class="text-green-600 text-xl font-semibold mb-2"></p>
        <p id="popup-description" class="text-gray-700"></p>
      </div>
    </div>
  </div>
</div>
@endsection

@push('scripts')
<script>
  function openPopup(product) {
    document.getElementById('popup-image').src = product.image_url || 'https://via.placeholder.com/300';
    document.getElementById('popup-name').textContent = product.name;
    document.getElementById('popup-price').textContent = '$' + parseFloat(product.price).toFixed(2);
    document.getElementById('popup-category').textContent = product.category?.name ?? '-';
    document.getElementById('popup-description').textContent = product.description ?? 'No description available';
    document.getElementById('product-popup').classList.remove('hidden');
    document.getElementById('product-popup').classList.add('flex');
  }

  function closePopup() {
    document.getElementById('product-popup').classList.add('hidden');
    document.getElementById('product-popup').classList.remove('flex');
  }
</script>
@endpush
