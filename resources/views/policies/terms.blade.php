@extends('layouts.app')

@section('title', 'Terms and Conditions')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-gray-50 to-gray-100 pt-24 pb-16">
    <div class="max-w-4xl mx-auto px-6 sm:px-8 lg:px-12">
        <!-- Header -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Terms and Conditions</h1>
            <p class="text-lg text-gray-600">Last updated: {{ date('F d, Y') }}</p>
        </div>

        <!-- Content -->
        <div class="bg-white rounded-2xl shadow-xl p-8 md:p-12">
            <div class="prose prose-lg max-w-none">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">1. Acceptance of Terms</h2>
                <p class="text-gray-700 mb-6">
                    By accessing and using {{ config('app.name') }} services, you accept and agree to be bound by the terms and 
                    provision of this agreement. If you do not agree to abide by the above, please do not use this service.
                </p>

                <h2 class="text-2xl font-bold text-gray-900 mb-6">2. Description of Service</h2>
                <p class="text-gray-700 mb-6">
                    {{ config('app.name') }} provides professional video production services including subtitling, dubbing, 
                    accessibility services, speech recognition, distribution, and creative post-production services. 
                    We reserve the right to modify or discontinue the service at any time without notice.
                </p>

                <h2 class="text-2xl font-bold text-gray-900 mb-6">3. User Responsibilities</h2>
                <p class="text-gray-700 mb-6">
                    Users are responsible for providing accurate information, maintaining the confidentiality of their 
                    account credentials, and ensuring that their use of our services complies with all applicable laws 
                    and regulations.
                </p>

                <h2 class="text-2xl font-bold text-gray-900 mb-6">4. Payment Terms</h2>
                <p class="text-gray-700 mb-6">
                    Payment for services must be made in advance unless otherwise agreed upon. All prices are subject 
                    to change without notice. We accept various payment methods as specified during the checkout process.
                </p>

                <h2 class="text-2xl font-bold text-gray-900 mb-6">5. Intellectual Property</h2>
                <p class="text-gray-700 mb-6">
                    All content, trademarks, and intellectual property rights on this website are owned by {{ config('app.name') }} 
                    or our licensors. Users retain ownership of their original content but grant us necessary rights 
                    to provide our services.
                </p>

                <h2 class="text-2xl font-bold text-gray-900 mb-6">6. Service Delivery</h2>
                <p class="text-gray-700 mb-6">
                    We strive to deliver services within agreed timeframes. However, delivery times may vary based on 
                    project complexity and current workload. We will communicate any delays and provide updated timelines.
                </p>

                <h2 class="text-2xl font-bold text-gray-900 mb-6">7. Limitation of Liability</h2>
                <p class="text-gray-700 mb-6">
                    {{ config('app.name') }} shall not be liable for any indirect, incidental, special, consequential, or punitive 
                    damages, including without limitation, loss of profits, data, use, goodwill, or other intangible 
                    losses resulting from your use of our services.
                </p>

                <h2 class="text-2xl font-bold text-gray-900 mb-6">8. Termination</h2>
                <p class="text-gray-700 mb-6">
                    We may terminate or suspend your account and access to our services immediately, without prior notice 
                    or liability, for any reason whatsoever, including without limitation if you breach the Terms.
                </p>

                <h2 class="text-2xl font-bold text-gray-900 mb-6">9. Governing Law</h2>
                <p class="text-gray-700 mb-6">
                    These Terms shall be interpreted and governed by the laws of India. Any disputes arising from these 
                    terms or our services shall be subject to the exclusive jurisdiction of the courts in Mumbai, India.
                </p>

                <h2 class="text-2xl font-bold text-gray-900 mb-6">10. Changes to Terms</h2>
                <p class="text-gray-700 mb-6">
                    We reserve the right to modify these terms at any time. We will notify users of any material changes 
                    by posting the new terms on this page and updating the "Last updated" date.
                </p>

                <h2 class="text-2xl font-bold text-gray-900 mb-6">11. Contact Information</h2>
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
