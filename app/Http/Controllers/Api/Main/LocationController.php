<?php

namespace App\Http\Controllers\Api\Main;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\State;
use App\Support\Utils;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    /**
     * Get all countries
     *
     * @param $search
     * @return \Illuminate\Http\JsonResponse
     */
    public function countries(Request $request)
    {
        $countries = Country::select('id', 'name', 'emoji', 'currency_code', 'phonecode')
            ->where(function ($query) use ($request) {
                if ($request->has('search')) {
                    $query->where('name', 'LIKE', "%$request->search%")
                        ->orWhere('phonecode', 'LIKE', "%$request->search%");
                }
            })
            ->get();

        return Utils::successResp($countries);
    }

    /**
     * Get country divisions
     *
     * @param $country $search
     * @return \Illuminate\Http\JsonResponse
     */
    public function states(Request $request)
    {
        $divisions = State::where('country_id', $request->country)
            ->where(function ($query) use ($request) {
                if ($request->has('search')) {
                    $query->where('name', 'LIKE', "%$request->search%");
                }
            })
            ->get();

        return Utils::successResp($divisions);
    }
}
