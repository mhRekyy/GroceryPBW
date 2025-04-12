@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 py-10">
        <h1 class="text-3xl font-bold text-center mb-10">My Shopping Cart</h1>

        <div class="text-center py-20">
            <h2 class="text-2xl font-medium mb-4">Your cart is empty</h2>
            <p class="text-gray-500 mb-8">Add some products to your cart to proceed with checkout.</p>
            <a href="/" class="bg-[#71B53A] text-white px-6 py-2 rounded ">Continue Shopping</a>
        </div>
    </div>
@endsection
