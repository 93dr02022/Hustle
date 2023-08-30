<?php

/*
 * This file is part of the Laravel Paystack package.
 *
 * (c) Prosper Otemuyiwa <prosperotemuyiwa@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [

    /**
     * Public Key From Paystack Dashboard
     *
     */
    'publicKey' => env('PAYSTACK_PUBLIC_KEY'),

    /**
     * Secret Key From Paystack Dashboard
     *
     */
    'secretKey' => env('PAYSTACK_SECRET_KEY'),

    /**
     * Live secret Key From Paystack Dashboard
     *
     */
    'liveSecretKey' => env('PAYSTACK_LIVE_SECRET_KEY'),

    /**
     * Paystack Payment URL
     *
     */
    'paymentUrl' =>  env('PAYSTACK_PAYMENT_URL'),

    /**
     * Optional email address of the merchant
     *
     */
    'merchantEmail' => env('PAYSTACK_MERCHANT_EMAIL'),

];
