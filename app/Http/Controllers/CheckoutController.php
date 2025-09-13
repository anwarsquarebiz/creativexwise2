<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderItem;

class CheckoutController extends Controller
{
    public function index()
    {
        return view('checkout');
    }
    
    public function success($orderId)
    {
        $order = Order::findOrFail($orderId);
        return view('order-success', compact('orderId'));
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'customer.first_name' => 'required|string|max:255',
            'customer.last_name' => 'required|string|max:255',
            'customer.email' => 'required|email|max:255',
            'customer.phone' => 'required|string|max:20',
            'customer.address' => 'required|string',
            'customer.city' => 'required|string|max:255',
            'customer.state' => 'required|string|max:255',
            'customer.zip' => 'required|string|max:20',
            'customer.country' => 'required|string|max:255',
            'customer.payment_method' => 'required|string',
            'items' => 'required|array',
            'items.*.service' => 'required|string',
            'items.*.priceINR' => 'required|numeric',
            'items.*.priceUSD' => 'required|numeric',
            'items.*.quantity' => 'required|integer|min:1',
            'subtotal' => 'required|numeric',
            'tax' => 'required|numeric',
            'total' => 'required|numeric',
            'currency' => 'required|string|in:USD,INR'
        ]);
        
        try {
            // Create order
            $order = Order::create([
                'order_number' => 'ORD-' . time() . '-' . rand(1000, 9999),
                'customer_name' => $request->customer['first_name'] . ' ' . $request->customer['last_name'],
                'customer_email' => $request->customer['email'],
                'customer_phone' => $request->customer['phone'],
                'customer_company' => $request->customer['company'] ?? null,
                'billing_address' => json_encode([
                    'address' => $request->customer['address'],
                    'city' => $request->customer['city'],
                    'state' => $request->customer['state'],
                    'zip' => $request->customer['zip'],
                    'country' => $request->customer['country']
                ]),
                'payment_method' => $request->customer['payment_method'],
                'subtotal' => $request->subtotal,
                'tax_amount' => $request->tax,
                'total_amount' => $request->total,
                'currency' => $request->currency,
                'status' => 'pending',
                'order_date' => now()
            ]);
            
            // Create order items
            foreach ($request->items as $item) {
                OrderItem::create([
                    'order_id' => $order->id,
                    'service_name' => $item['service'],
                    'price_inr' => $item['priceINR'],
                    'price_usd' => $item['priceUSD'],
                    'quantity' => $item['quantity'],
                    'total_price' => ($request->currency === 'USD' ? $item['priceUSD'] : $item['priceINR']) * $item['quantity']
                ]);
            }
            
            return response()->json([
                'success' => true,
                'order_id' => $order->id,
                'order_number' => $order->order_number,
                'message' => 'Order placed successfully'
            ]);
            
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error processing order: ' . $e->getMessage()
            ], 500);
        }
    }
}
