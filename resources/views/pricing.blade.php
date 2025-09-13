@extends('layouts.app')

@section('title', 'Pricing')

@section('content')
<main class="main-root">
    <!-- Hero Section -->
    <section class="relative w-screen h-[60vh] flex items-center justify-center bg-gradient-to-br from-gray-900 via-black to-gray-800">
        <div class="text-center text-white z-10">
            <h1 class="text-4xl md:text-6xl font-bold mb-6">Our Pricing</h1>
            <p class="text-xl md:text-2xl opacity-90">Choose the perfect plan for your content localization needs</p>
        </div>
        <div class="absolute inset-0 bg-black opacity-20"></div>
    </section>

    <!-- Currency Switch -->
    <section class="py-8 bg-gray-50">
        <div class="container mx-auto px-4 text-center">
            <div class="inline-flex items-center bg-white rounded-full p-1 shadow-md border border-gray-200">
                <span class="px-4 text-sm font-medium text-gray-600">USD</span>
                <button id="currency-switch" class="relative inline-flex h-6 w-11 items-center rounded-full bg-gray-200 transition-colors focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2">
                    <span id="currency-switch-handle" class="inline-block h-4 w-4 transform rounded-full bg-white shadow transition-transform translate-x-1"></span>
                </button>
                <span class="px-4 text-sm font-medium text-gray-600">INR</span>
            </div>
        </div>
    </section>

    <!-- Pricing Cards -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                
                <!-- Subtitling -->
                <div class="bg-white rounded-xl shadow-lg border border-gray-200 overflow-hidden hover:shadow-xl transition-shadow duration-300">
                    <div class="p-8">
                        <div class="text-center mb-6">
                            <h3 class="text-2xl font-bold text-gray-900 mb-2">Subtitling</h3>
                            <p class="text-gray-600">Professional subtitle creation and translation</p>
                        </div>
                        <div class="text-center mb-6">
                            <span class="text-4xl font-bold text-gray-900" data-inr="155000" data-usd="1867">₹1,55,000</span>
                            <span class="text-gray-500 ml-2">/project</span>
                        </div>
                        <ul class="space-y-3 mb-8">
                            <li class="flex items-center text-gray-700">
                                <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                Multi-language support
                            </li>
                            <li class="flex items-center text-gray-700">
                                <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                Professional quality assurance
                            </li>
                            <li class="flex items-center text-gray-700">
                                <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                Fast turnaround time
                            </li>
                        </ul>
                        <button class="w-full bg-gray-900 text-white py-3 px-6 rounded-lg font-medium hover:bg-gray-700 transition-colors duration-300 add-to-cart" 
                                data-service="Subtitling" data-price-inr="155000" data-price-usd="1867">
                            Add to Cart
                        </button>
                    </div>
                </div>

                <!-- Dubbing -->
                <div class="bg-white rounded-xl shadow-lg border border-gray-200 overflow-hidden hover:shadow-xl transition-shadow duration-300">
                    <div class="p-8">
                        <div class="text-center mb-6">
                            <h3 class="text-2xl font-bold text-gray-900 mb-2">Dubbing</h3>
                            <p class="text-gray-600">Professional voice-over and dubbing services</p>
                        </div>
                        <div class="text-center mb-6">
                            <span class="text-4xl font-bold text-gray-900" data-inr="254000" data-usd="3060">₹2,54,000</span>
                            <span class="text-gray-500 ml-2">/project</span>
                        </div>
                        <ul class="space-y-3 mb-8">
                            <li class="flex items-center text-gray-700">
                                <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                Native voice actors
                            </li>
                            <li class="flex items-center text-gray-700">
                                <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                Studio quality recording
                            </li>
                            <li class="flex items-center text-gray-700">
                                <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                Lip-sync accuracy
                            </li>
                        </ul>
                        <button class="w-full bg-gray-900 text-white py-3 px-6 rounded-lg font-medium hover:bg-gray-700 transition-colors duration-300 add-to-cart" 
                                data-service="Dubbing" data-price-inr="254000" data-price-usd="3060">
                            Add to Cart
                        </button>
                    </div>
                </div>

                <!-- Accessibility -->
                <div class="bg-white rounded-xl shadow-lg border border-gray-200 overflow-hidden hover:shadow-xl transition-shadow duration-300">
                    <div class="p-8">
                        <div class="text-center mb-6">
                            <h3 class="text-2xl font-bold text-gray-900 mb-2">Accessibility</h3>
                            <p class="text-gray-600">Audio description and accessibility features</p>
                        </div>
                        <div class="text-center mb-6">
                            <span class="text-4xl font-bold text-gray-900" data-inr="168000" data-usd="2024">₹1,68,000</span>
                            <span class="text-gray-500 ml-2">/project</span>
                        </div>
                        <ul class="space-y-3 mb-8">
                            <li class="flex items-center text-gray-700">
                                <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                Audio descriptions
                            </li>
                            <li class="flex items-center text-gray-700">
                                <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                Closed captions
                            </li>
                            <li class="flex items-center text-gray-700">
                                <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                WCAG compliance
                            </li>
                        </ul>
                        <button class="w-full bg-gray-900 text-white py-3 px-6 rounded-lg font-medium hover:bg-gray-700 transition-colors duration-300 add-to-cart" 
                                data-service="Accessibility" data-price-inr="168000" data-price-usd="2024">
                            Add to Cart
                        </button>
                    </div>
                </div>

                <!-- Speech Recognition -->
                <div class="bg-white rounded-xl shadow-lg border border-gray-200 overflow-hidden hover:shadow-xl transition-shadow duration-300">
                    <div class="p-8">
                        <div class="text-center mb-6">
                            <h3 class="text-2xl font-bold text-gray-900 mb-2">Speech Recognition</h3>
                            <p class="text-gray-600">AI-powered speech-to-text solutions</p>
                        </div>
                        <div class="text-center mb-6">
                            <span class="text-4xl font-bold text-gray-900" data-inr="255000" data-usd="3072">₹2,55,000</span>
                            <span class="text-gray-500 ml-2">/project</span>
                        </div>
                        <ul class="space-y-3 mb-8">
                            <li class="flex items-center text-gray-700">
                                <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                AI transcription
                            </li>
                            <li class="flex items-center text-gray-700">
                                <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                Multi-language support
                            </li>
                            <li class="flex items-center text-gray-700">
                                <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                High accuracy rates
                            </li>
                        </ul>
                        <button class="w-full bg-gray-900 text-white py-3 px-6 rounded-lg font-medium hover:bg-gray-700 transition-colors duration-300 add-to-cart" 
                                data-service="Speech Recognition" data-price-inr="255000" data-price-usd="3072">
                            Add to Cart
                        </button>
                    </div>
                </div>

                <!-- Distribution -->
                <div class="bg-white rounded-xl shadow-lg border border-gray-200 overflow-hidden hover:shadow-xl transition-shadow duration-300">
                    <div class="p-8">
                        <div class="text-center mb-6">
                            <h3 class="text-2xl font-bold text-gray-900 mb-2">Distribution</h3>
                            <p class="text-gray-600">Global content distribution services</p>
                        </div>
                        <div class="text-center mb-6">
                            <span class="text-4xl font-bold text-gray-900" data-inr="354000" data-usd="4265">₹3,54,000</span>
                            <span class="text-gray-500 ml-2">/project</span>
                        </div>
                        <ul class="space-y-3 mb-8">
                            <li class="flex items-center text-gray-700">
                                <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                Global reach
                            </li>
                            <li class="flex items-center text-gray-700">
                                <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                Multi-platform delivery
                            </li>
                            <li class="flex items-center text-gray-700">
                                <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                Analytics & reporting
                            </li>
                        </ul>
                        <button class="w-full bg-gray-900 text-white py-3 px-6 rounded-lg font-medium hover:bg-gray-700 transition-colors duration-300 add-to-cart" 
                                data-service="Distribution" data-price-inr="354000" data-price-usd="4265">
                            Add to Cart
                        </button>
                    </div>
                </div>

                <!-- Creative Post Production -->
                <div class="bg-white rounded-xl shadow-lg border border-gray-200 overflow-hidden hover:shadow-xl transition-shadow duration-300">
                    <div class="p-8">
                        <div class="text-center mb-6">
                            <h3 class="text-2xl font-bold text-gray-900 mb-2">Creative Post Production</h3>
                            <p class="text-gray-600">Complete post-production services</p>
                        </div>
                        <div class="text-center mb-6">
                            <span class="text-4xl font-bold text-gray-900" data-inr="435000" data-usd="5241">₹4,35,000</span>
                            <span class="text-gray-500 ml-2">/project</span>
                        </div>
                        <ul class="space-y-3 mb-8">
                            <li class="flex items-center text-gray-700">
                                <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                Video editing
                            </li>
                            <li class="flex items-center text-gray-700">
                                <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                Color grading
                            </li>
                            <li class="flex items-center text-gray-700">
                                <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                Motion graphics
                            </li>
                        </ul>
                        <button class="w-full bg-gray-900 text-white py-3 px-6 rounded-lg font-medium hover:bg-gray-700 transition-colors duration-300 add-to-cart" 
                                data-service="Creative Post Production" data-price-inr="435000" data-price-usd="5241">
                            Add to Cart
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Cart Summary (Fixed Bottom) -->
    <div id="cart-summary" class="fixed bottom-0 left-0 right-0 bg-white border-t border-gray-200 shadow-lg transform translate-y-full transition-transform duration-300 z-50">
        <div class="container mx-auto px-4 py-4">
            <div class="flex items-center justify-between">
                <div class="flex items-center space-x-4">
                    <span class="text-lg font-medium text-gray-900">Cart (<span id="cart-count">0</span> items)</span>
                    <span class="text-xl font-bold text-gray-900" id="cart-total">₹0</span>
                </div>
                <div class="flex space-x-3">
                    <button id="view-cart" class="text-gray-900 px-4 py-2 border border-gray-300 rounded-lg hover:bg-gray-50 transition-colors">
                        View Cart
                    </button>
                    <button id="checkout-btn" class="px-6 py-2 bg-gray-900 text-white rounded-lg hover:bg-gray-700 transition-colors">
                        Checkout
                    </button>
                </div>
            </div>
        </div>
    </div>
