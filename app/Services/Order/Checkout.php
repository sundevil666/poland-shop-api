<?php

namespace App\Services\Order;

use App\Mail\OrderVerified;
use App\Models\Order;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

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
                'crc'           => config('p24.crc'),
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
//                "urlReturn"     => url("/api/orders/{$order->id}/verify"),
                "urlReturn"     => 'https://polandgroups.pl/shop/confirmed',
                "urlStatus"     => url("/api/orders/{$order->id}/notification"),
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
                config('p24.login'),
                config('p24.password')
            )->post(config('p24.url') . '/transaction/register', $checkoutData);

            Log::debug('Checkout::checkout response', [ '$response' => $response, ]);

            try {
                Mail::to([$order->user_information['email'], config('mail.from.address')])->send(new OrderVerified($order));
            } catch (\Throwable $e) {
                Log::error('Error sending email: ' . $e->getMessage(), [
                    'error' => $e,
                    'traceAsString' => $e->getTraceAsString(),
                    'trace' => $e->getTrace(),
//                    'request' => $request->all(),
                ]);
            }

//            try {
//                Mail::to([config('mail.from.address'), config('mail.from.address')])->send(new OrderVerified($order));
//            } catch (\Throwable $e) {
//                Log::error('Error sending admin email: ' . $e->getMessage(), [
//                    'error' => $e,
//                    'traceAsString' => $e->getTraceAsString(),
//                    'trace' => $e->getTrace(),
////                    'request' => $request->all(),
//                ]);
//            }

            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();

            throw $e;
        }

        return $response;
    }
}
