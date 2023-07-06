<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\PaymentRequest;
use Braintree\Gateway;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function generateToken(Request $request, Gateway $gateway)
    {
        $token = $gateway->clientToken()->generate();
        $data = [
            'token' => $token,
            'success' => true
        ];
        return response()->json($data, 200);
    }

    public function makePayment(PaymentRequest $request, Gateway $gateway)
    {
        $result = $gateway->transaction()->sale([
            'amount' => $request->amount,
            'paymentMethodNonce' => $request->token,
            'options' => [
                'submitForSettlement' => true
            ],
        ]);
        if ($result->success) {
            $data = [
                'message' => 'Transazione Approvata',
                'success' => true
            ];
            return response()->json($data, 200);
        } else {
            $data = [
                'message' => 'Transazione Rifiutata',
                'success' => false
            ];
            return response()->json($data, 401);
        }
    }
}
