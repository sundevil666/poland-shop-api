<?php

namespace App\Services\Order;

use App\Models\Order;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class Checkout
{
    public function __construct()
    {
    }

    public function checkout(Order $order): Response
    {
        DB::beginTransaction();
        try {
            $order->startCheckout();
            $order->save();

            $signData = [
                'sessionId'     => (string) $order->id,
                'merchantId'    => 259640,
//                'orderId'       => (int) $order->id,
                'amount'        => (int) round($order->getPrice() * 100, 0),
                "currency"      => "PLN",
                'crc'           => 'f68aa7d7522f2307',
            ];
            $sign = hash('sha384', json_encode($signData, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) );

            $checkoutData = [
                "merchantId"    => 259640,
                "posId"         => 259640,
                "sessionId"     => (string) $order->id,
                "amount"        => (int) round($order->getPrice() * 100, 0),
                "currency"      => "PLN",
                "description"   => "Purchase id $order->id",
                "email"         => $order->user_information['email'],
                "client"        => "{$order->user_information['name']} {$order->user_information['surname']}",
                "country"       => "PL",
                "phone"         => (string) ($order->user_information['phone'] ?? null),
                "language"      => "PL",
                "method"        => 0,
                "urlReturn"     => url("/api/orders/{$order->id}/verify"),
                "urlStatus"     => url("/api/orders/{$order->id}/verify"),
                "channel"       => 12294,
                "shipping"      => $order->getBoxPrice() * 100,
                "sign"          => $sign,
            ];

            Log::debug('Checkout::checkout data', [
                '$sign'         => $sign,
                '$signData'     => $signData,
                '$checkoutData' => $checkoutData,
            ]);

            $response = Http::withBasicAuth(
                '259640',
                '7f704442a9563c9aed97111fa45b8329'
            )->post('https://sandbox.przelewy24.pl/api/v1/transaction/register', $checkoutData);

            Log::debug('Checkout::checkout response', [ '$response' => $response, ]);

            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();

            throw $e;
        }

        return $response;
    }
}
