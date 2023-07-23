<?php

namespace App\Support;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\Validation\ValidationException;

class Utils
{
    /**
     * Json success response helper without extra headers
     * and body
     * 
     * @param  mixed  $message
     * @param  mixed  $data
     * @return \Illuminate\Http\JsonResponse
     */
    public static function successResp($data = [], $message = 'successful')
    {
        return response()->json([
            'success' => true,
            'message' => $message,
            'data' => $data,
        ], 200);
    }

    /**
     * Json post request response helper
     *
     * @param  mixed  $message
     * @param  mixed  $data
     * @return \Illuminate\Http\JsonResponse
     */
    public static function postResp($data = [], $message = 'success')
    {
        return response()->json([
            'success' => true,
            'message' => $message,
            'data' => $data,
        ]);
    }

    /**
     * Json post request response helper
     *
     * @param  mixed  $message
     * @param  mixed  $data
     * @return \Illuminate\Http\JsonResponse
     */
    public static function errorResp($message = 'Error occured while processing your request', $code = 409)
    {
        return response()->json([
            'success' => false,
            'message' => $message,
        ], 409);
    }

    /**
     * Throw validation with json repoonse
     *
     * @param  mixed  $errors
     * @return \Illuminate\Http\JsonResponse
     */
    public static function validateResp($errors = [])
    {
        throw ValidationException::withMessages($errors);
    }

    /**
     * generate payment reference
     * 
     * @return string
     */
    public static function paymentRef()
    {
        return "F" . strtoupper(substr(bin2hex(random_bytes(5)), 0, 9));
    }

    /**
     * Get week range
     */
    public static function weekRange(): array
    {
        return [
            now()->startOfWeek()->format('Y-m-d'),
            now()->startOfWeek()->addDays(4)->format('Y-m-d')
        ];
    }

    /**
     * Get week days monday to friday
     */
    public static function weekDays() : array
    {
        return ['monday', 'tuesday', 'wednesday', 'thursday', 'friday'];
    }

    /**
     * Get year monthys
     */
    public static function yearMonths() : array
    {
        return [
            'january', 'february', 'march', 'april', 'may', 'june',
            'july', 'august', 'september', 'october', 'november', 'december'
        ];
    }
}
