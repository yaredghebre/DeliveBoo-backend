<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function generateToken()
    {
        return 'generate';
    }

    public function makePayment()
    {
        return 'make payment';
    }
}
