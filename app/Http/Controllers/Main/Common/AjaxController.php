<?php

namespace App\Http\Controllers\Main\Common;

use App\Http\Controllers\Controller;
use App\Models\UserSearch;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    /**
     * Get an authenticated user recent searches
     * 
     * @return \Illuminate\Http\JsonResponse
     */
    public function getUserSearch(Request $request)
    {
        $searches = UserSearch::where('user_id', auth()->id())
            ->latest('updated_at')
            ->take(5)
            ->get();

        return response()->json($searches);
    }

    /**
     * Set a new search keys word
     * 
     * @return \Illuminate\Http\JsonResponse
     */
    public function saveKeywords(Request $request)
    {
        rescue(function () use ($request) {
            UserSearch::upsert(
                [
                    'user_id' => auth()->id(),
                    'keywords' => substr(strtolower($request->keywords), 0, 100),
                ],
                ['user_id', 'keywords'],
                ['keywords']
            );
        });

        return response()->json([]);
    }

    /**
     * Set a new search keys word
     * 
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteKeywords(Request $request)
    {
        rescue(fn () => UserSearch::whereUserId(auth()->id())->delete());

        return response()->json([]);
    }
}
