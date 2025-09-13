@extends('layouts.app')

@section('title', 'Order Confirmed')

@section('content')
<main class="main-root">
    <!-- Success Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="max-w-2xl mx-auto text-center">
                <div class="mb-8">
                    <div class="w-20 h-20 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-10 h-10 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                    </div>
                    <h1 class="text-4xl font-bold text-gray-900 mb-4">Order Confirmed!</h1>
                    <p class="text-xl text-gray-600 mb-8">Thank you for your order. We'll be in touch soon to discuss your project details.</p>
                </div>
                
                <div class="bg-white rounded-lg shadow-lg p-8 mb-8">
                    <h2 class="text-2xl font-semibold text-gray-900 mb-6">Order Details</h2>
                    <div class="text-left space-y-4">
                        <div class="flex justify-between">
                            <span class="text-gray-600">Order ID:</span>
                            <span class="font-medium" id="order-id">{{ $order_id ?? 'N/A' }}</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600">Order Date:</span>
                            <span class="font-medium" id="order-date">{{ date('M d, Y') }}</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600">Status:</span>
                            <span class="font-medium text-green-600">Confirmed</span>
                        </div>
                    </div>
                </div>
                
                <div class="space-y-4">
                    <p class="text-gray-600">Our team will contact you within 24 hours to discuss your project requirements and timeline.</p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="/" class="inline-block bg-gray-900 text-white px-8 py-3 rounded-lg font-medium hover:bg-gray-700 transition-colors">
                            Back to Home
                        </a>
                        <a href="/pricing" class="inline-block border border-gray-300 text-gray-700 px-8 py-3 rounded-lg font-medium hover:bg-gray-50 transition-colors">
                            Browse More Services
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
