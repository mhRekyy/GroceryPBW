<footer class="bg-white pt-10 pb-6 border-t">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-8">

            {{-- Column 1 --}}
            <div>
                <div class="text-[#71B53A] text-2xl font-bold mb-4">
                    Grocery
                </div>
                <p class="text-gray-600 mb-4">
                    Grocery adalah platform belanja online terpercaya yang menyediakan produk organik segar dari pertanian lokal.
                </p>
                <div class="text-gray-600">
                    <div class="flex items-center mb-2">
                        <span class="font-medium">Email:</span>
                        <a href="mailto:support@ecobazar.com" class="ml-2 hover:text-[#71B53A]">
                            support@Grocery.com
                        </a>
                    </div>
                    <div class="flex items-center">
                        <span class="font-medium">Call us:</span>
                        <a href="tel:+6285156220134" class="ml-2 hover:text-[#71B53A]">
                            (+62) 444-0114
                        </a>
                    </div>
                </div>
            </div>

            {{-- Column 2 --}}
            <div>
                <h3 class="font-semibold text-lg mb-4">Belanja</h3>
                <ul class="space-y-3">
                    <li><a href="#" class="text-gray-600 hover:text-[#71B53A]">Sayuran & Buah</a></li>
                    <li><a href="#" class="text-gray-600 hover:text-[#71B53A]">Daging & Ikan</a></li>
                    <li><a href="#" class="text-gray-600 hover:text-[#71B53A]">Camilan</a></li>
                    <li><a href="#" class="text-gray-600 hover:text-[#71B53A]">Bakery</a></li>
                    <li><a href="#" class="text-gray-600 hover:text-[#71B53A]">Minuman</a></li>
                </ul>
            </div>

        </div>

        <div class="border-t border-gray-200 mt-10 pt-6">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <p class="text-gray-600 text-sm mb-4 md:mb-0">
                    &copy; {{ date('Y') }} Grocery. All rights reserved.
                </p>
                <div class="flex space-x-4 items-center">
                    <img src="https://cdn-icons-png.flaticon.com/512/196/196578.png" alt="Visa" class="h-8" />
                    <img src="https://cdn-icons-png.flaticon.com/512/196/196566.png" alt="MasterCard" class="h-8" />
                    <img src="https://cdn-icons-png.flaticon.com/512/196/196561.png" alt="PayPal" class="h-8" />
                </div>
            </div>
        </div>
    </div>
</footer>
