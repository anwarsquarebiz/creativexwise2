<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TranslationController extends Controller
{
    public function translate(Request $request)
    {
        $text = $request->input('text');
        $targetLanguage = $request->input('target_language', 'en');
        
        // Google Translate API integration
        $apiKey = config('services.google_translate.api_key');
        
        if (!$apiKey) {
            return response()->json(['error' => 'Translation service not configured'], 500);
        }

        try {
            $response = Http::post('https://translation.googleapis.com/language/translate/v2', [
                'key' => $apiKey,
                'q' => $text,
                'target' => $targetLanguage,
                'format' => 'text'
            ]);

            if ($response->successful()) {
                $data = $response->json();
                $translatedText = $data['data']['translations'][0]['translatedText'];
                
                return response()->json([
                    'translated_text' => $translatedText,
                    'source_language' => $data['data']['translations'][0]['detectedSourceLanguage'] ?? 'auto'
                ]);
            }
            
            return response()->json(['error' => 'Translation failed'], 500);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Translation service error'], 500);
        }
    }

    public function setLanguage(Request $request)
    {
        $language = $request->input('language');
        session(['locale' => $language]);
        
        // Set the app locale
        app()->setLocale($language);
        
        return response()->json(['success' => true, 'language' => $language]);
    }

    public function setCurrency(Request $request)
    {
        $currency = $request->input('currency');
        session(['currency' => $currency]);
        
        return response()->json(['success' => true, 'currency' => $currency]);
    }

    public function getCurrentSettings()
    {
        return response()->json([
            'language' => session('locale', 'en'),
            'currency' => session('currency', 'USD')
        ]);
    }
}
