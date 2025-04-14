<header class="w-full bg-white fixed top-0 left-0 right-0 z-50 shadow-sm">
    <!-- Top header -->
    <div class="border-b border-gray-200">
        <div class="container mx-auto py-2 px-4 flex justify-between items-center">
            <div class="flex items-center text-sm text-gray-400">
                <i class="fas fa-map-marker-alt mr-2"></i>
                <span>Store Location: Jl. Tengku Angkasa H Abdullah Ujong Rimba No 20, Banda Aceh, Indonesia</span>
            </div>
            <div class="flex items-center space-x-4">
                <div class="flex items-center text-sm cursor-pointer text-gray-400">
                    <span>Eng</span>
                    <i class="fas fa-chevron-down ml-1"></i>
                </div>
                <div class="flex items-center text-sm cursor-pointer text-gray-400">
                    <span>USD</span>
                    <i class="fas fa-chevron-down ml-1"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- Main header -->
    <div class="container mx-auto py-5 px-4">
        <div class="flex flex-col md:flex-row items-center justify-between gap-4">
            <!-- Logo -->
            <div class="flex items-center">
                <a href="/home" class="flex items-center">
                    <img src="{{ asset('images/logo.png') }}" class="h-10 mr-2" />
                    <span class="text-4xl font-bold">
                        <span style="color: #71B53A;">Grocery</span>
                    </span>
                </a>
            </div>

            <!-- Search bar -->
            <div class="flex w-full md:w-auto flex-1 max-w-xl">
                <div class="relative w-full">
                    <input
                        type="text"
                        placeholder="Search"
                        class="w-full border border-gray-300 rounded-l-md py-2 px-4 focus:outline-none"
                    />
                </div>
                <button class="bg-[#71B53A] text-white px-6 py-2 rounded-r-md flex items-center justify-center">
                    <i class="fas fa-search"></i>
                </button>
            </div>

            <!-- Contact -->
            <div class="flex items-center gap-8">
                <div class="flex items-center">
                    <div class="rounded-full p-2 mr-2">
                        <img src="{{ asset('images/icontelepon.png') }}" class="w-6 h-6" />
                    </div>
                    <div class="flex flex-col">
                        <span class="text-sm text-gray-500">Customer Services</span>
                        <span class="font-semibold">(+62) 444-0114</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Navigation bar -->
    <div>
        <div class="container mx-auto px-4">
            <div class="bg-[#222222] flex items-center justify-between">
                <!-- Categories button -->
                <div class="flex items-center">
                    <button class="bg-[#71B53A] text-white flex items-center py-4 px-4 min-w-[298px]">
                        <div class="flex flex-col space-y-1 mr-2">
                            <span class="w-5 h-0.5 bg-white"></span>
                            <span class="w-5 h-0.5 bg-white"></span>
                            <span class="w-5 h-0.5 bg-white"></span>
                        </div>
                        <span>All Categories</span>
                    </button>

                    <!-- navbar-->
                    <nav class="hidden md:flex ml-6">
                        <ul class="flex text-white">
                            <li class="px-4 py-4 hover:text-[#71B53A]">
                                <a href="/home">Home</a>
                            </li>
                            <li class="px-4 py-4 hover:text-[#71B53A] flex items-center">
                                <a href="/shop">Shop</a>
                            </li>
                            <li class="px-4 py-4 hover:text-[#71B53A]">
                                <a href="/contact">Contact Us</a>
                            </li>
                        </ul>
                    </nav>
                </div>

                <!-- Cart and account -->
                <div class="flex items-center text-white">
                    @php
                        $cart = session('cart', []);
                        $cartCount = is_array($cart) ? count($cart) : 0;
                    @endphp

                    <a href="{{ route('cart.index') }}" class="p-4 relative">
                        <i class="fas fa-shopping-bag text-xl"></i>
                        @if($cartCount > 0)
                            <span class="absolute top-2 right-2 bg-green-500 text-white text-xs font-semibold rounded-full w-5 h-5 flex items-center justify-center">
                                {{ $cartCount }}
                            </span>
                        @endif
                    </a>

                    <a href="/account" class="p-4">
                        <i class="fas fa-user"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>
