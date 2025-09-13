@extends('layouts.app')

@section('title', 'Refund Policy')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-gray-50 to-gray-100 pt-24 pb-16">
    <div class="max-w-4xl mx-auto px-6 sm:px-8 lg:px-12">
        <!-- Header -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Refund Policy</h1>
            <p class="text-lg text-gray-600">Last updated: {{ date('F d, Y') }}</p>
        </div>

        <!-- Content -->
        <div class="bg-white rounded-2xl shadow-xl p-8 md:p-12">
            <div class="prose prose-lg max-w-none">
                <div class="bg-blue-50 border-l-4 border-blue-400 p-6 mb-8">
                    <h3 class="text-lg font-semibold text-blue-800 mb-2">7-Day Refund Guarantee</h3>
                    <p class="text-blue-700">
                        We offer a 7-day refund guarantee for projects that are not completed or not started within 7 days of refund request.
                    </p>
                </div>

                <h2 class="text-2xl font-bold text-gray-900 mb-6">1. Refund Eligibility</h2>
                <p class="text-gray-700 mb-4">
                    You are eligible for a full refund if:
                </p>
                <ul class="list-disc list-inside text-gray-700 mb-6 space-y-2">
                    <li>Your project has not been started within 7 days of your refund request</li>
                    <li>Your project has not been completed within 7 days of your refund request</li>
                    <li>We are unable to deliver the service as promised due to technical issues on our end</li>
                    <li>There is a significant deviation from the agreed project scope without your consent</li>
                </ul>

                <h2 class="text-2xl font-bold text-gray-900 mb-6">2. Refund Process</h2>
                <p class="text-gray-700 mb-4">
                    To request a refund, please follow these steps:
                </p>
                <ol class="list-decimal list-inside text-gray-700 mb-6 space-y-2">
                    <li>Contact us at info@creativexwise.com with your order number and reason for refund</li>
                    <li>Provide details about your project and the specific issues encountered</li>
                    <li>We will review your request within 24-48 hours</li>
                    <li>If approved, the refund will be processed within 5-7 business days</li>
                </ol>

                <h2 class="text-2xl font-bold text-gray-900 mb-6">3. Refund Timeline</h2>
                <p class="text-gray-700 mb-6">
                    Refunds will be processed within 5-7 business days after approval. The time it takes for the 
                    refund to appear in your account depends on your payment method and financial institution.
                </p>

                <h2 class="text-2xl font-bold text-gray-900 mb-6">4. Non-Refundable Items</h2>
                <p class="text-gray-700 mb-4">
                    The following items are not eligible for refunds:
                </p>
                <ul class="list-disc list-inside text-gray-700 mb-6 space-y-2">
                    <li>Services that have been completed and delivered as agreed</li>
                    <li>Custom work that has been started and is in progress</li>
                    <li>Services where the client has provided incorrect or incomplete information</li>
                    <li>Refund requests made after 30 days from the original purchase date</li>
                </ul>

                <h2 class="text-2xl font-bold text-gray-900 mb-6">5. Partial Refunds</h2>
                <p class="text-gray-700 mb-6">
                    In some cases, we may offer partial refunds if only a portion of the service has been completed 
                    or if there are minor issues that don't warrant a full refund. This will be determined on a 
                    case-by-case basis.
                </p>

                <h2 class="text-2xl font-bold text-gray-900 mb-6">6. Quality Assurance</h2>
                <p class="text-gray-700 mb-6">
                    We are committed to delivering high-quality services. If you are not satisfied with the quality 
                    of our work, please contact us immediately. We will work with you to resolve any issues and 
                    may offer revisions or refunds as appropriate.
                </p>

                <h2 class="text-2xl font-bold text-gray-900 mb-6">7. Dispute Resolution</h2>
                <p class="text-gray-700 mb-6">
                    If you have any disputes regarding refunds or our services, please contact us first. We are 
                    committed to resolving all issues amicably. If we cannot reach a resolution, the matter will 
                    be subject to the jurisdiction of the courts in Mumbai, India.
                </p>

                <h2 class="text-2xl font-bold text-gray-900 mb-6">8. Changes to Refund Policy</h2>
                <p class="text-gray-700 mb-6">
                    We reserve the right to modify this refund policy at any time. Changes will be posted on this 
                    page with an updated "Last updated" date. Continued use of our services after changes constitutes 
                    acceptance of the new policy.
                </p>

                <h2 class="text-2xl font-bold text-gray-900 mb-6">9. Contact Information</h2>
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
