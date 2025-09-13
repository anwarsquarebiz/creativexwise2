@extends('layouts.app')

@section('title', 'Checkout')

@section('content')
<main class="main-root">
    <!-- Hero Section -->
    <section class="relative w-screen h-[40vh] flex items-center justify-center bg-gradient-to-br from-gray-900 via-black to-gray-800">
        <div class="text-center text-white z-10">
            <h1 class="text-4xl md:text-6xl font-bold mb-6">Checkout</h1>
            <p class="text-xl md:text-2xl opacity-90">Complete your order</p>
        </div>
        <div class="absolute inset-0 bg-black opacity-20"></div>
    </section>

    <!-- Checkout Content -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="max-w-6xl mx-auto">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                    
                    <!-- Checkout Form -->
                    <div class="bg-white rounded-lg shadow-lg p-8">
                        <h2 class="text-2xl font-bold text-gray-900 mb-6">Billing Information</h2>
                        
                        <form id="checkout-form" class="space-y-6">
                            @csrf
                            
                            <!-- Personal Information -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label for="first_name" class="block text-sm font-medium text-gray-700 mb-2">First Name *</label>
                                    <input type="text" id="first_name" name="first_name" required 
                                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-gray-500 focus:border-transparent text-gray-900">
                                </div>
                                <div>
                                    <label for="last_name" class="block text-sm font-medium text-gray-700 mb-2">Last Name *</label>
                                    <input type="text" id="last_name" name="last_name" required 
                                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-gray-500 focus:border-transparent text-gray-900">
                                </div>
                            </div>
                            
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email Address *</label>
                                <input type="email" id="email" name="email" required 
                                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-gray-500 focus:border-transparent text-gray-900">
                            </div>
                            
                            <div>
                                <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">Phone Number *</label>
                                <input type="tel" id="phone" name="phone" required 
                                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-gray-500 focus:border-transparent text-gray-900">
                            </div>
                            
                            <!-- Company Information -->
                            <div>
                                <label for="company" class="block text-sm font-medium text-gray-700 mb-2">Company Name</label>
                                <input type="text" id="company" name="company" 
                                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-gray-500 focus:border-transparent text-gray-900">
                            </div>
                            
                            <!-- Address -->
                            <div>
                                <label for="address" class="block text-sm font-medium text-gray-700 mb-2">Address *</label>
                                <textarea id="address" name="address" rows="3" required 
                                          class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-gray-500 focus:border-transparent text-gray-900"></textarea>
                            </div>
                            
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                <div>
                                    <label for="city" class="block text-sm font-medium text-gray-700 mb-2">City *</label>
                                    <input type="text" id="city" name="city" required 
                                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-gray-500 focus:border-transparent text-gray-900">
                                </div>
                                <div>
                                    <label for="state" class="block text-sm font-medium text-gray-700 mb-2">State *</label>
                                    <input type="text" id="state" name="state" required 
                                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-gray-500 focus:border-transparent text-gray-900">
                                </div>
                                <div>
                                    <label for="zip" class="block text-sm font-medium text-gray-700 mb-2">ZIP Code *</label>
                                    <input type="text" id="zip" name="zip" required 
                                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-gray-500 focus:border-transparent text-gray-900">
                                </div>
                            </div>
                            
                            <div>
                                <label for="country" class="block text-sm font-medium text-gray-700 mb-2">Country *</label>
                                <select id="country" name="country" required 
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-gray-500 focus:border-transparent text-gray-900">
                                    <option class="text-gray-900" value="">Select Country</option>
                                    <option class="text-gray-900" value="US">United States</option>
                                    <option class="text-gray-900" value="IN">India</option>
                                    <option class="text-gray-900" value="UK">United Kingdom</option>
                                    <option class="text-gray-900" value="CA">Canada</option>
                                    <option class="text-gray-900" value="AU">Australia</option>
                                    <option class="text-gray-900" value="DE">Germany</option>
                                    <option class="text-gray-900" value="FR">France</option>
                                    <option class="text-gray-900" value="ES">Spain</option>
                                    <option class="text-gray-900" value="IT">Italy</option>
                                    <option class="text-gray-900" value="JP">Japan</option>
                                    <option class="text-gray-900" value="KR">South Korea</option>
                                    <option class="text-gray-900" value="CN">China</option>
                                    <option class="text-gray-900" value="BR">Brazil</option>
                                    <option class="text-gray-900" value="MX">Mexico</option>
                                    <option class="text-gray-900" value="other">Other</option>
                                </select>
                            </div>
                            
                            <!-- Payment Method -->
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-4">Payment Method *</label>
                                <div class="space-y-3">
                                    <label class="flex items-center p-4 border border-gray-300 rounded-lg cursor-pointer hover:bg-gray-50">
                                        <input type="radio" name="payment_method" value="credit_card" class="mr-3" required>
                                        <div>
                                            <div class="text-gray-900 font-medium">Credit Card</div>
                                            <div class="text-sm text-gray-600">Visa, MasterCard, American Express</div>
                                        </div>
                                    </label>
                                    <label class="flex items-center p-4 border border-gray-300 rounded-lg cursor-pointer hover:bg-gray-50">
                                        <input type="radio" name="payment_method" value="paypal" class="mr-3">
                                        <div>
                                            <div class="text-gray-900 font-medium">PayPal</div>
                                            <div class="text-sm text-gray-600">Pay with your PayPal account</div>
                                        </div>
                                    </label>                                    
                                </div>
                            </div>
                            
                            <!-- Terms and Conditions -->
                            <div class="flex items-start">
                                <input type="checkbox" id="terms" name="terms" required class="mt-1 mr-3">
                                <label for="terms" class="text-sm text-gray-700">
                                    I agree to the <a href="#" class="text-blue-600 hover:underline">Terms and Conditions</a> and <a href="#" class="text-blue-600 hover:underline">Privacy Policy</a> *
                                </label>
                            </div>
                            
                            <button type="submit" class="w-full bg-gray-900 text-white py-4 px-6 rounded-lg font-medium hover:bg-gray-700 transition-colors text-lg">
                                Complete Order
                            </button>
                        </form>
                    </div>
                    
                    <!-- Order Summary -->
                    <div class="bg-white rounded-lg shadow-lg p-8">
                        <h2 class="text-2xl font-bold text-gray-900 mb-6">Order Summary</h2>
                        
                        <div id="order-items" class="space-y-4 mb-6">
                            <!-- Order items will be populated by JavaScript -->
                        </div>
                        
                        <div class="border-t border-gray-200 pt-6 space-y-3">
                            <div class="flex justify-between">
                                <span class="text-gray-600">Subtotal:</span>
                                <span class="font-medium" id="order-subtotal">$0</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Tax (10%):</span>
                                <span class="font-medium" id="order-tax">$0</span>
                            </div>
                            <div class="border-t border-gray-200 pt-3">
                                <div class="flex justify-between">
                                    <span class="text-lg font-semibold text-gray-900">Total:</span>
                                    <span class="text-lg font-semibold text-gray-900" id="order-total">₹0</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="mt-6 p-4 bg-gray-50 rounded-lg">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 text-gray-600 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-sm text-gray-800">Your payment information is secure and encrypted</span>
                            </div>
                        </div>
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
    
    function updateOrderSummary() {
        const orderItems = document.getElementById('order-items');
        
        if (cart.length === 0) {
            window.location.href = '/cart';
            return;
        }
        
        orderItems.innerHTML = '';
        let subtotal = 0;
        
        cart.forEach(item => {
            const price = currentCurrency === 'USD' ? item.priceUSD : item.priceINR;
            const totalPrice = price * item.quantity;
            subtotal += totalPrice;
            
            const itemDiv = document.createElement('div');
            itemDiv.className = 'flex justify-between items-center py-2';
            itemDiv.innerHTML = `
                <div>
                    <div class="font-medium text-gray-900">${item.service}</div>
                    <div class="text-sm text-gray-600">Qty: ${item.quantity}</div>
                </div>
                <div class="font-medium text-gray-900">${currentCurrency === 'USD' ? '$' : '₹'}${totalPrice.toLocaleString()}</div>
            `;
            orderItems.appendChild(itemDiv);
        });
        
        const tax = subtotal * 0.1;
        const total = subtotal + tax;
        
        document.getElementById('order-subtotal').textContent = (currentCurrency === 'USD' ? '$' : '₹') + subtotal.toLocaleString();
        document.getElementById('order-tax').textContent = (currentCurrency === 'USD' ? '$' : '₹') + tax.toLocaleString();
        document.getElementById('order-total').textContent = (currentCurrency === 'USD' ? '$' : '₹') + total.toLocaleString();
    }
    
    // Form submission
    document.getElementById('checkout-form').addEventListener('submit', function(e) {
        e.preventDefault();
        
        const formData = new FormData(this);
        const orderData = {
            customer: Object.fromEntries(formData),
            items: cart,
            subtotal: cart.reduce((sum, item) => sum + (currentCurrency === 'USD' ? item.priceUSD : item.priceINR) * item.quantity, 0),
            tax: cart.reduce((sum, item) => sum + (currentCurrency === 'USD' ? item.priceUSD : item.priceINR) * item.quantity, 0) * 0.1,
            total: cart.reduce((sum, item) => sum + (currentCurrency === 'USD' ? item.priceUSD : item.priceINR) * item.quantity, 0) * 1.1,
            currency: currentCurrency
        };
        
        // Submit order
        fetch('/api/orders', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            body: JSON.stringify(orderData)
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                // Clear cart
                localStorage.removeItem('cart');
                // Redirect to success page
                window.location.href = '/order-success/' + data.order_id;
            } else {
                alert('Error processing order. Please try again.');
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Error processing order. Please try again.');
        });
    });
    
    // Initialize
    updateOrderSummary();
});
</script>
@endsection
