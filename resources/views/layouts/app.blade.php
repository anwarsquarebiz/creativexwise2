<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }} :: @yield('title')</title>
    

    <!-- Favicon -->
    <link rel="icon" href="/assets/img/cwepl-favicon.png" type="image/x-icon">

    <link rel="stylesheet" href="/assets/css/style.css" />

    <!-- Font Awesome (latest v6 CDN) -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkfY9F4cBMQd+6ePSw8Q4dS4nU5dIcn3GjY+hj3DGWMBxB+7xj1C6fNkg=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.15.0/ScrollToPlugin.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- CSRF Token for AJAX requests -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet"> -->

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Custom Styles for Language and Currency Selectors -->
    <style>

    *{
         font-family: "Poppins", sans-serif;
    }

        #language-selector,
        #currency-selector {
            min-width: 70px;
            background-image: none;
        }

        #language-selector:focus,
        #currency-selector:focus {
            box-shadow: 0 0 0 2px rgba(59, 130, 246, 0.5);
        }

        /* Custom dropdown styling */
        #language-selector option,
        #currency-selector option {
            background-color: white;
            color: #374151;
            padding: 8px 12px;
        }

        /* Hover effect for options */
        #language-selector option:hover,
        #currency-selector option:hover {
            background-color: #f3f4f6;
        }
    </style>
</head>

