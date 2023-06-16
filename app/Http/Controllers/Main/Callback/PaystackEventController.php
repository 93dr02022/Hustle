<?php

namespace App\Http\Controllers\Main\Callback;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PaystackEventController extends Controller
{
    /**
     * Handle Paystack events
     */
    public function paystackEventBus(Request $request)
    {
        if (
            $request->header('HTTP_X_PAYSTACK_SIGNATURE') !==
            hash_hmac('sha512', json_encode($request->all()), config('paystack.secretKey'))
        ) {
            Log::info('Logging from inner code block');
            Log::info($request->all());
        }

        Log::info('Logging from outter code block');
        Log::info($request->all());
    }
}
