<main class="container mx-auto py-4 px-4">
    <div class="flex flex-col md:flex-row gap-4">
        <!-- Sidebar Categories -->
        <div class="w-full md:w-1/4 border border-gray-200">
            <ul class="divide-y divide-gray-200">
                <li class="py-3 px-4 hover:bg-gray-100 cursor-pointer flex items-center">
                    <span class="mr-4">🥬</span>
                    <span>Vegetables</span>
                </li>
                <li class="py-3 px-4 hover:bg-gray-100 cursor-pointer flex items-center">
                    <span class="mr-4">🍎</span>
                    <span>Fresh Fruit</span>
                </li>
                <li class="py-3 px-4 hover:bg-gray-100 cursor-pointer flex items-center">
                    <span class="mr-4">🐟</span>
                    <span>River Fish</span>
                </li>
                <li class="py-3 px-4 hover:bg-gray-100 cursor-pointer flex items-center">
                    <span class="mr-4">🥩</span>
                    <span>Chicken & Meat</span>
                </li>
                <li class="py-3 px-4 hover:bg-gray-100 cursor-pointer flex items-center">
                    <span class="mr-4">🥤</span>
                    <span>Drink & Water</span>
                </li>
                <li class="py-3 px-4 hover:bg-gray-100 cursor-pointer flex items-center">
                    <span class="mr-4">🍦</span>
                    <span>Yogurt & Ice Cream</span>
                </li>
                <li class="py-3 px-4 hover:bg-gray-100 cursor-pointer flex items-center">
                    <span class="mr-4">🍰</span>
                    <span>Cake & Bread</span>
                </li>
                <li class="py-3 px-4 hover:bg-gray-100 cursor-pointer flex items-center">
                    <span class="mr-4">🧈</span>
                    <span>Butter & Cream</span>
                </li>
                <li class="py-3 px-4 hover:bg-gray-100 cursor-pointer flex items-center">
                    <span class="mr-4">🍳</span>
                    <span>Cooking</span>
                </li>
                <li class="py-3 px-4 hover:bg-gray-100 cursor-pointer flex items-center">
                    <span class="mr-4">+</span>
                    <span>View all Category</span>
                </li>
            </ul>
        </div>

        <!-- Hero Slider -->
        <div class="relative w-full overflow-hidden h-[500px]">
            <div id="heroSlider" class="relative h-full">
                <!-- Slide 1 -->
                <div class="absolute inset-0 transition-opacity duration-1000 opacity-100 slide">
                    <div class="flex h-full bg-[#1A5632] text-white">
                        <div class="p-10 md:p-16 flex flex-col justify-center flex-1">
                            <h2 class="text-3xl md:text-5xl font-bold mb-4">Fresh & Healthy</h2>
                            <h1 class="text-3xl md:text-5xl font-bold mb-6">Organic Food</h1>
                            <p class="text-xl mb-2">SALE UP TO</p>
                            <p class="text-4xl font-bold mb-8">48% OFF</p>
                            <a href="/shop" class="bg-green-600 hover:bg-green-700 rounded-full py-2 px-5 text-white inline-flex items-center text-sm md:text-base whitespace-nowrap max-w-fit">
                                Shop now
                                <i class="fas fa-arrow-right ml-2"></i>
                            </a>
                        </div>
                        <img src="{{ asset('images/salad.png') }}" class="w-1/2 h-full object-cover object-left" />
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="absolute inset-0 transition-opacity duration-1000 opacity-0 slide">
                    <div class="relative w-full h-full">
                        <img src="{{ asset('images/bread.jpg') }}" class="absolute inset-0 w-full h-full object-cover z-0" alt="Bread Background" />
                        <div class="absolute inset-0 bg-gradient-to-r from-black/30 to-transparent z-10"></div>
                        <div class="relative z-20 h-full flex flex-col justify-center items-start p-10 md:p-16 text-white">
                            <h2 class="text-3xl md:text-5xl font-bold mb-4">Tasty & Warm</h2>
                            <h1 class="text-3xl md:text-5xl font-bold mb-6">Fresh Bread</h1>
                            <p class="text-xl mb-2">SAVE UP TO</p>
                            <p class="text-4xl font-bold mb-8">30% OFF</p>
                            <a href="/shop" class="bg-yellow-600 hover:bg-yellow-700 rounded-full py-2 px-5 text-white inline-flex items-center text-sm md:text-base whitespace-nowrap max-w-fit">
                                Shop now
                                <i class="fas fa-arrow-right ml-2"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="absolute inset-0 transition-opacity duration-1000 opacity-0 slide">
                    <div class="relative w-full h-full">
                        <img src="{{ asset('images/juice.jpg.webp') }}" class="absolute inset-0 w-full h-full object-cover z-0" />
                        <div class="absolute inset-0 bg-gradient-to-r from-black/30 to-transparent z-10"></div>
                        <div class="relative z-20 h-full flex flex-col justify-center items-start p-10 md:p-16 text-white">
                            <h2 class="text-3xl md:text-5xl font-bold mb-4">Fresh Drinks</h2>
                            <h1 class="text-3xl md:text-5xl font-bold mb-6">Cold & Juicy</h1>
                            <p class="text-xl mb-2">GET NOW</p>
                            <p class="text-4xl font-bold mb-8">Buy 1 Get 1</p>
                            <a href="/shop" class="bg-red-900 hover:bg-blue-700 rounded-full py-2 px-5 text-white inline-flex items-center text-sm md:text-base whitespace-nowrap max-w-fit">
                                Shop now
                                <i class="fas fa-arrow-right ml-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Dot navigation -->
                <div class="absolute bottom-6 left-16 flex space-x-2 z-20">
                    <span class="w-2 h-2 bg-white rounded-full opacity-100 dot"></span>
                    <span class="w-2 h-2 bg-white rounded-full opacity-50 dot"></span>
                    <span class="w-2 h-2 bg-white rounded-full opacity-50 dot"></span>
                </div>
            </div>
        </div>
    </div>

    <!-- JS Script -->
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const slides = document.querySelectorAll("#heroSlider .slide");
            const dots = document.querySelectorAll(".dot");
            let current = 0;

            setInterval(() => {
                slides[current].classList.remove("opacity-100");
                slides[current].classList.add("opacity-0");
                dots[current].classList.remove("opacity-100");
                dots[current].classList.add("opacity-50");

                current = (current + 1) % slides.length;

                slides[current].classList.remove("opacity-0");
                slides[current].classList.add("opacity-100");
                dots[current].classList.remove("opacity-50");
                dots[current].classList.add("opacity-100");
            }, 5000);
        });
    </script>

    <!-- Features Section -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mt-12">
        @foreach ([
     ['icon' => 'delivery-truck.png', 'title' => 'Free Shipping', 'desc' => 'Free shipping with discount'],
     ['icon' => 'headphones.png', 'title' => 'Great Support 24/7', 'desc' => 'Instant access to Contact'],
     ['icon' => 'shopping-bag1.png', 'title' => '100% Secure Payment', 'desc' => 'We ensure your money is safe'],
     ['icon' => 'package.png', 'title' => 'Money-Back Guarantee', 'desc' => '30 days money-back'],
 ] as $feature)

            <div class="flex items-center justify-center bg-gray-50 p-6 rounded-md border border-gray-100">
                <div class="p-3 bg-gray-100 rounded-full mr-4">
                    <img src="{{ asset('images/' . $feature['icon']) }}" class="w-10 h-10" />
                </div>

                <div>
                    <h3 class="font-bold text-lg">{{ $feature['title'] }}</h3>
                    <p class="text-sm text-gray-500">{{ $feature['desc'] }}</p>
                </div>
            </div>
        @endforeach
    </div>
</main>
