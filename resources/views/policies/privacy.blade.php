@extends('layouts.app')

@section('title', 'Privacy Policy')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-gray-50 to-gray-100 pt-24 pb-16">
    <div class="max-w-4xl mx-auto px-6 sm:px-8 lg:px-12">
        <!-- Header -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Privacy Policy</h1>
            <p class="text-lg text-gray-600">Last updated: {{ date('F d, Y') }}</p>
        </div>

        <!-- Content -->
        <div class="bg-white rounded-2xl shadow-xl p-8 md:p-12">
            <div class="prose prose-lg max-w-none">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">1. Information We Collect</h2>
                <p class="text-gray-700 mb-6">
                    At {{ config('app.name') }}, we collect information you provide directly to us, such as when you create an account, 
                    make a purchase, or contact us for support. This may include your name, email address, phone number, 
                    billing address, and payment information.
                </p>

                <h2 class="text-2xl font-bold text-gray-900 mb-6">2. How We Use Your Information</h2>
                <p class="text-gray-700 mb-6">
                    We use the information we collect to provide, maintain, and improve our services, process transactions, 
                    send you technical notices and support messages, and communicate with you about products, services, 
                    and promotional offers.
                </p>

                <h2 class="text-2xl font-bold text-gray-900 mb-6">3. Information Sharing</h2>
                <p class="text-gray-700 mb-6">
                    We do not sell, trade, or otherwise transfer your personal information to third parties without your 
                    consent, except as described in this privacy policy. We may share your information with trusted 
                    third parties who assist us in operating our website, conducting our business, or servicing you.
                </p>

                <h2 class="text-2xl font-bold text-gray-900 mb-6">4. Data Security</h2>
                <p class="text-gray-700 mb-6">
                    We implement appropriate security measures to protect your personal information against unauthorized 
                    access, alteration, disclosure, or destruction. However, no method of transmission over the internet 
                    or electronic storage is 100% secure.
                </p>

                <h2 class="text-2xl font-bold text-gray-900 mb-6">5. Cookies and Tracking</h2>
                <p class="text-gray-700 mb-6">
                    We use cookies and similar tracking technologies to enhance your experience on our website, 
                    analyze usage patterns, and personalize content and advertisements.
                </p>

                <h2 class="text-2xl font-bold text-gray-900 mb-6">6. Your Rights</h2>
                <p class="text-gray-700 mb-6">
                    You have the right to access, update, or delete your personal information. You may also opt out 
                    of certain communications from us. To exercise these rights, please contact us using the 
                    information provided below.
                </p>

                <h2 class="text-2xl font-bold text-gray-900 mb-6">7. Changes to This Policy</h2>
                <p class="text-gray-700 mb-6">
                    We may update this privacy policy from time to time. We will notify you of any changes by posting 
                    the new privacy policy on this page and updating the "Last updated" date.
                </p>

                <h2 class="text-2xl font-bold text-gray-900 mb-6">8. Contact Information</h2>
                <div class="bg-gray-50 rounded-lg p-6">
                    <p class="text-gray-700 mb-2"><strong>Company:</strong> {{ config('app.name') }}</p>
                    <p class="text-gray-700 mb-2"><strong>Address:</strong> 1117/C-Wing, Oshiwara Adarsh Building No. 1, Near Oshiwara Metro Station, Jogeshwari (W), Mumbai - 400102</p>
                    <p class="text-gray-700 mb-2"><strong>Email:</strong> info@creativexwise.com</p>
                    <p class="text-gray-700"><strong>Phone:</strong> +917503590327</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
