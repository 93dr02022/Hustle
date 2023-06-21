<?php

namespace App\Http\Controllers\Main\Callback;

use App\Http\Controllers\Controller;
use App\Http\Requests\Main\Callback\PaystackEventRequest;
use App\Jobs\Paystack\Transfer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PaystackEventController extends Controller
{
    /**
     * Handle Paystack events
     * 
     */
    public function paystackEventBus(PaystackEventRequest $request)
    {
        Transfer::dispatch($request->input('data'), $request->event);
    }
}
