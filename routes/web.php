<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\WhyUsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\TranslationController;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\PoliciesController;

// Home page
Route::get('/', [HomeController::class, 'index'])->name('home');

// About page
Route::get('/about', [AboutController::class, 'index'])->name('about');

// Services pages
Route::prefix('services')->name('services.')->group(function () {
    Route::get('/', [ServicesController::class, 'index'])->name('index');
    Route::get('/subtitling', [ServicesController::class, 'subtitling'])->name('subtitling');
    Route::get('/dubbing', [ServicesController::class, 'dubbing'])->name('dubbing');
    Route::get('/accessibility', [ServicesController::class, 'accessibility'])->name('accessibility');
    Route::get('/speech-recognition', [ServicesController::class, 'speechRecognition'])->name('speech-recognition');
    Route::get('/distribution', [ServicesController::class, 'distribution'])->name('distribution');
    Route::get('/creative-post', [ServicesController::class, 'creativePost'])->name('creative-post');
});

// Why Us pages
Route::prefix('why-us')->name('why-us.')->group(function () {
    Route::get('/quality', [WhyUsController::class, 'quality'])->name('quality');
    Route::get('/delivery', [WhyUsController::class, 'delivery'])->name('delivery');
    Route::get('/technology', [WhyUsController::class, 'technology'])->name('technology');
    Route::get('/efficiency', [WhyUsController::class, 'efficiency'])->name('efficiency');
});

// Contact page
Route::get('/contact', [ContactController::class, 'index'])->name('contact');

// Pricing page
Route::get('/pricing', [PricingController::class, 'index'])->name('pricing');

// Cart page
Route::get('/cart', [CartController::class, 'index'])->name('cart');

// Checkout pages
Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');
Route::get('/order-success/{orderId}', [CheckoutController::class, 'success'])->name('order.success');

// Policy pages
Route::prefix('policies')->name('policies.')->group(function () {
    Route::get('/privacy', [PoliciesController::class, 'privacy'])->name('privacy');
    Route::get('/terms', [PoliciesController::class, 'terms'])->name('terms');
    Route::get('/refund', [PoliciesController::class, 'refund'])->name('refund');
});

// Translation and Currency API routes
Route::prefix('api')->name('api.')->group(function () {
    Route::post('/translate', [TranslationController::class, 'translate'])->name('translate');
    Route::post('/set-language', [TranslationController::class, 'setLanguage'])->name('set-language');
    Route::post('/set-currency', [TranslationController::class, 'setCurrency'])->name('set-currency');
    Route::get('/current-settings', [TranslationController::class, 'getCurrentSettings'])->name('current-settings');
    Route::post('/orders', [CheckoutController::class, 'store'])->name('orders.store');
});