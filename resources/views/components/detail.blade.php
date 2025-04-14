{{-- resources/views/components/detail.blade.php --}}

<div id="productDetailModal" class="fixed inset-0 flex items-center justify-center z-50 hidden">
    {{-- Gradient overlay --}}
    <div class="absolute inset-0 bg-gradient-to-b from-black/20 to-black/40" onclick="closeProductDetail()"></div>

    {{-- Modal content --}}
    <div class="bg-white rounded-lg max-w-4xl w-full p-6 relative z-10">
        <button onclick="closeProductDetail()" class="absolute top-4 right-4 text-gray-500 hover:text-gray-700">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>

        <div id="productDetailContent" class="flex flex-col md:flex-row gap-8">
            {{-- Content will be loaded dynamically via JavaScript --}}
        </div>
    </div>
</div>

<script>
    function showProductDetail(name, price, image, sku = '251594', discount = null, oldPrice = null) {
        // Load product details into the modal
        const content = document.getElementById('productDetailContent');

        // Calculate discount percentage if oldPrice is provided but discount is not
        if (oldPrice && !discount) {
            discount = Math.round(((oldPrice - price) / oldPrice) * 100);
        }

        // Build the HTML for the modal content
        let modalHtml = `
            <div class="w-full md:w-1/2">
                <div class="mb-4">
                    <img src="${image}" alt="${name}" class="w-full h-auto object-contain rounded-lg">
                </div>

                <div class="flex gap-2 overflow-x-auto">
                    ${Array(4).fill().map((_, i) => `
                        <div class="border rounded p-2 cursor-pointer hover:border-green-500">
                            <img src="${image}" alt="${name}" class="w-16 h-16 object-contain">
                        </div>
                    `).join('')}
                </div>
            </div>

            <div class="w-full md:w-1/2">
                <div class="flex items-center mb-2">
                    <span class="bg-green-100 text-green-800 text-xs font-medium px-2 py-1 rounded">In Stock</span>
                    <span class="text-gray-500 text-sm ml-3">SKU: ${sku}</span>
                </div>

                <h2 class="text-2xl font-bold mb-2">${name}</h2>

                <div class="flex items-center mb-4">
                    <div class="text-amber-400 flex">
                        ${Array(5).fill().map((_, i) => `
                            <span class="${i < 4 ? 'text-amber-400' : 'text-gray-300'}">★</span>
                        `).join('')}
                    </div>
                    <span class="text-gray-500 ml-2">(4 Reviews)</span>
                </div>

                <div class="flex items-baseline mb-4">
                    ${oldPrice ? `<span class="line-through text-gray-400 mr-2">$${oldPrice}</span>` : ''}
                    <span class="text-2xl font-bold text-green-600">$${price}</span>
                    ${discount ? `<span class="ml-2 bg-red-100 text-red-700 px-2 py-1 text-xs font-medium rounded">${discount}% Off</span>` : ''}
                </div>

                <p class="text-gray-600 mb-6">
                    Fresh and organic ${name.toLowerCase()} directly from our farms. Perfect for your healthy lifestyle.
                </p>

                <div class="border-t border-b py-4 my-4">
                    <div class="flex items-center gap-4 mb-4">
                        <span class="text-gray-700 font-medium">Quantity:</span>
                        <div class="flex items-center border rounded-md">
                            <button onclick="updateQuantity(-1)" class="px-3 py-1 border-r hover:bg-gray-100">-</button>
                            <input type="text" id="productQuantity" class="w-12 text-center py-1" value="1" readonly>
                            <button onclick="updateQuantity(1)" class="px-3 py-1 border-l hover:bg-gray-100">+</button>
                        </div>
                    </div>

                    <div class="flex items-center gap-4">
                        <span class="text-gray-700 font-medium">Weight:</span>
                        <select class="border rounded-md px-3 py-1">
                            <option>250g</option>
                            <option>500g</option>
                            <option>1kg</option>
                        </select>
                    </div>
                </div>

                <div class="flex gap-4 mt-6">
                    <button class="bg-green-600 text-white px-6 py-3 rounded-md font-medium hover:bg-green-700 transition-colors flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                        Add to Cart
                    </button>
                    <button class="border border-gray-300 rounded-md p-3 hover:bg-gray-50">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                        </svg>
                    </button>
                </div>

                <div class="mt-6">
                    <div class="flex items-center gap-3">
                        <span class="text-gray-700 font-medium">Category:</span>
                        <a href="#" class="text-gray-600 hover:text-green-600">Vegetables</a>
                    </div>

                    <div class="flex items-center gap-3 mb-2 mt-2">
                        <span class="text-gray-700 font-medium">Tags:</span>
                        <div class="flex flex-wrap gap-2">
                            <a href="#" class="text-gray-600 hover:text-green-600">Vegetables</a>
                            <span>•</span>
                            <a href="#" class="text-gray-600 hover:text-green-600">Healthy</a>
                            <span>•</span>
                            <a href="#" class="text-gray-600 hover:text-green-600">Chinese</a>
                            <span>•</span>
                            <a href="#" class="text-gray-600 hover:text-green-600">Cabbage</a>
                        </div>
                    </div>

                    <div class="flex items-center gap-3 mt-2">
                        <span class="text-gray-700 font-medium">Share:</span>
                        <div class="flex gap-2">
                            <a href="#" class="w-8 h-8 rounded-full bg-gray-100 flex items-center justify-center hover:bg-green-100">
                                <svg class="w-4 h-4 text-gray-600" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M5 3h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2zm13 2h-2.5A3.5 3.5 0 0 0 12 8.5V11h-2v3h2v7h3v-7h3v-3h-3V9a1 1 0 0 1 1-1h2V5z"/>
                                </svg>
                            </a>
                            <a href="#" class="w-8 h-8 rounded-full bg-gray-100 flex items-center justify-center hover:bg-green-100">
                                <svg class="w-4 h-4 text-gray-600" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M22.46 6c-.77.35-1.6.58-2.46.69.88-.53 1.56-1.37 1.88-2.38-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29 0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15 0 1.49.75 2.81 1.91 3.56-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.22 4.22 0 0 1-1.93.07 4.28 4.28 0 0 0 4 2.98 8.521 8.521 0 0 1-5.33 1.84c-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21 16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56.84-.6 1.56-1.36 2.14-2.23z"/>
                                </svg>
                            </a>
                            <a href="#" class="w-8 h-8 rounded-full bg-gray-100 flex items-center justify-center hover:bg-green-100">
                                <svg class="w-4 h-4 text-gray-600" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M20 5H4v14l9.292-9.294a1 1 0 0 1 1.414 0L20 15.01V5zM2 3h20a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2zm8 15a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                                </svg>
                            </a>
                            <a href="#" class="w-8 h-8 rounded-full bg-gray-100 flex items-center justify-center hover:bg-green-100">
                                <svg class="w-4 h-4 text-gray-600" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 9a3 3 0 1 0 0 6 3 3 0 0 0 0-6zm0-4.5c5 0 9.27 3.11 11 7.5-1.73 4.39-6 7.5-11 7.5S2.73 16.39 1 12c1.73-4.39 6-7.5 11-7.5zM3.18 12a9.821 9.821 0 0 0 17.64 0 9.821 9.821 0 0 0-17.64 0z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        `;

        content.innerHTML = modalHtml;

        // Show the modal
        document.getElementById('productDetailModal').classList.remove('hidden');

        // Prevent body scrolling when modal is open
        document.body.style.overflow = 'hidden';
    }

    function closeProductDetail() {
        document.getElementById('productDetailModal').classList.add('hidden');

        // Re-enable body scrolling when modal is closed
        document.body.style.overflow = '';
    }

    function updateQuantity(change) {
        const quantityElement = document.getElementById('productQuantity');
        let quantity = parseInt(quantityElement.value);
        quantity = Math.max(1, quantity + change); // Ensure quantity doesn't go below 1
        quantityElement.value = quantity;
    }

    // Close modal when pressing ESC key
    document.addEventListener('keydown', function(event) {
        if (event.key === 'Escape' && !document.getElementById('productDetailModal').classList.contains('hidden')) {
            closeProductDetail();
        }
    });
</script>
