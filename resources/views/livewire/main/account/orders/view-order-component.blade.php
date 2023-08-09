<main class="w-full" x-data>
    <div class="sm:px-6 lg:px-8">
        <div class="overflow-hidden bg-white rounded-lg shadow dark:bg-zinc-800">
            <div
                class="divide-y divide-gray-200 dark:divide-zinc-700 lg:grid lg:grid-cols-12 lg:divide-y-0 lg:divide-x rtl:divide-x-reverse">

                {{-- Sidebar --}}
                <aside class="hidden py-6 lg:col-span-3 lg:block" wire:ignore>
                    <x-main.account.sidebar />
                </aside>

                {{-- Section content --}}
                <div class="divide-y divide-gray-200 dark:divide-zinc-700 lg:col-span-9">

                    {{-- Breadcrumbs --}}
                    <div class="my-1 p-5 ml-2 flex flex-col sm:flex-row sm:flex-wrap sm:space-x-6 rtl:space-x-reverse">
                        <ol class="inline-flex items-center mb-3 space-x-1 md:space-x-3 md:rtl:space-x-reverse sm:mb-0">

                            {{-- Main home --}}
                            <li>
                                <div class="flex items-center">
                                    <a href="{{ url('/') }}"
                                        class="text-sm font-medium text-gray-700 hover:text-primary-600 dark:text-zinc-300 dark:hover:text-white">
                                        @lang('messages.t_home')
                                    </a>
                                </div>
                            </li>

                            {{-- orders --}}
                            <li aria-current="page">
                                <div class="flex items-center">
                                    <svg aria-hidden="true" class="w-4 h-4 text-gray-400 rtl:rotate-180"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <a href="{{ url('/account/orders') }}"
                                        class="ltr:ml-1 rtl:mr-1 text-sm font-medium text-gray-700 hover:text-primary-600 md:ltr:ml-2 md:rtl:mr-2 dark:text-zinc-300 dark:hover:text-white">
                                        @lang('messages.t_orders')
                                    </a>
                                </div>
                            </li>

                            {{-- order details --}}
                            <li aria-current="page">
                                <div class="flex items-center">
                                    <svg aria-hidden="true" class="w-4 h-4 text-gray-400 rtl:rotate-180"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="mx-1 text-sm font-medium text-gray-400 md:mx-2 dark:text-zinc-400">
                                        @lang('messages.t_order_details')
                                    </span>
                                </div>
                            </li>

                        </ol>
                    </div>

                    {{-- Form --}}
                    <div class="py-6 px-4 sm:p-6 lg:pb-8 h-[calc(100%-80px)]">

                        {{-- Section header --}}
                        <div class="mb-14">
                            <h2 class="text-base font-bold leading-6 text-gray-900 dark:text-gray-100">
                                {{ __('messages.t_order_details') }}</h2>
                            <p class="mt-1 text-sm text-gray-500 dark:text-gray-300">
                                View order details</p>
                        </div>

                        {{-- Session flash message --}}
                        @if (session()->has('message'))
                            <div class="p-4 mb-6 bg-yellow-100 border-yellow-400 ltr:border-l-4 rtl:border-r-4">
                                <div class="flex">
                                    <div class="flex-shrink-0">
                                        <svg class="w-5 h-5 text-yellow-400" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <div class="ltr:ml-3 rtl:mr-3">
                                        <p class="text-sm font-medium text-yellow-700">
                                            {{ session()->get('message') }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endif

                        {{-- Section content --}}
                        <div class="w-full mb-6">

                            {{-- if order is a gig service --}}
                            @if ($order->quotation == null)
                                <div class="mb-10 bg-white border border-gray-200 rounded-md dark:bg-zinc-700 dark:border-zinc-600"
                                    wire:key="orders-{{ $order->uid }}">
                                    <div
                                        class="flex items-center p-4 border-b bg-gray-50 dark:bg-zinc-600 sm:rounded-t-md sm:p-6 sm:grid sm:grid-cols-4 sm:gap-x-6 dark:border-zinc-600">

                                        {{-- Order quick stats --}}
                                        <dl
                                            class="grid flex-1 grid-cols-2 text-sm gap-x-6 sm:col-span-3 sm:grid-cols-2 lg:col-span-2">

                                            {{-- Date placed --}}
                                            <div>
                                                <dt class="font-medium text-gray-900 dark:text-gray-200">
                                                    {{ __('messages.t_date_placed') }}</dt>
                                                <dd class="mt-2 text-xs text-gray-500 dark:text-gray-50">
                                                    {{ format_date($order->placed_at, config('carbon-formats.F_j,_Y_h_:_i_A')) }}
                                                </dd>
                                            </div>

                                            {{-- Total amount --}}
                                            <div>
                                                <dt class="font-medium text-gray-900 dark:text-gray-200">
                                                    {{ __('messages.t_total_amount') }}</dt>
                                                <dd class="mt-1 font-medium text-gray-900 dark:text-white">
                                                    @money($order->total_value, settings('currency')->code, true)</dd>
                                            </div>

                                        </dl>

                                    </div>

                                    {{-- List of gigs in this order --}}
                                    <ul role="list" class="divide-y divide-gray-200 dark:divide-zinc-600">
                                        @foreach ($order->items as $item)
                                            <li class="p-4 sm:p-6">
                                                <div class="flex items-center sm:items-start">

                                                    {{-- Gig thumbnail --}}
                                                    <div
                                                        class="flex-shrink-0 hidden w-24 h-24 overflow-hidden bg-gray-200 rounded-lg dark:bg-zinc-600 md:block">
                                                        <img src="{{ placeholder_img() }}"
                                                            data-src="{{ src($item->gig->image_thumb_id) }}"
                                                            alt="{{ $item->gig->title }}"
                                                            class="object-cover object-center w-full h-full text-xs lazy">
                                                    </div>

                                                    {{-- Gig title / Upgrades --}}
                                                    <div class="flex-1 text-sm ltr:md:ml-6 rtl:md:mr-6">
                                                        <div
                                                            class="md:flex md:items-center md:justify-between md:space-x-4 rtl:space-x-reverse xl:pb-4">
                                                            <div>

                                                                {{-- Item title --}}
                                                                <h1
                                                                    class="mb-2 text-base font-bold text-gray-900 hover:text-primary-600 dark:text-white">
                                                                    <a href="{{ url('service', $item->gig->slug) }}"
                                                                        target="_blank">{{ $item->gig->title }}</a>
                                                                </h1>

                                                                {{-- Item quick stats --}}
                                                                <div
                                                                    class="inline-block md:!flex text-gray-500 dark:text-gray-300 text-xs space-y-4 md:space-y-0 md:space-x-6 lg:space-x-12 rtl:space-x-reverse">

                                                                    {{-- Item total price --}}
                                                                    <span class="flex">
                                                                        <div class="md:text-center">
                                                                            <p
                                                                                class="text-[10px] tracking-widest text-gray-400 dark:text-gray-300 uppercase">
                                                                                {{ __('messages.t_total') }}</p>
                                                                            <p
                                                                                class="mt-2 text-[11px] text-gray-600 dark:text-gray-200 font-medium">
                                                                                @money($item->total_value, settings('currency')->code, true)
                                                                            </p>
                                                                        </div>
                                                                    </span>

                                                                    {{-- Item quantity --}}
                                                                    <span class="flex">
                                                                        <div class="md:text-center">
                                                                            <p
                                                                                class="text-[10px] tracking-widest text-gray-400 dark:text-gray-300 uppercase">
                                                                                {{ __('messages.t_quantity') }}</p>
                                                                            <p
                                                                                class="mt-2 text-[11px] text-gray-600 dark:text-gray-200 font-medium">
                                                                                {{ $item->quantity }}
                                                                            </p>
                                                                        </div>
                                                                    </span>

                                                                    {{-- Expected delivery date --}}
                                                                    <span class="flex">
                                                                        <div class="md:text-center">
                                                                            <p
                                                                                class="text-[10px] tracking-widest text-gray-400 dark:text-gray-300 uppercase">
                                                                                {{ __('messages.t_expected_delivery_date') }}
                                                                            </p>
                                                                            <p
                                                                                class="mt-2 text-[11px] text-gray-600 dark:text-gray-200 font-medium">
                                                                                @if ($item->expected_delivery_date)
                                                                                    {{ format_date($item->expected_delivery_date, config('carbon-formats.F_j,_Y_h_:_i_A')) }}
                                                                                @else
                                                                                    —
                                                                                @endif
                                                                            </p>
                                                                        </div>
                                                                    </span>

                                                                    {{-- Status --}}
                                                                    <span class="flex">
                                                                        <div class="md:text-center">
                                                                            <p
                                                                                class="text-[10px] tracking-widest text-gray-400 dark:text-gray-300 uppercase">
                                                                                {{ __('messages.t_status') }}</p>

                                                                            {{-- Has refund opened --}}
                                                                            @if ($item->refund && $item->refund->status === 'pending')
                                                                                <p
                                                                                    class="mt-2 text-[11px] text-red-500 font-medium">
                                                                                    {{ __('messages.t_dispute_opened') }}
                                                                                </p>
                                                                            @elseif ($item->order->invoice && $item->order->invoice->status === 'pending')
                                                                                <p
                                                                                    class="mt-2 text-[11px] text-amber-500 font-medium">
                                                                                    {{ __('messages.t_pending_payment') }}
                                                                                </p>
                                                                            @else
                                                                                @switch($item->status)
                                                                                    {{-- Pending --}}
                                                                                    @case('pending')
                                                                                        <p
                                                                                            class="mt-2 text-[11px] text-amber-500 font-medium">
                                                                                            {{ __('messages.t_pending') }}
                                                                                        </p>
                                                                                    @break

                                                                                    {{-- In progress --}}
                                                                                    @case('proceeded')
                                                                                        <p data-tooltip-target="orders-{{ $order->uid }}-item-{{ $item->id }}-status-proceeded"
                                                                                            class="mt-2 text-[11px] text-blue-500 font-medium cursor-pointer">
                                                                                            {{ __('messages.t_in_the_process') }}
                                                                                        </p>
                                                                                        <div id="orders-{{ $order->uid }}-item-{{ $item->id }}-status-proceeded"
                                                                                            role="tooltip"
                                                                                            class="absolute z-10 invisible inline-block px-3 py-2 text-xs font-medium text-white bg-gray-900 rounded-sm shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                                                                            {{ format_date($item->proceeded_at, config('carbon-formats.F_j,_Y_h_:_i_A')) }}
                                                                                        </div>
                                                                                    @break

                                                                                    {{-- Delivered --}}
                                                                                    @case('delivered')
                                                                                        <p data-tooltip-target="orders-{{ $order->uid }}-item-{{ $item->id }}-status-delivered"
                                                                                            class="mt-2 text-[11px] text-green-500 font-medium cursor-pointer">
                                                                                            {{ __('messages.t_delivered') }}
                                                                                        </p>
                                                                                        <div id="orders-{{ $order->uid }}-item-{{ $item->id }}-status-delivered"
                                                                                            role="tooltip"
                                                                                            class="absolute z-10 invisible inline-block px-3 py-2 text-xs font-medium text-white bg-gray-900 rounded-sm shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                                                                            {{ format_date($item->delivered_at, config('carbon-formats.F_j,_Y_h_:_i_A')) }}
                                                                                        </div>
                                                                                    @break

                                                                                    {{-- Canceled --}}
                                                                                    @case('canceled')
                                                                                        <p data-tooltip-target="orders-{{ $order->uid }}-item-{{ $item->id }}-status-canceled"
                                                                                            class="mt-2 text-[11px] text-gray-500 font-medium cursor-pointer">
                                                                                            {{ __('messages.t_canceled') }}
                                                                                        </p>
                                                                                        <div id="orders-{{ $order->uid }}-item-{{ $item->id }}-status-canceled"
                                                                                            role="tooltip"
                                                                                            class="absolute z-10 invisible inline-block px-3 py-2 text-xs font-medium text-white bg-gray-900 rounded-sm shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                                                                            {{ format_date($item->canceled_at, config('carbon-formats.F_j,_Y_h_:_i_A')) }}
                                                                                        </div>
                                                                                    @break

                                                                                    {{-- Refunded --}}
                                                                                    @case('refunded')
                                                                                        <p data-tooltip-target="orders-{{ $order->uid }}-item-{{ $item->id }}-status-refunded"
                                                                                            class="mt-2 text-[11px] text-red-500 font-medium cursor-pointer">
                                                                                            {{ __('messages.t_refunded') }}
                                                                                        </p>
                                                                                        <div id="orders-{{ $order->uid }}-item-{{ $item->id }}-status-refunded"
                                                                                            role="tooltip"
                                                                                            class="absolute z-10 invisible inline-block px-3 py-2 text-xs font-medium text-white bg-gray-900 rounded-sm shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                                                                            {{ format_date($item->refunded_at, config('carbon-formats.F_j,_Y_h_:_i_A')) }}
                                                                                        </div>
                                                                                    @break

                                                                                    @default
                                                                                @endswitch
                                                                            @endif


                                                                        </div>
                                                                    </span>

                                                                </div>

                                                            </div>

                                                            {{-- Item actions --}}
                                                            <div class="flex mt-4 space-x-3 md:mt-0">
                                                                <button type="button"
                                                                    data-dropdown-toggle="orders-{{ $order->uid }}-item-{{ $item->id }}-actions-dropdown"
                                                                    data-dropdown-placement="left-start"
                                                                    class="inline-flex justify-center px-2 py-2 text-xs font-medium text-gray-700 bg-white border border-gray-200 rounded-full shadow-sm dark:border-zinc-700 dark:text-gray-300 dark:bg-zinc-800 hover:bg-gray-50 dark:hover:bg-zinc-900 focus:outline-none focus:ring-0">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        class="w-5 h-5 text-gray-400" fill="none"
                                                                        viewBox="0 0 24 24" stroke="currentColor"
                                                                        stroke-width="2">
                                                                        <path stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                                                    </svg>
                                                                </button>
                                                                <div id="orders-{{ $order->uid }}-item-{{ $item->id }}-actions-dropdown"
                                                                    class="z-10 hidden w-48 bg-white divide-y divide-gray-100 rounded shadow dark:bg-zinc-800">
                                                                    <ul class="text-sm text-gray-700 dark:text-gray-200"
                                                                        aria-labelledby="dropdownDefault">

                                                                        {{-- Contact seller --}}
                                                                        <li>
                                                                            <a href="{{ url('messages/new', $item->owner?->username) }}"
                                                                                target="_blank"
                                                                                class="flex items-center px-4 py-2 rounded-t hover:bg-gray-100 dark:hover:bg-zinc-700">
                                                                                <svg class="w-5 h-5 text-gray-500 ltr:mr-3 rtl:ml-3"
                                                                                    stroke="currentColor"
                                                                                    fill="currentColor"
                                                                                    stroke-width="0"
                                                                                    viewBox="0 0 24 24" height="1em"
                                                                                    width="1em"
                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                    <path d="M7 7h10v2H7zm0 4h7v2H7z">
                                                                                    </path>
                                                                                    <path
                                                                                        d="M20 2H4c-1.103 0-2 .897-2 2v18l5.333-4H20c1.103 0 2-.897 2-2V4c0-1.103-.897-2-2-2zm0 14H6.667L4 18V4h16v12z">
                                                                                    </path>
                                                                                </svg>
                                                                                <span
                                                                                    class="text-xs font-medium text-gray-700 dark:text-gray-300">{{ __('messages.t_contact_seller') }}</span>
                                                                            </a>
                                                                        </li>

                                                                        @php

                                                                            // Check expected delivery date
                                                                            if ($item->expected_delivery_date && !$item->is_finished) {
                                                                                // Parse expected delivery date
                                                                                $parsed = \Carbon\Carbon::parse($item->expected_delivery_date);

                                                                                // Check if date is past
                                                                                if ($parsed->isPast()) {
                                                                                    // Date in past, check item status
                                                                                    if (in_array($item->status, ['delivered', 'proceeded', 'pending'])) {
                                                                                        // Can request refund
                                                                                        $can_refund = true;
                                                                                    } else {
                                                                                        // Cannot request refund
                                                                                        $can_refund = false;
                                                                                    }
                                                                                } elseif ($item->status === 'delivered' && !$item->is_finished) {
                                                                                    // Can refund
                                                                                    $can_refund = true;
                                                                                } else {
                                                                                    // Cannot request refund
                                                                                    $can_refund = false;
                                                                                }
                                                                            } else {
                                                                                $can_refund = false;
                                                                            }

                                                                        @endphp

                                                                        {{-- View refund --}}
                                                                        @if ($item->refund)
                                                                            <li>
                                                                                <a href="{{ url('account/refunds/details', $item->refund->uid) }}"
                                                                                    target="_blank"
                                                                                    class="flex items-center px-4 py-2 hover:bg-gray-100 dark:hover:bg-zinc-700">
                                                                                    <svg class="w-5 h-5 text-gray-500 ltr:mr-3 rtl:ml-3"
                                                                                        stroke="currentColor"
                                                                                        fill="currentColor"
                                                                                        stroke-width="0"
                                                                                        viewBox="0 0 24 24"
                                                                                        height="1em" width="1em"
                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                                        <path d="M16 12h2v4h-2z">
                                                                                        </path>
                                                                                        <path
                                                                                            d="M20 7V5c0-1.103-.897-2-2-2H5C3.346 3 2 4.346 2 6v12c0 2.201 1.794 3 3 3h15c1.103 0 2-.897 2-2V9c0-1.103-.897-2-2-2zM5 5h13v2H5a1.001 1.001 0 0 1 0-2zm15 14H5.012C4.55 18.988 4 18.805 4 18V8.815c.314.113.647.185 1 .185h15v10z">
                                                                                        </path>
                                                                                    </svg>
                                                                                    <span
                                                                                        class="text-xs font-medium text-gray-700 dark:text-gray-300">{{ __('messages.t_refund_details') }}</span>
                                                                                </a>
                                                                            </li>
                                                                        @else
                                                                            {{-- Request refund --}}
                                                                            @if ($can_refund)
                                                                                <li>
                                                                                    <a href="{{ url('account/refunds/request', $item->uid) }}"
                                                                                        target="_blank"
                                                                                        class="flex items-center px-4 py-2 hover:bg-gray-100 dark:hover:bg-zinc-700">
                                                                                        <svg class="w-5 h-5 text-gray-500 ltr:mr-3 rtl:ml-3"
                                                                                            stroke="currentColor"
                                                                                            fill="currentColor"
                                                                                            stroke-width="0"
                                                                                            viewBox="0 0 24 24"
                                                                                            height="1em"
                                                                                            width="1em"
                                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                                            <path d="M16 12h2v4h-2z">
                                                                                            </path>
                                                                                            <path
                                                                                                d="M20 7V5c0-1.103-.897-2-2-2H5C3.346 3 2 4.346 2 6v12c0 2.201 1.794 3 3 3h15c1.103 0 2-.897 2-2V9c0-1.103-.897-2-2-2zM5 5h13v2H5a1.001 1.001 0 0 1 0-2zm15 14H5.012C4.55 18.988 4 18.805 4 18V8.815c.314.113.647.185 1 .185h15v10z">
                                                                                            </path>
                                                                                        </svg>
                                                                                        <span
                                                                                            class="text-xs font-medium text-gray-700 dark:text-gray-300">{{ __('messages.t_request_refund') }}</span>
                                                                                    </a>
                                                                                </li>
                                                                            @endif
                                                                        @endif

                                                                        {{-- Delivered work --}}
                                                                        @if (in_array($item->status, ['proceeded', 'delivered']))
                                                                            <li>
                                                                                <a href="{{ url('account/orders/files?orderId=' . $order->uid . '&itemId=' . $item->uid) }}"
                                                                                    class="flex items-center px-4 py-2 hover:bg-gray-100 dark:hover:bg-zinc-700">
                                                                                    <svg class="w-5 h-5 text-gray-500 ltr:mr-3 rtl:ml-3"
                                                                                        stroke="currentColor"
                                                                                        fill="currentColor"
                                                                                        stroke-width="0"
                                                                                        viewBox="0 0 24 24"
                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                                        <path
                                                                                            d="M2.165 19.551c.186.28.499.449.835.449h15c.4 0 .762-.238.919-.606l3-7A.998.998 0 0 0 21 11h-1V7c0-1.103-.897-2-2-2h-6.1L9.616 3.213A.997.997 0 0 0 9 3H4c-1.103 0-2 .897-2 2v14h.007a1 1 0 0 0 .158.551zM17.341 18H4.517l2.143-5h12.824l-2.143 5zM18 7v4H6c-.4 0-.762.238-.919.606L4 14.129V7h14z">
                                                                                        </path>
                                                                                    </svg>
                                                                                    <span
                                                                                        class="text-xs font-medium text-gray-700 dark:text-gray-300">{{ __('messages.t_delivered_work') }}</span>
                                                                                </a>
                                                                            </li>
                                                                        @endif

                                                                        {{-- Cancel service --}}
                                                                        @if ($item->status === 'pending' && $item->order->invoice && $item->order->invoice->status === 'paid')
                                                                            <li>
                                                                                <button type="button"
                                                                                    x-on:click="confirm('{{ __('messages.t_are_u_sure_u_want_to_cancel_service') }}') ? $wire.cancel('{{ $item->uid }}') : ''"
                                                                                    wire:loading.attr="disabled"
                                                                                    wire:target="cancel('{{ $item->uid }}')"
                                                                                    class="flex items-center w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-zinc-700">

                                                                                    {{-- Loading indicator --}}
                                                                                    <div wire:loading
                                                                                        wire:target="cancel('{{ $item->uid }}')">
                                                                                        <svg role="status"
                                                                                            class="inline w-5 h-5 text-gray-500 ltr:mr-3 rtl:ml-3 animate-spin"
                                                                                            viewBox="0 0 100 101"
                                                                                            fill="none"
                                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                                            <path
                                                                                                d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
                                                                                                fill="#E5E7EB" />
                                                                                            <path
                                                                                                d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
                                                                                                fill="currentColor" />
                                                                                        </svg>
                                                                                    </div>

                                                                                    {{-- Icon --}}
                                                                                    <div wire:loading.remove
                                                                                        wire:target="cancel('{{ $item->uid }}')">
                                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                                            class="w-5 h-5 text-gray-500 ltr:mr-3 rtl:ml-3 group-hover:text-gray-600"
                                                                                            fill="none"
                                                                                            viewBox="0 0 24 24"
                                                                                            stroke="currentColor"
                                                                                            stroke-width="2">
                                                                                            <path
                                                                                                stroke-linecap="round"
                                                                                                stroke-linejoin="round"
                                                                                                d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636" />
                                                                                        </svg>
                                                                                    </div>

                                                                                    <span
                                                                                        class="text-xs font-medium">{{ __('messages.t_cancel_service') }}</span>

                                                                                </button>
                                                                            </li>
                                                                        @endif

                                                                        {{-- Send requirements --}}
                                                                        @if (
                                                                            ($item->status === 'pending' || $item->status !== 'proceeded') &&
                                                                                $item->order->invoice &&
                                                                                $item->order->invoice->status === 'paid')
                                                                            <li>
                                                                                <a href="{{ url('account/orders/requirements?order=' . $order->uid . '&item=' . $item->uid) }}"
                                                                                    class="flex items-center px-4 py-2 rounded-b hover:bg-gray-100 dark:hover:bg-zinc-700">
                                                                                    <svg class="w-5 h-5 text-gray-500 ltr:mr-3 rtl:ml-3"
                                                                                        stroke="currentColor"
                                                                                        fill="currentColor"
                                                                                        stroke-width="0"
                                                                                        viewBox="0 0 24 24"
                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                                        <path
                                                                                            d="M20.563 3.34a1.002 1.002 0 0 0-.989-.079l-17 8a1 1 0 0 0 .026 1.821L8 15.445v6.722l5.836-4.168 4.764 2.084a1 1 0 0 0 1.399-.85l1-15a1.005 1.005 0 0 0-.436-.893zm-2.466 14.34-5.269-2.306L16 9.167l-7.649 4.25-2.932-1.283 13.471-6.34-.793 11.886z">
                                                                                        </path>
                                                                                    </svg>
                                                                                    <span
                                                                                        class="text-xs font-medium text-gray-700 dark:text-gray-300">{{ __('messages.t_send_requirements') }}</span>
                                                                                </a>
                                                                            </li>
                                                                        @endif

                                                                        {{-- Make review --}}
                                                                        @if ($item->status === 'delivered' && $item->is_finished)
                                                                            <li>
                                                                                <a href="{{ url('account/reviews/create/' . $item->uid) }}"
                                                                                    class="flex items-center px-4 py-2 rounded-b hover:bg-gray-100 dark:hover:bg-zinc-700">
                                                                                    <svg class="w-5 h-5 text-gray-500 ltr:mr-3 rtl:ml-3"
                                                                                        stroke="currentColor"
                                                                                        fill="currentColor"
                                                                                        stroke-width="0"
                                                                                        viewBox="0 0 24 24"
                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                                        <path
                                                                                            d="m6.516 14.323-1.49 6.452a.998.998 0 0 0 1.529 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082a1 1 0 0 0-.59-1.74l-5.701-.454-2.467-5.461a.998.998 0 0 0-1.822 0L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.214 4.107zm2.853-4.326a.998.998 0 0 0 .832-.586L12 5.43l1.799 3.981a.998.998 0 0 0 .832.586l3.972.315-3.271 2.944c-.284.256-.397.65-.293 1.018l1.253 4.385-3.736-2.491a.995.995 0 0 0-1.109 0l-3.904 2.603 1.05-4.546a1 1 0 0 0-.276-.94l-3.038-2.962 4.09-.326z">
                                                                                        </path>
                                                                                    </svg>
                                                                                    <span
                                                                                        class="text-xs font-medium text-gray-700 dark:text-gray-300">{{ __('messages.t_make_a_review') }}</span>
                                                                                </a>
                                                                            </li>
                                                                        @endif

                                                                    </ul>
                                                                </div>
                                                            </div>

                                                        </div>

                                                        {{-- Upgrades --}}
                                                        @if ($item->has('upgrades'))
                                                            <div class="mt-4">
                                                                <fieldset class="space-y-5">

                                                                    @foreach ($item->upgrades as $upgrade)
                                                                        <div class="relative flex items-start">
                                                                            <div class="flex items-center h-5">
                                                                                <input type="checkbox"
                                                                                    class="w-4 h-4 text-gray-300 border-2 border-gray-200 rounded-sm cursor-not-allowed pointer-events-none dark:text-gray-400 dark:border-zinc-600 dark:disabled:bg-zinc-600"
                                                                                    checked disabled>
                                                                            </div>
                                                                            <div
                                                                                class="ltr:ml-3 rtl:mr-3 text-sm mt-[-3px]">
                                                                                <label
                                                                                    class="text-xs font-medium text-gray-500 dark:text-gray-100">
                                                                                    {{ $upgrade->title }}
                                                                                </label>
                                                                                <p class="font-normal text-gray-400">
                                                                                <div class="flex mt-1 text-sm">
                                                                                    <p
                                                                                        class="text-xs text-gray-400 dark:text-gray-300">
                                                                                        + @money($upgrade->price, settings('currency')->code, true)</p>

                                                                                    @if ($upgrade->extra_days)
                                                                                        <p
                                                                                            class="text-xs text-gray-400 border-gray-200 ltr:ml-4 rtl:mr-4 ltr:pl-4 rtl:pr-4 ltr:border-l rtl:border-r dark:border-zinc-600 dark:text-gray-300">
                                                                                            {{ __('messages.t_extra_days_delivery_time_short', ['time' => delivery_time_trans($upgrade->extra_days)]) }}
                                                                                        </p>
                                                                                    @else
                                                                                        <p
                                                                                            class="text-xs text-gray-400 border-gray-200 ltr:ml-4 rtl:mr-4 ltr:pl-4 rtl:pr-4 ltr:border-l rtl:border-r dark:border-zinc-600 dark:text-gray-300">
                                                                                            {{ __('messages.t_no_changes_delivery_time') }}
                                                                                        </p>
                                                                                    @endif
                                                                                </div>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    @endforeach

                                                                </fieldset>
                                                            </div>
                                                        @endif

                                                    </div>

                                                </div>

                                                <div class="mt-6 sm:flex sm:justify-between">

                                                    {{-- You have to send requirements to seller asap --}}
                                                    @if ($item->order->invoice && $item->order->invoice->status === 'paid' && $item->status === 'pending')
                                                        @if (!$item->gig->requirements()->exists() || !$item->is_requirements_sent)
                                                            <div class="flex items-center">
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    class="w-5 h-5 text-amber-600" fill="none"
                                                                    viewBox="0 0 24 24" stroke="currentColor"
                                                                    stroke-width="2">
                                                                    <path stroke-linecap="round"
                                                                        stroke-linejoin="round"
                                                                        d="M20.618 5.984A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016zM12 9v2m0 4h.01" />
                                                                </svg>
                                                                <p
                                                                    class="text-xs font-medium ltr:ml-2 rtl:mr-2 text-amber-600">
                                                                    {{ __('messages.t_u_have_send_reqs_asap_to_seller') }}
                                                                </p>
                                                            </div>
                                                        @else
                                                            <div></div>
                                                        @endif
                                                    @else
                                                        <div></div>
                                                    @endif

                                                    {{-- Footer actions --}}
                                                    <div
                                                        class="flex items-center pt-4 mt-6 space-x-4 text-sm font-medium border-t border-gray-200 divide-x divide-gray-200 dark:divide-zinc-600 rtl:divide-x-reverse sm:mt-0 sm:ltr:ml-4 sm:rtl:mr-4 sm:border-none sm:pt-0 rtl:space-x-reverse">

                                                        {{-- View gig --}}
                                                        <div class="flex justify-center flex-1">
                                                            <a href="{{ url('service', $item->gig->slug) }}"
                                                                target="_blank"
                                                                class="text-primary-600 whitespace-nowrap hover:text-primary-600">{{ __('messages.t_view_gig') }}</a>
                                                        </div>

                                                        {{-- Send requirements --}}
                                                        @if (
                                                            ($item->status === 'pending' || $item->status !== 'proceeded') &&
                                                                $item->order->invoice &&
                                                                $item->order->invoice->status === 'paid')
                                                            <div class="flex justify-center flex-1 ltr:pl-4 rtl:pr-4">
                                                                <a href="{{ url('account/orders/requirements?order=' . $order->uid . '&item=' . $item->uid) }}"
                                                                    class="text-primary-600 whitespace-nowrap hover:text-primary-600">{{ __('messages.t_send_requirements') }}</a>
                                                            </div>
                                                        @endif
                                                    </div>

                                                </div>
                                                <div class="flex sm:flex-row flex-col mt-3 items-start space-x-2 justify-between">

                                                    <div class="flex-1">
                                                        <section>
                                                            <div
                                                                class="rounded-lg bg-white dark:bg-zinc-700 overflow-hidden border border-gray-200 dark:border-zinc-600">
                                                                {{-- Section title --}}
                                                                <div class="bg-gray-50 dark:bg-zinc-600 px-8 py-4 rounded-t-md">
                                                                    <div
                                                                        class="ltr:-ml-4 rtl:-mr-4 -mt-4 flex justify-between items-center flex-wrap sm:flex-nowrap">
                                                                        <div class="ltr:ml-4 rtl:mr-4 mt-4">
                                                                            <h3
                                                                                class="text-sm leading-6 font-semibold tracking-wide text-gray-600 dark:text-gray-100">
                                                                                {{ __('messages.t_conversation_with_seller') }}</h3>
                                                                            <p class="text-xs font-normal text-gray-400 dark:text-gray-300">
                                                                                {{ __('messages.t_communicate_with_seller_about_changes') }}
                                                                            </p>
                                                                        </div>
                                                                        <div class="ltr:ml-4 rtl:mr-4 mt-4 flex-shrink-0">
                                                                            <a href="{{ url('account/orders') }}"
                                                                                class="inline-flex items-center py-2 px-3 border border-transparent rounded-full bg-transparent hover:bg-transparent focus:outline-none focus:ring-0">
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    class="h-4 w-4 text-primary-600 hover:text-primary-600 ltr:mr-2 rtl:ml-2" " fill=" none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M11 17l-5-5m0 0l5-5m-5 5h12" />
                                                                                </svg>
                                                                                <span class="text-xs font-medium text-primary-600 hover:text-primary-600">
                                                                                    {{ __('messages.t_back_to_orders') }}
                                                                                </span>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    {{-- Chat messages --}}
                                                                    <div class="w-full">
                                                                        <ul role="list" class="py-6 px-8">

                                                                                @foreach ($item->conversation as $message)
                                                                                    <li
                                                                                        wire:key="seller-deliver-order-msg-id-{{ $message->id }}">
                                                                                        <div class="relative pb-8">
                                                                                            @if (!$loop->last)
                                                                                                <span
                                                                                                    class="absolute top-5 ltr:left-5 rtl:right-5 ltr:-ml-px rtl:-mr-px h-full w-0.5 bg-gray-200"
                                                                                                    aria-hidden="true"></span>
                                                                                            @endif
                                                                                            <div
                                                                                                class="relative flex items-start space-x-3 rtl:space-x-reverse">
                                                                                                <div class="relative">
                                                                                                    <img class="h-10 w-10 rounded-md bg-gray-400 flex items-center justify-center ring-8 ring-white dark:ring-zinc-700 object-cover lazy"
                                                                                                        src="{{ placeholder_img() }}"
                                                                                                        data-src="{{ src($message->from->avatar_id) }}"
                                                                                                        alt="{{ $message->from->username }}">
                                                                                                </div>
                                                                                                <div class="min-w-0 flex-1">
                                                                                                    <div>
                                                                                                        <div class="text-sm">
                                                                                                            <a href="{{ url('profile', $message->from->username) }}"
                                                                                                                target="_blank"
                                                                                                                class="font-medium text-gray-900 dark:text-gray-100">{{ $message->from->username }}</a>
                                                                                                        </div>
                                                                                                        <p class="mt-1 text-xs text-gray-500">
                                                                                                            {{ format_date($message->created_at, 'ago') }}
                                                                                                        </p>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="mt-2 text-sm text-gray-700 dark:text-gray-100">
                                                                                                        <p>{!! nl2br($message->msg_content) !!}</p>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </li>
                                                                                @endforeach
                                                                        </ul>
                                                                        {{-- Send message --}}
                                                                        @if (!$item->is_finished)
                                                                            <div
                                                                                class="mt-auto w-full px-8 py-10 border-t bg-gray-50 dark:border-zinc-700 dark:bg-zinc-600 rounded-br-md">
                                                                                <div class="flex items-start space-x-4 rtl:space-x-reverse">
                                                                                    <div class="flex-shrink-0">
                                                                                        <img class="inline-block h-10 w-10 rounded-full object-cover lazy"
                                                                                            src="{{ placeholder_img() }}"
                                                                                            data-src="{{ src(auth()->user()->avatar_id) }}"
                                                                                            alt="{{ auth()->user()->username }}">
                                                                                    </div>
                                                                                    <div class="min-w-0 flex-1">
                                                                                        <div class="relative">
                                                                                            <div
                                                                                                class="border border-gray-300 dark:border-zinc-500 rounded-lg shadow-sm overflow-hidden focus-within:border-primary-600 focus-within:ring-1 focus-within:ring-primary-600">
                                                                                                <textarea rows="3" maxlength="750" wire:model.defer="message"
                                                                                                    class="block w-full py-3 border-0 resize-none focus:ring-0 sm:text-sm dark:bg-transparent dark:text-gray-200 dark:placeholder-gray-300"
                                                                                                    placeholder="{{ __('messages.t_type_ur_message_here') }}"></textarea>
                                                                                                <div class="py-2" aria-hidden="true">
                                                                                                    <div class="py-px">
                                                                                                        <div class="h-9"></div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>

                                                                                            <div
                                                                                                class="absolute bottom-0 inset-x-0 ltr:pl-3 ltr:pr-2 rtl:pr-3 rtl:pl-2 py-2 flex justify-between">
                                                                                                <div></div>
                                                                                                <div class="flex-shrink-0">
                                                                                                    <button wire:click="sendMessage({{$item->id}})"
                                                                                                        wire:loading.attr="disabled"
                                                                                                        wire:target="sendMessage({{$item->id}})"
                                                                                                        type="button"
                                                                                                        class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-primary-600 hover:bg-primary-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-700 dark:ring-offset-primary-600">{{ __('messages.t_send') }}</button>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </section>
                                                    </div>


                                                    <!-- Order timeline -->
                                                    @if ($item->orderTimelines()->count())
                                                        <x-order-timelines :order-item="$item" />
                                                    @endif
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>

                                </div>
                            @endif
                            {{-- if order is a quotation service --}}
                            @if ($order->quotation !== null)
                                <div class="mb-10 bg-white border border-gray-200 rounded-md dark:bg-zinc-700 dark:border-zinc-600"
                                    wire:key="orders-{{ $order->uid }}">
                                    <div
                                        class="flex items-center p-4 border-b bg-gray-50 dark:bg-zinc-600 sm:rounded-t-md sm:p-6 sm:grid sm:grid-cols-4 sm:gap-x-6 dark:border-zinc-600">

                                        {{-- Order quick stats --}}
                                        <dl
                                            class="grid flex-1 grid-cols-2 text-sm gap-x-6 sm:col-span-3 sm:grid-cols-2 lg:col-span-2">

                                            {{-- Date placed --}}
                                            <div>
                                                <dt class="font-medium text-gray-900 dark:text-gray-200">
                                                    {{ __('messages.t_date_placed') }}</dt>
                                                <dd class="mt-2 text-xs text-gray-500 dark:text-gray-50">
                                                    {{ format_date($order->placed_at, config('carbon-formats.F_j,_Y_h_:_i_A')) }}
                                                </dd>
                                            </div>

                                            {{-- Total amount --}}
                                            <div>
                                                <dt class="font-medium text-gray-900 dark:text-gray-200">
                                                    {{ __('messages.t_total_amount') }}</dt>
                                                <dd class="mt-1 font-medium text-gray-900 dark:text-white">
                                                    @money($order->total_value, settings('currency')->code, true)</dd>
                                            </div>
                                        </dl>
                                    </div>

                                    <div role="list"
                                        class="p-4 divide-y divide-gray-200 bg-blue-50 dark:bg-slate-700 dark:divide-slate-600 sm:p-6">
                                        {{-- Item quick stats --}}
                                        <div
                                            class="grid grid-cols-2 mb-5 sm:grid-cols-3 md:grid-cols-4 gap-x-4 gap-y-4">

                                            {{-- Item total price --}}
                                            <span class="flex">
                                                <div class="md:text-center">
                                                    <p
                                                        class="text-[10px] tracking-widest text-gray-400 dark:text-gray-300 uppercase">
                                                        {{ __('messages.t_total') }}</p>
                                                    <p
                                                        class="mt-2 text-[11px] text-gray-600 dark:text-gray-200 font-medium">
                                                        @money($order->quotation->total + $order->quotation->total_tax, settings('currency')->code, true)
                                                    </p>
                                                </div>
                                            </span>

                                            {{-- Item quantity --}}
                                            <span class="flex">
                                                <div class="md:text-center">
                                                    <p
                                                        class="text-[10px] tracking-widest text-gray-400 dark:text-gray-300 uppercase">
                                                        {{ __('messages.t_quantity') }}</p>
                                                    <p
                                                        class="mt-2 text-[11px] text-gray-600 dark:text-gray-200 font-medium">
                                                        {{ $order->quotation->total_quantity }}
                                                    </p>
                                                </div>
                                            </span>

                                            {{-- total Discount --}}
                                            <span class="flex">
                                                <div class="md:text-center">
                                                    <p
                                                        class="text-[10px] tracking-widest text-gray-400 dark:text-gray-300 uppercase">
                                                        {{ __('Total discount') }}</p>
                                                    <p
                                                        class="mt-2 text-[11px] text-gray-600 dark:text-gray-200 font-medium">
                                                        {{ $order->quotation->total_discount }}
                                                    </p>
                                                </div>
                                            </span>
                                        </div>

                                        {{-- Footer actions --}}
                                        <div
                                            class="pt-4 space-x-4 border-t border-gray-200 divide-x divide-gray-200 dark:divide-zinc-600 sm:mt-0 sm:border-none sm:pt-0">

                                            {{-- View gig --}}
                                            <div class="flex justify-end text-sm font-medium">
                                                <a href="/account/orders/{{ $order->id }}/quotation"
                                                    class="text-primary-600 whitespace-nowrap hover:text-primary-600">View
                                                    quotation</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>
</main>
