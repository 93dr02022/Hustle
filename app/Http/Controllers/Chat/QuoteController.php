<?php

namespace App\Http\Controllers\Chat;

use App\Http\Controllers\Controller;
use App\Models\Quotation;
use Illuminate\Http\Request;

class QuoteController extends Controller
{
    /**
     * Get quote information
     * 
     * @return \Illuminate\http\JsonResponse
     */
    public function getQuote(Request $request)
    {
        $quote = Quotation::where('reference', $request->quoteRef)
            ->where('user_id', auth()->id())
            ->first();

        return response()->json($quote);
    }

    /**
     * Get quote information
     * 
     * @return \Illuminate\http\JsonResponse
     */
    public function quotes(Request $request)
    {
        $quote = Quotation::when($request->has('search'))->where(function ($query) use ($request) {
            $query->where('reference', 'LIKE', "%{$request->search}%")
            ->orWhere('first_name', 'LIKE', "%{$request->search}%")
            ->orWhere('last_name', 'LIKE', "%{$request->search}%")
            ->orWhere('total', 'LIKE', "%{$request->search}%");
        })
            ->where('user_id', auth()->id())
            ->limit(20)
            ->orderBy('id', 'desc')
            ->get();

        return response()->json($quote);
    } 
}
