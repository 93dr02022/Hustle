<?php

namespace App\Http\Controllers\Chat;

use App\Http\Controllers\Controller;
use App\Models\CustomOffer;
use App\Models\Quotation;
use App\Support\Utils;
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
        $quote = Quotation::where('id', $request->quoteId)
            ->with('items')
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

    /**
     * Get custom offer details
     * 
     * @return \Illuminate\http\JsonResponse
     */
    public function offerDetails(Request $request)
    {
        $offer = CustomOffer::where('id', $request->offerId)->with('gig')->first();

        return response()->json($offer);
    }

    /**
     * Create a new custom offer
     * 
     * @return \Illuminate\http\JsonResponse
     */
    public function withdrawOffer(Request $request)
    {
        try {
            CustomOffer::whereId($request->offerId)
                ->whereNull('offer_status')
                ->update([
                    'offer_status' => 'withdrawn',
                ]);

            return Utils::successResp();
        } catch (\Throwable $th) {
            return Utils::errorResp();
        }
    }
}
