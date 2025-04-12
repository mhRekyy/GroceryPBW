@extends('layouts.app')

@section('content')
    <main class="flex-grow">
        {{-- Hero Section --}}
        <div class="bg-gradient-to-r from-grocery-light to-white py-12">
            <div class="container mx-auto px-4 text-center">
                <h1 class="text-4xl font-bold text-gray-800 mb-4">Contact Us</h1>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    We're here to help! Reach out to our team for any questions, feedback, or assistance you need.
                </p>
            </div>
        </div>

        {{-- Contact Info & Form --}}
        <div class="container mx-auto px-4 py-12">
            <div class="flex flex-col lg:flex-row gap-8">
                {{-- Contact Info --}}
                <div class="lg:w-1/3">
                    <div class="bg-white rounded-lg shadow-md p-6 h-full">
                        <h2 class="text-2xl font-bold text-gray-800 mb-6">Get In Touch</h2>

                        <div class="space-y-6">
                            <div class="flex items-start">
                                <div class="bg-grocery-light p-3 rounded-full mr-4">
                                    <i data-lucide="phone" class="h-5 w-5 text-grocery-primary"></i>
                                </div>
                                <div>
                                    <h3 class="font-medium text-gray-800">Phone</h3>
                                    <p class="text-gray-600 mt-1">+62 123 456 7890</p>
                                    <p class="text-gray-600">Monday - Friday, 9am - 6pm</p>
                                </div>
                            </div>

                            <div class="flex items-start">
                                <div class="bg-grocery-light p-3 rounded-full mr-4">
                                    <i data-lucide="mail" class="h-5 w-5 text-grocery-primary"></i>
                                </div>
                                <div>
                                    <h3 class="font-medium text-gray-800">Email</h3>
                                    <p class="text-gray-600 mt-1">info@simpang5groceries.com</p>
                                    <p class="text-gray-600">support@simpang5groceries.com</p>
                                </div>
                            </div>

                            <div class="flex items-start">
                                <div class="bg-grocery-light p-3 rounded-full mr-4">
                                    <i data-lucide="map-pin" class="h-5 w-5 text-grocery-primary"></i>
                                </div>
                                <div>
                                    <h3 class="font-medium text-gray-800">Location</h3>
                                    <p class="text-gray-600 mt-1">123 Grocery Street</p>
                                    <p class="text-gray-600">Jakarta, Indonesia 12345</p>
                                </div>
                            </div>
                        </div>

                        <div class="mt-8">
                            <h3 class="font-medium text-gray-800 mb-3">Follow Us</h3>
                            <div class="flex space-x-4">
                                @include('components.social-icons')
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Contact Form --}}
                <div class="lg:w-2/3">
                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h2 class="text-2xl font-bold text-gray-800 mb-6">Send us a Message</h2>

                        @if (session('success'))
                            <div class="bg-green-100 text-green-800 p-4 rounded mb-4">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('contact.submit') }}">
                            @csrf
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                                <div>
                                    <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Your Name</label>
                                    <input type="text" id="name" name="name" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-grocery-primary" required>
                                </div>
                                <div>
                                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                                    <input type="email" id="email" name="email" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-grocery-primary" required>
                                </div>
                            </div>

                            <div class="mb-6">
                                <label for="subject" class="block text-sm font-medium text-gray-700 mb-1">Subject</label>
                                <select id="subject" name="subject" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-grocery-primary" required>
                                    <option value="">Select a subject</option>
                                    <option value="general">General Inquiry</option>
                                    <option value="orders">Order Information</option>
                                    <option value="products">Product Inquiry</option>
                                    <option value="feedback">Feedback</option>
                                </select>
                            </div>

                            <div class="mb-6">
                                <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Message</label>
                                <textarea id="message" name="message" rows="5" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-grocery-primary" required></textarea>
                            </div>

                            <button type="submit" class="btn-primary w-full md:w-auto px-8 ">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        {{-- Map Section --}}
        <div class="h-96 bg-gray-200 w-full">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d997.0599054457174!2d95.3167217694786!3d5.547002999999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x304037865f660db1%3A0x56fa712b6f274709!2sJl.%20Tengku%20Angkasa%20H.%20Abdullah%2C%20Ujong%20Rimba%2C%20Banda%20Aceh!5e0!3m2!1sen!2sid!4v1712827191006!5m2!1sen!2sid"
            width="100%"
            height="450"
            style="border:0;"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </main>
@endsection
