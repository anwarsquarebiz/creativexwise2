<?php

namespace App\Services;

class CurrencyService
{
    private $exchangeRates = [
        'USD' => 1.0,
        'INR' => 83.0, // Approximate rate, should be updated from API
    ];

    public function convert($amount, $fromCurrency, $toCurrency)
    {
        if ($fromCurrency === $toCurrency) {
            return $amount;
        }

        // Convert to USD first
        $usdAmount = $amount / $this->exchangeRates[$fromCurrency];
        
        // Convert from USD to target currency
        $convertedAmount = $usdAmount * $this->exchangeRates[$toCurrency];
        
        return round($convertedAmount, 2);
    }

    public function formatPrice($amount, $currency)
    {
        $symbols = [
            'USD' => '$',
            'INR' => '₹',
        ];

        $symbol = $symbols[$currency] ?? $currency;
        
        return $symbol . number_format($amount, 2);
    }

    public function getExchangeRate($fromCurrency, $toCurrency)
    {
        if ($fromCurrency === $toCurrency) {
            return 1.0;
        }

        return $this->exchangeRates[$toCurrency] / $this->exchangeRates[$fromCurrency];
    }

    public function updateExchangeRates()
    {
        // In a real application, you would fetch this from an API like:
        // - https://api.exchangerate-api.com/
        // - https://fixer.io/
        // - https://currencylayer.com/
        
        // For now, we'll use static rates
        // You can implement API calls here to get real-time rates
    }
}
