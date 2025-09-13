@extends('layouts.app')

@section('title', 'Shopping Cart')

@section('content')
<main class="main-root">
    <!-- Hero Section -->
    <section class="relative w-screen h-[40vh] flex items-center justify-center bg-gradient-to-br from-gray-900 via-black to-gray-800">
        <div class="text-center text-white z-10">
            <h1 class="text-4xl md:text-6xl font-bold mb-6">Shopping Cart</h1>
            <p class="text-xl md:text-2xl opacity-90">Review your selected services</p>
        </div>
        <div class="absolute inset-0 bg-black opacity-20"></div>
    </section>

    <!-- Cart Content -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div id="cart-empty" class="text-center py-16 hidden">
                <div class="text-gray-400 mb-8">
                    <svg class="w-24 h-24 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M3 3h2l.4 2M7 13h10l4-8H5.4m0 0L7 13m0 0l-2.5 5M7 13l2.5 5m6-5v6a2 2 0 01-2 2H9a2 2 0 01-2-2v-6m8 0V9a2 2 0 00-2-2H9a2 2 0 00-2 2v4.01"></path>
                    </svg>
                </div>
                <h2 class="text-2xl font-bold text-gray-900 mb-4">Your cart is empty</h2>
                <p class="text-gray-600 mb-8">Add some services to get started</p>
                <a href="/pricing" class="inline-block bg-gray-900 text-white px-8 py-3 rounded-lg font-medium hover:bg-gray-700 transition-colors">
                    Browse Services
                </a>
            </div>

            <div id="cart-content" class="max-w-4xl mx-auto">
                <!-- Cart Items -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="px-6 py-4 border-b border-gray-200">
                        <h2 class="text-xl font-semibold text-gray-900">Cart Items</h2>
                    </div>
                    <div id="cart-items" class="divide-y divide-gray-200">
                        <!-- Cart items will be populated by JavaScript -->
                    </div>
                </div>

                <!-- Cart Summary -->
                <div class="mt-8 bg-white rounded-lg shadow-lg p-6">
                    <h3 class="text-lg font-semibold text-gray-900 mb-4">Order Summary</h3>
                    <div class="space-y-3">
                        <div class="flex justify-between">
                            <span class="text-gray-600">Subtotal:</span>
                            <span class="font-medium" id="subtotal">$0</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600">Tax (10%):</span>
                            <span class="font-medium" id="tax">$0</span>
                        </div>
                        <div class="border-t border-gray-200 pt-3">
                            <div class="flex justify-between">
                                <span class="text-lg font-semibold text-gray-900">Total:</span>
                                <span class="text-lg font-semibold text-gray-900" id="total">₹0</span>
                            </div>
                        </div>
                    </div>
                    <div class="mt-6 flex space-x-4">
                        <a href="/pricing" class="text-gray-900 flex-1 text-center px-6 py-3 border border-gray-300 rounded-lg hover:bg-gray-50 transition-colors">
                            Continue Shopping
                        </a>
                        <button id="proceed-checkout" class="flex-1 bg-gray-900 text-white px-6 py-3 rounded-lg font-medium hover:bg-gray-700 transition-colors">
                            Proceed to Checkout
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<script>
document.addEventListener('DOMContentLoaded', function() {
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    let currentCurrency = localStorage.getItem('preferredCurrency') || 'INR';
    
    function updateCartDisplay() {
        const cartEmpty = document.getElementById('cart-empty');
        const cartContent = document.getElementById('cart-content');
        const cartItems = document.getElementById('cart-items');
        
        if (cart.length === 0) {
            cartEmpty.classList.remove('hidden');
            cartContent.classList.add('hidden');
            return;
        }
        
        cartEmpty.classList.add('hidden');
        cartContent.classList.remove('hidden');
        
        // Clear existing items
        cartItems.innerHTML = '';
        
        let subtotal = 0;
        
        cart.forEach((item, index) => {
            const price = currentCurrency === 'USD' ? item.priceUSD : item.priceINR;
            const totalPrice = price * item.quantity;
            subtotal += totalPrice;
            
            const cartItem = document.createElement('div');
            cartItem.className = 'p-6';
            cartItem.innerHTML = `
                <div class="flex items-center justify-between">
                    <div class="flex-1">
                        <h3 class="text-lg font-medium text-gray-900">${item.service}</h3>
                        <p class="text-sm text-gray-600">Professional ${item.service.toLowerCase()} services</p>
                    </div>
                    <div class="flex items-center space-x-4">
                        <div class="flex items-center space-x-2">
                            <button class="text-gray-900 quantity-btn w-8 h-8 rounded-full border border-gray-300 flex items-center justify-center hover:bg-gray-50" data-index="${index}" data-action="decrease">-</button>
                            <span class="text-gray-900 w-8 text-center font-medium">${item.quantity}</span>
                            <button class="text-gray-900 quantity-btn w-8 h-8 rounded-full border border-gray-300 flex items-center justify-center hover:bg-gray-50" data-index="${index}" data-action="increase">+</button>
                        </div>
                        <div class="text-right">
                            <div class="text-lg font-semibold text-gray-900">${currentCurrency === 'USD' ? '$' : '₹'}${totalPrice.toLocaleString()}</div>
                            <div class="text-sm text-gray-600">${currentCurrency === 'USD' ? '$' : '₹'}${price.toLocaleString()} each</div>
                        </div>
                        <button class="remove-item text-red-600 hover:text-red-800 ml-4" data-index="${index}">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            `;
            cartItems.appendChild(cartItem);
        });
        
        // Update totals
        const tax = subtotal * 0.1;
        const total = subtotal + tax;
        
        document.getElementById('subtotal').textContent = (currentCurrency === 'USD' ? '$' : '₹') + subtotal.toLocaleString();
        document.getElementById('tax').textContent = (currentCurrency === 'USD' ? '$' : '₹') + tax.toLocaleString();
        document.getElementById('total').textContent = (currentCurrency === 'USD' ? '$' : '₹') + total.toLocaleString();
    }
    
    // Quantity buttons
    document.addEventListener('click', function(e) {
        if (e.target.classList.contains('quantity-btn')) {
            const index = parseInt(e.target.dataset.index);
            const action = e.target.dataset.action;
            
            if (action === 'increase') {
                cart[index].quantity += 1;
            } else if (action === 'decrease' && cart[index].quantity > 1) {
                cart[index].quantity -= 1;
            }
            
            localStorage.setItem('cart', JSON.stringify(cart));
            updateCartDisplay();
        }
        
        if (e.target.classList.contains('remove-item') || e.target.closest('.remove-item')) {
            const index = parseInt(e.target.dataset.index || e.target.closest('.remove-item').dataset.index);
            cart.splice(index, 1);
            localStorage.setItem('cart', JSON.stringify(cart));
            updateCartDisplay();
        }
    });
    
    // Proceed to checkout
    document.getElementById('proceed-checkout').addEventListener('click', function() {
        window.location.href = '/checkout';
    });
    
    // Initialize
    updateCartDisplay();
});
</script>
@endsection