<body class="relative bg-white text-white">

    <!-- Navbar -->
    <header
        id="navbar"
        class="fixed top-0 left-0 w-screen z-50 backdrop-blur-md bg-white/50 border-b border-white/20">
        <div
            class="max-w-7xl mx-auto flex items-center justify-between py-6 px-6 relative">
            <!-- Hamburger (mobile) -->
            <div class="md:hidden flex items-center z-50">
                <button id="hamburger" class="focus:outline-none">
                    <div class="w-6 h-0.5 bg-zinc-900 mb-1"></div>
                    <div class="w-6 h-0.5 bg-zinc-900 mb-1"></div>
                    <div class="w-6 h-0.5 bg-zinc-900"></div>
                </button>
            </div>

            <!-- Logo -->
            <div
                class="text-2xl font-bold absolute left-1/2 transform text-zinc-900 -translate-x-1/2 md:static md:transform-none">
                <a href="{{ route('home') }}">
                    <img 
                        loading="lazy"
                        src="/assets/img/creativewiseent-logo.png"
                        alt="logo"
                        style="mix-blend-mode:multiply;"
                        class="w-24 rounded-lg" />
                </a>
            </div>

            <!-- Links (desktop) -->
            <nav class="hidden md:flex gap-16 ml-auto relative">
                <a
                    href="{{ route('home') }}"
                    class="hover:text-zinc-500 text-sm uppercase text-zinc-900 font-medium {{ request()->routeIs('home') ? 'text-blue-600' : '' }}">{{ __('messages.home') }}</a>

                <!-- Why Us -->
                <div class="relative group">
                    <button
                        class="menu-btn text-sm uppercase text-zinc-900 font-medium hover:text-zinc-500 {{ request()->routeIs('why-us.*') ? 'text-blue-600' : '' }}">
                        {{ __('messages.why_us') }}
                    </button>
                    <div
                        class="submenu hidden absolute left-0 top-full mt-3 bg-white/80 backdrop-blur-md shadow-lg rounded-lg p-3 w-48 border border-white/20">
                        <a
                            href="{{ route('why-us.quality') }}"
                            class="block py-2 text-sm text-zinc-900 hover:text-zinc-500 {{ request()->routeIs('why-us.quality') ? 'text-blue-600' : '' }}">{{ __('messages.quality') }}</a>
                        <a
                            href="{{ route('why-us.delivery') }}"
                            class="block py-2 text-sm text-zinc-900 hover:text-zinc-500 {{ request()->routeIs('why-us.delivery') ? 'text-blue-600' : '' }}">{{ __('messages.delivery') }}</a>
                        <a
                            href="{{ route('why-us.technology') }}"
                            class="block py-2 text-sm text-zinc-900 hover:text-zinc-500 {{ request()->routeIs('why-us.technology') ? 'text-blue-600' : '' }}">{{ __('messages.technology') }}</a>
                        <a
                            href="{{ route('why-us.efficiency') }}"
                            class="block py-2 text-sm text-zinc-900 hover:text-zinc-500 {{ request()->routeIs('why-us.efficiency') ? 'text-blue-600' : '' }}">{{ __('messages.efficiency') }}</a>
                    </div>
                </div>

                <!-- Services -->
                <div class="relative group">
                    <button
                        class="menu-btn text-sm uppercase text-zinc-900 font-medium hover:text-zinc-500 {{ request()->routeIs('services.*') ? 'text-blue-600' : '' }}">
                        {{ __('messages.services') }}
                    </button>
                    <div
                        class="submenu hidden absolute left-0 top-full mt-3 bg-white/80 backdrop-blur-md shadow-lg rounded-lg p-3 w-56 border border-white/20">
                        <a
                            href="{{ route('services.index') }}"
                            class="block py-2 text-sm text-zinc-900 hover:text-zinc-500 {{ request()->routeIs('services.index') ? 'text-blue-600' : '' }}">All Services</a>
                        <a
                            href="{{ route('services.subtitling') }}"
                            class="block py-2 text-sm text-zinc-900 hover:text-zinc-500 {{ request()->routeIs('services.subtitling') ? 'text-blue-600' : '' }}">{{ __('messages.subtitling') }}</a>
                        <a
                            href="{{ route('services.dubbing') }}"
                            class="block py-2 text-sm text-zinc-900 hover:text-zinc-500 {{ request()->routeIs('services.dubbing') ? 'text-blue-600' : '' }}">{{ __('messages.dubbing') }}</a>
                        <a
                            href="{{ route('services.accessibility') }}"
                            class="block py-2 text-sm text-zinc-900 hover:text-zinc-500 {{ request()->routeIs('services.accessibility') ? 'text-blue-600' : '' }}">{{ __('messages.accessibility') }}</a>
                        <a
                            href="{{ route('services.speech-recognition') }}"
                            class="block py-2 text-sm text-zinc-900 hover:text-zinc-500 {{ request()->routeIs('services.speech-recognition') ? 'text-blue-600' : '' }}">{{ __('messages.speech_recognition') }}</a>
                        <a
                            href="{{ route('services.distribution') }}"
                            class="block py-2 text-sm text-zinc-900 hover:text-zinc-500 {{ request()->routeIs('services.distribution') ? 'text-blue-600' : '' }}">{{ __('messages.distribution') }}</a>
                        <a
                            href="{{ route('services.creative-post') }}"
                            class="block py-2 text-sm text-zinc-900 hover:text-zinc-500 {{ request()->routeIs('services.creative-post') ? 'text-blue-600' : '' }}">{{ __('messages.creative_post') }}</a>
                    </div>
                </div>

                <!-- About -->
                <a
                    href="{{ route('about') }}"
                    class="hover:text-zinc-500 text-sm uppercase text-zinc-900 font-medium {{ request()->routeIs('about') ? 'text-blue-600' : '' }}">{{ __('messages.about') }}</a>

                <a
                    href="{{ route('contact') }}"
                    class="hover:text-zinc-500 text-sm uppercase text-zinc-900 font-medium {{ request()->routeIs('contact') ? 'text-blue-600' : '' }}">{{ __('messages.contact') }}</a>
                
                <a
                    href="{{ route('pricing') }}"
                    class="hover:text-zinc-500 text-sm uppercase text-zinc-900 font-medium {{ request()->routeIs('pricing') ? 'text-blue-600' : '' }}">Pricing</a>
            </nav>

            <!-- Language and Currency Selectors -->
            <div class="hidden md:flex items-center gap-3 ml-6">
                <!-- Language Selector -->
                <div class="relative">
                    <select id="language-selector" class="bg-white/80 backdrop-blur-md border border-white/20 rounded-lg px-3 py-2 text-sm text-zinc-900 focus:outline-none focus:ring-2 focus:ring-blue-500 appearance-none cursor-pointer">
                        <option value="en" {{ session('locale', 'en') == 'en' ? 'selected' : '' }}>EN</option>
                        <option value="fr" {{ session('locale', 'en') == 'fr' ? 'selected' : '' }}>FR</option>
                        <option value="es" {{ session('locale', 'en') == 'es' ? 'selected' : '' }}>ES</option>
                        <option value="de" {{ session('locale', 'en') == 'de' ? 'selected' : '' }}>DE</option>
                    </select>
                    <!-- Custom dropdown arrow -->
                    <div class="absolute inset-y-0 right-0 flex items-center pr-2 pointer-events-none">
                        <svg class="w-4 h-4 text-zinc-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </div>
                </div>

                <!-- Currency Selector -->
                <div class="relative">
                    <select id="currency-selector" class="bg-white/80 backdrop-blur-md border border-white/20 rounded-lg px-3 py-2 text-sm text-zinc-900 focus:outline-none focus:ring-2 focus:ring-gray-500 appearance-none cursor-pointer">
                        <option value="USD">USD</option>
                        <option value="INR" selected>INR</option>
                    </select>
                    <div class="absolute inset-y-0 right-0 flex items-center pr-2 pointer-events-none">
                        <svg class="w-4 h-4 text-zinc-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Mobile Sidebar -->
    <div
        id="mobileMenu"
        class="fixed top-0 left-0 h-full w-3/4 max-w-xs bg-white transform -translate-x-full z-40 flex flex-col gap-6 p-4 md:hidden">
        <!-- Main Menu -->
        <div id="mainMenu" class="flex flex-col gap-6">
            <a href="{{ route('home') }}" class="text-base text-zinc-900 {{ request()->routeIs('home') ? 'text-blue-600' : '' }}">{{ __('messages.home') }}</a>
            <button data-submenu="whyus" class="text-base text-zinc-900 text-left {{ request()->routeIs('why-us.*') ? 'text-blue-600' : '' }}">
                {{ __('messages.why_us') }}
            </button>
            <button
                data-submenu="services"
                class="text-base text-zinc-900 text-left {{ request()->routeIs('services.*') ? 'text-blue-600' : '' }}">
                {{ __('messages.services') }}
            </button>
            <a href="{{ route('about') }}" class="text-base text-zinc-900 {{ request()->routeIs('about') ? 'text-blue-600' : '' }}">{{ __('messages.about') }}</a>

            <a href="{{ route('contact') }}" class="text-base text-zinc-900 {{ request()->routeIs('contact') ? 'text-blue-600' : '' }}">{{ __('messages.contact') }}</a>
            <a href="{{ route('pricing') }}" class="text-base text-zinc-900 {{ request()->routeIs('pricing') ? 'text-blue-600' : '' }}">Pricing</a>
        </div>

        <!-- Submenus -->
        <div id="submenuContainer" class="hidden flex-col gap-4">
            <!-- Back button -->
            <button
                id="backBtn"
                class="flex items-center gap-2 text-base text-zinc-900">
                Back
            </button>

            <!-- Why Us submenu -->
            <div id="submenu-whyus" class="hidden flex-col p-4">
                <a
                    href="{{ route('why-us.quality') }}"
                    class="text-base text-zinc-900 block mb-5 {{ request()->routeIs('why-us.quality') ? 'text-blue-600' : '' }}">{{ __('messages.quality') }}</a>
                <a
                    href="{{ route('why-us.delivery') }}"
                    class="text-base text-zinc-900 block mb-5 {{ request()->routeIs('why-us.delivery') ? 'text-blue-600' : '' }}">{{ __('messages.delivery') }}</a>
                <a
                    href="{{ route('why-us.technology') }}"
                    class="text-base text-zinc-900 block mb-5 {{ request()->routeIs('why-us.technology') ? 'text-blue-600' : '' }}">{{ __('messages.technology') }}</a>
                <a
                    href="{{ route('why-us.efficiency') }}"
                    class="text-base text-zinc-900 block mb-5 {{ request()->routeIs('why-us.efficiency') ? 'text-blue-600' : '' }}">{{ __('messages.efficiency') }}</a>
            </div>

            <!-- Services submenu -->
            <div id="submenu-services" class="hidden flex-col p-4">
                <a
                    href="{{ route('services.index') }}"
                    class="text-base text-zinc-900 block mb-5 {{ request()->routeIs('services.index') ? 'text-blue-600' : '' }}">{{ __('messages.services') }}</a>
                <a
                    href="{{ route('services.subtitling') }}"
                    class="text-base text-zinc-900 block mb-5 {{ request()->routeIs('services.subtitling') ? 'text-blue-600' : '' }}">{{ __('messages.subtitling') }}</a>
                <a
                    href="{{ route('services.dubbing') }}"
                    class="text-base text-zinc-900 block mb-5 {{ request()->routeIs('services.dubbing') ? 'text-blue-600' : '' }}">{{ __('messages.dubbing') }}</a>
                <a
                    href="{{ route('services.accessibility') }}"
                    class="text-base text-zinc-900 block mb-5 {{ request()->routeIs('services.accessibility') ? 'text-blue-600' : '' }}">{{ __('messages.accessibility') }}</a>
                <a
                    href="{{ route('services.speech-recognition') }}"
                    class="text-base text-zinc-900 block mb-5 {{ request()->routeIs('services.speech-recognition') ? 'text-blue-600' : '' }}">{{ __('messages.speech_recognition') }}</a>
                <a
                    href="{{ route('services.distribution') }}"
                    class="text-base text-zinc-900 block mb-5 {{ request()->routeIs('services.distribution') ? 'text-blue-600' : '' }}">{{ __('messages.distribution') }}</a>
                <a
                    href="{{ route('services.creative-post') }}"
                    class="text-base text-zinc-900 block mb-5 {{ request()->routeIs('services.creative-post') ? 'text-blue-600' : '' }}">{{ __('messages.creative_post') }}</a>
            </div>
        </div>
    </div>

    {{-- Main Content --}}
    <div id="main" class="h-fit w-full">
        @yield('content')

        <footer class="w-full gradient-bg text-white">
            <!-- Main Footer Content -->
            <div class="pt-16 md:pt-20 lg:pt-24 px-6 sm:px-8 lg:px-12">
                <div class="max-w-7xl mx-auto">
                    <!-- Call to Action Section -->
                    <div
                        class="flex flex-col lg:flex-row items-center justify-between gap-8 lg:gap-16 border-b border-gray-700/50 pb-12 mb-12">
                        <!-- Logo and CTA Text -->
                        <div
                            class="flex flex-col lg:flex-row items-center gap-6 lg:gap-8">
                            <!-- Logo -->
                            <div class="flex-shrink-0">
                                <div
                                    class="w-16 h-16 md:w-20 md:h-20 bg-gradient-to-br from-gray-500 to-gray-600 rounded-2xl flex items-center justify-center logo-pulse">
                                    <svg
                                        class="w-8 h-8 md:w-10 md:h-10 text-white"
                                        fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                </div>
                            </div>

                            <!-- CTA Text -->
                            <div class="text-center lg:text-left">
                                <h3
                                    class="text-2xl md:text-3xl lg:text-4xl font-bold mb-2 bg-gradient-to-r from-white to-gray-300 bg-clip-text text-transparent">
                                    {{ __('messages.ready_to_make_global') }}
                                </h3>
                                <p class="text-gray-300 text-sm md:text-base max-w-md">
                                    {{ __('messages.transform_ideas') }}
                                </p>
                            </div>
                        </div>

                        <!-- CTA Button -->
                        <div class="flex-shrink-0">
                            <a
                                href="{{ route('contact') }}"
                                class="group relative inline-flex items-center justify-center px-8 py-4 bg-white text-gray-900 rounded-xl font-semibold text-sm md:text-base uppercase tracking-wider transition-all duration-300 hover-glow hover:scale-105 hover:bg-gray-100">
                                <span class="relative z-10">{{ __('messages.lets_talk') }}</span>
                                <div
                                    class="absolute inset-0 bg-gradient-to-r from-blue-500 to-purple-600 rounded-xl opacity-0 group-hover:opacity-10 transition-opacity duration-300"></div>
                                <svg
                                    class="ml-2 w-4 h-4 group-hover:translate-x-1 transition-transform duration-300"
                                    fill="none"
                                    stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M13 7l5 5m0 0l-5 5m5-5H6" />
                                </svg>
                            </a>
                        </div>
                    </div>

                    <!-- Footer Sections -->
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-12">
                        <!-- Company Info Section -->
                        <div class="space-y-4">
                            <div class="space-y-3">
                                <div class="flex flex-col gap-2">
                                    <img 
                                        src="/assets/img/creativewiseent-logo-white.png"
                                        alt="{{ config('app.name') }}"
                                        class="w-40 rounded-lg"
                                    />
                                    <div>{{ config('app.name') }}</div>
                                </div>
                                <div class="text-gray-300 text-sm space-y-1">
                                    <p class="mb-2">1117/C-Wing, Oshiwara Adarsh Building No. 1
                                    <br>Near Oshiwara Metro Station
                                    <br>Jogeshwari (W), Mumbai - 400102</p>
                                    <p class="mb-2"><strong>Email:</strong> info@creativexwise.com</p>
                                    <p class="mb-2"><strong>Phone:</strong> +917503590327</p>
                                    <p class="mb-2"><strong>GST No:</strong> 27AAHCC8489M1ZR</p>
                                    <p class="mb-2"><strong>CIN No:</strong> U93090MH2018PTC316815</p>
                                </div>
                            </div>
                        </div>

                        <!-- Quick Pages Section -->
                        <div class="space-y-4">
                            <h3 class="text-lg font-semibold text-white mb-4">Quick Pages</h3>
                            <nav class="space-y-2">
                                <a href="{{ route('home') }}" class="block text-gray-300 hover:text-white transition-colors duration-300 {{ request()->routeIs('home') ? 'text-white' : '' }}">
                                    {{ __('messages.home') }}
                                </a>
                                <a href="{{ route('about') }}" class="block text-gray-300 hover:text-white transition-colors duration-300 {{ request()->routeIs('about') ? 'text-white' : '' }}">
                                    {{ __('messages.about') }}
                                </a>
                                <a href="{{ route('contact') }}" class="block text-gray-300 hover:text-white transition-colors duration-300 {{ request()->routeIs('contact') ? 'text-white' : '' }}">
                                    {{ __('messages.contact') }}
                                </a>
                                <a href="{{ route('pricing') }}" class="block text-gray-300 hover:text-white transition-colors duration-300 {{ request()->routeIs('pricing') ? 'text-white' : '' }}">
                                    Pricing
                                </a>
                                <a href="{{ route('why-us.quality') }}" class="block text-gray-300 hover:text-white transition-colors duration-300 {{ request()->routeIs('why-us.*') ? 'text-white' : '' }}">
                                    {{ __('messages.why_us') }}
                                </a>
                            </nav>
                        </div>

                        <!-- Services Section -->
                        <div class="space-y-4">
                            <h3 class="text-lg font-semibold text-white mb-4">Services</h3>
                            <nav class="space-y-2">
                                <a href="{{ route('services.index') }}" class="block text-gray-300 hover:text-white transition-colors duration-300 {{ request()->routeIs('services.index') ? 'text-white' : '' }}">
                                    All Services
                                </a>
                                <a href="{{ route('services.subtitling') }}" class="block text-gray-300 hover:text-white transition-colors duration-300 {{ request()->routeIs('services.subtitling') ? 'text-white' : '' }}">
                                    {{ __('messages.subtitling') }}
                                </a>
                                <a href="{{ route('services.dubbing') }}" class="block text-gray-300 hover:text-white transition-colors duration-300 {{ request()->routeIs('services.dubbing') ? 'text-white' : '' }}">
                                    {{ __('messages.dubbing') }}
                                </a>
                                <a href="{{ route('services.accessibility') }}" class="block text-gray-300 hover:text-white transition-colors duration-300 {{ request()->routeIs('services.accessibility') ? 'text-white' : '' }}">
                                    {{ __('messages.accessibility') }}
                                </a>
                                <a href="{{ route('services.speech-recognition') }}" class="block text-gray-300 hover:text-white transition-colors duration-300 {{ request()->routeIs('services.speech-recognition') ? 'text-white' : '' }}">
                                    {{ __('messages.speech_recognition') }}
                                </a>
                                <a href="{{ route('services.distribution') }}" class="block text-gray-300 hover:text-white transition-colors duration-300 {{ request()->routeIs('services.distribution') ? 'text-white' : '' }}">
                                    {{ __('messages.distribution') }}
                                </a>
                                <a href="{{ route('services.creative-post') }}" class="block text-gray-300 hover:text-white transition-colors duration-300 {{ request()->routeIs('services.creative-post') ? 'text-white' : '' }}">
                                    {{ __('messages.creative_post') }}
                                </a>
                            </nav>
                        </div>

                        <!-- Policies Section -->
                        <div class="space-y-4">
                            <h3 class="text-lg font-semibold text-white mb-4">Policies</h3>
                            <nav class="space-y-2">
                                <a href="{{ route('policies.privacy') }}" class="block text-gray-300 hover:text-white transition-colors duration-300 {{ request()->routeIs('policies.privacy') ? 'text-white' : '' }}">
                                    Privacy Policy
                                </a>
                                <a href="{{ route('policies.terms') }}" class="block text-gray-300 hover:text-white transition-colors duration-300 {{ request()->routeIs('policies.terms') ? 'text-white' : '' }}">
                                    Terms & Conditions
                                </a>
                                <a href="{{ route('policies.refund') }}" class="block text-gray-300 hover:text-white transition-colors duration-300 {{ request()->routeIs('policies.refund') ? 'text-white' : '' }}">
                                    Refund Policy
                                </a>
                            </nav>
                        </div>
                    </div>

                    <!-- Social Media & Additional Info -->
                    <div class="border-t border-gray-700/50 pt-8 mb-8">
                        <div
                            class="flex flex-col md:flex-row items-center justify-between gap-6">
                        </div>
                    </div>

                    <!-- Copyright -->
                    <div class="text-center pb-8">
                        <p class="text-sm text-gray-400">
                            © 2025 <span class="text-white font-semibold">{{ config('app.name') }}</span>. All rights reserved.
                        </p>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    {{-- Scripts --}}

    <script>
        gsap.registerPlugin(ScrollTrigger);

        const video = document.getElementById("resize-video");
        const small_video = document.getElementById("small_video");
        const gallery_1 = document.getElementById("videoGallery_1");
        const gallery_3 = document.getElementById("videoGallery_3");

        const middle_left = document.getElementById("middle_left");
        const middle_right = document.getElementById("middle_right");

        // const images = gallery.querySelectorAll("img");

        // Set initial styles

        gsap.set(small_video, {
            opacity: 0,
        });

        gsap.set(gallery_1, {
            opacity: 0,
            x: "100%",
        });

        gsap.set(gallery_3, {
            opacity: 0,
            x: "-100%",
        });

        gsap.set(middle_left, {
            opacity: "50%",
            x: "-85%",
        });

        gsap.set(middle_right, {
            opacity: "50%",
            x: "85%",
        });

        // Main timeline
        let mm = gsap.matchMedia();

        mm.add("(min-width: 768px)", () => {
            // Desktop timeline
            gsap
                .timeline({
                    scrollTrigger: {
                        trigger: video,
                        start: "top 25%",
                        end: "top top+=400",
                        scrub: 1.5,
                        markers: false,
                    },
                })
                .to(video, {
                    scale: 0,
                    opacity: 0
                }, 0)
                .to(small_video, {
                    opacity: 1
                }, 0)
                .to(gallery_1, {
                    opacity: 1,
                    x: "0%",
                    ease: "power2.out"
                }, 0.1)
                .to(gallery_3, {
                    opacity: 1,
                    x: "0%",
                    ease: "power2.out"
                }, 0.1)
                .to(middle_left, {
                    opacity: 1,
                    x: "0%",
                    ease: "power2.out"
                }, 0.1)
                .to(middle_right, {
                    opacity: 1,
                    x: "0%",
                    ease: "power2.out"
                }, 0.1);
        });

        mm.add("(max-width: 767px)", () => {
            gsap
                .timeline({
                    scrollTrigger: {
                        trigger: video,
                        start: "top center", // when video hits mid screen
                        toggleActions: "play none none reverse",
                        markers: false,
                    },
                })
                .to(video, {
                    scale: 0,
                    opacity: 0,
                    duration: 0.6
                })
                .to(small_video, {
                    opacity: 1,
                    duration: 0.4
                }, "<") // "<" = start at same time
                .to(
                    gallery_1, {
                        opacity: 1,
                        x: "0%",
                        ease: "power2.out",
                        duration: 0.6
                    },
                    "<"
                )
                .to(
                    gallery_3, {
                        opacity: 1,
                        x: "0%",
                        ease: "power2.out",
                        duration: 0.6
                    },
                    "<"
                )
                .to(
                    middle_left, {
                        opacity: 1,
                        x: "0%",
                        ease: "power2.out",
                        duration: 0.6
                    },
                    "<"
                )
                .to(
                    middle_right, {
                        opacity: 1,
                        x: "0%",
                        ease: "power2.out",
                        duration: 0.6
                    },
                    "<"
                );
        });
    </script>

    <script>
        const navbar = document.getElementById("navbar");
        const hamburger = document.getElementById("hamburger");
        const mobileMenu = document.getElementById("mobileMenu");
        let lastScroll = 0;
        let sidebarOpen = false;

        // Hide/show on scroll
        window.addEventListener("scroll", () => {
            const currentScroll = window.pageYOffset;

            if (currentScroll <= 0) {
                gsap.to(navbar, {
                    y: 0,
                    duration: 0.3
                });
                return;
            }

            if (currentScroll > lastScroll) {
                gsap.to(navbar, {
                    y: "-100%",
                    duration: 0.3
                });
            } else {
                gsap.to(navbar, {
                    y: 0,
                    duration: 0.3
                });
            }

            lastScroll = currentScroll;
        });

        // Hamburger toggle for sidebar + shift navbar
        hamburger.addEventListener("click", () => {
            if (!sidebarOpen) {
                // Open sidebar
                gsap.to(mobileMenu, {
                    x: "0%",
                    duration: 0.3
                });
                gsap.to(navbar, {
                    x: "75%",
                    duration: 0.3
                });
                document.body.classList.add("overflow-hidden"); // 🚫 stop scroll
                sidebarOpen = true;
            } else {
                // Close sidebar
                gsap.to(mobileMenu, {
                    x: "-100%",
                    duration: 0.3
                });
                gsap.to(navbar, {
                    x: "0%",
                    duration: 0.3
                });
                document.body.classList.remove("overflow-hidden"); // ✅ restore scroll
                sidebarOpen = false;
            }
        });

        mm.add("(min-width: 768px)", () => {
            // Desktop / Tablet
            gsap.utils.toArray(".reveal").forEach((el) => {
                gsap.fromTo(
                    el, {
                        y: 50,
                        opacity: 0
                    }, {
                        y: 0,
                        opacity: 1,
                        duration: 1,
                        ease: "power2.out",
                        scrollTrigger: {
                            trigger: el,
                            start: "top 98%", // desktop start
                            end: "top 93%",
                            toggleActions: "play none none reverse",
                            markers: false,
                        },
                    }
                );
            });
        });

        mm.add("(max-width: 767px)", () => {
            // Mobile
            gsap.utils.toArray(".reveal").forEach((el) => {
                gsap.fromTo(
                    el, {
                        y: 50,
                        opacity: 0
                    }, {
                        y: 0,
                        opacity: 1,
                        duration: 1,
                        ease: "power2.out",
                        scrollTrigger: {
                            trigger: el,
                            start: "top 75%", // little earlier (above) on mobile
                            end: "top 85%",
                            toggleActions: "play none none reverse",
                            markers: false,
                        },
                    }
                );
            });
        });

        document.querySelectorAll(".menu-btn").forEach((btn) => {
            btn.addEventListener("click", () => {
                const submenu = btn.nextElementSibling;

                // Close other open menus
                document.querySelectorAll(".submenu").forEach((sm) => {
                    if (sm !== submenu) sm.classList.add("hidden");
                });

                // Toggle this one
                submenu.classList.toggle("hidden");
            });
        });

        // Close menus if click outside
        document.addEventListener("click", (e) => {
            if (!e.target.closest(".group")) {
                document
                    .querySelectorAll(".submenu")
                    .forEach((sm) => sm.classList.add("hidden"));
            }
        });

        // 🚀 Close menus on scroll
        window.addEventListener("scroll", () => {
            document
                .querySelectorAll(".submenu")
                .forEach((sm) => sm.classList.add("hidden"));
        });

        document.querySelectorAll("[data-submenu]").forEach((btn) => {
            btn.addEventListener("click", () => {
                const submenuId = "submenu-" + btn.dataset.submenu;

                // Hide main menu
                mainMenu.classList.add("hidden");
                // Show submenu container
                submenuContainer.classList.remove("hidden");

                // Hide all submenus, then show the correct one
                submenuContainer
                    .querySelectorAll("div")
                    .forEach((sm) => sm.classList.add("hidden"));
                document.getElementById(submenuId).classList.remove("hidden");
            });
        });

        // Back button -> return to main menu
        backBtn.addEventListener("click", () => {
            submenuContainer.classList.add("hidden");
            mainMenu.classList.remove("hidden");
        });

        // Language selector functionality
        document.getElementById('language-selector').addEventListener('change', function() {
            const language = this.value;
            fetch('/api/set-language', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    body: JSON.stringify({
                        language: language
                    })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        // Reload page to apply language changes
                        window.location.reload();
                    }
                })
                .catch(error => {
                    console.error('Error setting language:', error);
                });
        });

        // Currency selector functionality
        document.getElementById('currency-selector').addEventListener('change', function() {
            const currency = this.value;
            localStorage.setItem('preferredCurrency', currency);
            
            // If we're on pricing page, update the switch
            if (document.getElementById('currency-switch')) {
                const switchHandle = document.getElementById('currency-switch-handle');
                const switchButton = document.getElementById('currency-switch');
                
                if (currency === 'INR') {
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
            }
            
            // Reload page to apply currency changes
            window.location.reload();
        });
        
        // Initialize currency selector with stored preference
        const storedCurrency = localStorage.getItem('preferredCurrency') || 'INR';
        document.getElementById('currency-selector').value = storedCurrency;
    </script>

</body>

</html>