</main>

<script>
document.addEventListener('DOMContentLoaded', function() {
    let currentCurrency = 'INR';
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    
    // Currency conversion rate (1 USD = 83 INR)
    const conversionRate = 83;
    
    // Update currency display
    function updateCurrency() {
        const prices = document.querySelectorAll('[data-inr][data-usd]');
        const currencySpan = document.getElementById('current-currency');
        
        prices.forEach(price => {
            const inrPrice = parseInt(price.dataset.inr);
            const usdPrice = parseInt(price.dataset.usd);
            
            if (currentCurrency === 'USD') {
                price.textContent = '$' + usdPrice.toLocaleString();
            } else {
                price.textContent = '₹' + inrPrice.toLocaleString();
            }
        });
        
        updateCartDisplay();
    }
    
    // Update cart display
    function updateCartDisplay() {
        const cartCount = document.getElementById('cart-count');
        const cartTotal = document.getElementById('cart-total');
        const cartSummary = document.getElementById('cart-summary');
        
        cartCount.textContent = cart.length;
        
        if (cart.length > 0) {
            const total = cart.reduce((sum, item) => {
                return sum + (currentCurrency === 'USD' ? item.priceUSD : item.priceINR);
            }, 0);
            
            cartTotal.textContent = currentCurrency === 'USD' ? '$' + total.toLocaleString() : '₹' + total.toLocaleString();
            cartSummary.classList.remove('translate-y-full');
        } else {
            cartSummary.classList.add('translate-y-full');
        }
    }
    
    // Currency switch
    document.getElementById('currency-switch').addEventListener('click', function() {
        const switchHandle = document.getElementById('currency-switch-handle');
        const switchButton = this;
        
        currentCurrency = currentCurrency === 'USD' ? 'INR' : 'USD';
        
        if (currentCurrency === 'INR') {
            switchHandle.classList.remove('translate-x-1');
            switchHandle.classList.add('translate-x-6');
            switchButton.classList.remove('bg-gray-200');
            switchButton.classList.add('bg-gray-900');
        } else {
            switchHandle.classList.remove('translate-x-6');
            switchHandle.classList.add('translate-x-1');
            switchButton.classList.remove('bg-gray-900');
            switchButton.classList.add('bg-gray-200');
        }
        
        updateCurrency();
        // Store currency preference
        localStorage.setItem('preferredCurrency', currentCurrency);
        
        // Update navigation currency selector
        const navCurrencySelector = document.getElementById('currency-selector');
        if (navCurrencySelector) {
            navCurrencySelector.value = currentCurrency;
        }
    });
    
    // Add to cart
    document.querySelectorAll('.add-to-cart').forEach(button => {
        button.addEventListener('click', function() {
            const service = this.dataset.service;
            const priceINR = parseInt(this.dataset.priceInr);
            const priceUSD = parseInt(this.dataset.priceUsd);
            
            // Check if item already exists in cart
            const existingItem = cart.find(item => item.service === service);
            
            if (existingItem) {
                existingItem.quantity += 1;
            } else {
                cart.push({
                    service: service,
                    priceINR: priceINR,
                    priceUSD: priceUSD,
                    quantity: 1
                });
            }
            
            localStorage.setItem('cart', JSON.stringify(cart));
            updateCartDisplay();
            
            // Show success message
            this.textContent = 'Added!';
            this.classList.add('bg-green-600');
            setTimeout(() => {
                this.textContent = 'Add to Cart';
                this.classList.remove('bg-green-600');
            }, 1000);
        });
    });
    
    // View cart
    document.getElementById('view-cart').addEventListener('click', function() {
        window.location.href = '/cart';
    });
    
    // Checkout
    document.getElementById('checkout-btn').addEventListener('click', function() {
        window.location.href = '/checkout';
    });
    
    // Initialize with stored preference or default to INR
    const storedCurrency = localStorage.getItem('preferredCurrency');
    if (storedCurrency) {
        currentCurrency = storedCurrency;
        // Update switch position
        const switchHandle = document.getElementById('currency-switch-handle');
        const switchButton = document.getElementById('currency-switch');
        
        if (currentCurrency === 'INR') {
            switchHandle.classList.remove('translate-x-1');
            switchHandle.classList.add('translate-x-6');
            switchButton.classList.remove('bg-gray-200');
            switchButton.classList.add('bg-gray-900');
        }
    }
    
    updateCurrency();
    updateCartDisplay();
});
</script>
@endsection
