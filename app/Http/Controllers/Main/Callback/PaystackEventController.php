<?php

namespace App\Http\Controllers\Main\Callback;

use App\Http\Controllers\Controller;
use App\Http\Requests\Main\Callback\PaystackEventRequest;
use App\Jobs\Paystack\SaveCard;
use App\Jobs\Paystack\Transfer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class PaystackEventController extends Controller
{
    /**
     * Handle Paystack events
     * 
     */
    public function paystackEventBus(PaystackEventRequest $request)
    {
        if (Str::contains($request->event, 'transfer.')) {
            Transfer::dispatch($request->input('data'), $request->event);
        }

        if ($request->event == 'charge.success') {
            SaveCard::dispatch($request->input('data'));
        }
    }
}
