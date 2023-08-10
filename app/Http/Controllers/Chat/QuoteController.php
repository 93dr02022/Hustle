<?php

namespace App\Http\Controllers\Chat;

use App\Http\Controllers\Controller;
use App\Models\Quotation;
use Illuminate\Http\Request;

class QuoteController extends Controller
{
    /**
     * Get quote information
     */
    public function getQuote(Request $request)
    {
        $quote = Quotation::where('reference', $request->quoteRef)
            ->where('user_id', auth()->id())
            ->first();

        return response()->json($quote);
    }
}
