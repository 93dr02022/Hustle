<div class="w-full" x-data="window.TBhqVNUmCYEnOEj">

    {{-- Loading --}}
    <x-forms.loading />

    {{-- Header --}}
    <div class="mx-auto mb-10 max-w-7xl px-4 sm:px-6 md:px-12">
        <nav class="justify-between rounded-lg border border-gray-100 bg-white px-4 py-3 text-gray-700 shadow-sm dark:border-zinc-700 dark:bg-zinc-800 dark:shadow-none sm:flex sm:px-5"
            aria-label="Breadcrumb">

            {{-- Menu --}}
            <ol class="mb-3 inline-flex items-center space-x-1 sm:mb-0 md:space-x-3 md:rtl:space-x-reverse">

                {{-- Main home --}}
                <li>
                    <div class="flex items-center">
                        <a href="{{ url('/') }}"
                            class="text-sm font-medium text-gray-700 hover:text-primary-600 ltr:ml-1 rtl:mr-1 dark:text-zinc-300 dark:hover:text-white md:ltr:ml-2 md:rtl:mr-2">
                            @lang('messages.t_home')
                        </a>
                    </div>
                </li>

                {{-- My dashboard --}}
                <li aria-current="page">
                    <div class="flex items-center">
                        <svg aria-hidden="true" class="h-4 w-4 text-gray-400 rtl:rotate-180" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <a href="{{ url('seller/home') }}"
                            class="text-sm font-medium text-gray-700 hover:text-primary-600 ltr:ml-1 rtl:mr-1 dark:text-zinc-300 dark:hover:text-white md:ltr:ml-2 md:rtl:mr-2">
                            @lang('messages.t_my_dashboard')
                        </a>
                    </div>
                </li>

                {{-- Orders --}}
                <li aria-current="page">
                    <div class="flex items-center">
                        <svg aria-hidden="true" class="h-4 w-4 text-gray-400 rtl:rotate-180" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <a href="{{ url('seller/orders') }}"
                            class="text-sm font-medium text-gray-700 hover:text-primary-600 ltr:ml-1 rtl:mr-1 dark:text-zinc-300 dark:hover:text-white md:ltr:ml-2 md:rtl:mr-2">
                            @lang('messages.t_orders')
                        </a>
                    </div>
                </li>

                {{-- Order details --}}
                <li aria-current="page">
                    <div class="flex items-center">
                        <svg aria-hidden="true" class="h-4 w-4 text-gray-400 rtl:rotate-180" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="mx-1 text-sm font-medium text-gray-400 dark:text-zinc-400 md:mx-2">
                            @lang('messages.t_order_details')
                        </span>
                    </div>
                </li>

            </ol>

            {{-- Action buttons --}}
            <div class="flex items-center">

                @if (!$order->is_finished && $order->order->invoice && $order->order->invoice->status !== 'pending')

                    {{-- Cancel order --}}
                    @if ($order->status === 'pending')
                        <span class="block ltr:mr-4 rtl:ml-4">
                            <button
                                x-on:click="confirm('{{ __('messages.t_are_u_sure_u_want_to_cancel_order') }}') ? $wire.cancel() : ''"
                                wire:loading.attr="disabled" wire:target="cancel()" type="button"
                                class="inline-flex items-center rounded-sm border border-gray-300 bg-white px-4 py-2 text-[13px] font-medium text-gray-700 shadow-sm focus:outline-none focus:ring-2 focus:ring-primary-600 focus:ring-offset-2 focus:ring-offset-gray-50 hover:bg-gray-50 dark:border-zinc-500 dark:bg-zinc-600 dark:text-zinc-200 dark:hover:bg-zinc-500">
                                {{ __('messages.t_cancel_order') }}
                            </button>
                        </span>
                    @endif

                    {{-- Start the order --}}
                    @if ($order->status === 'pending')
                        <span class="block ltr:mr-4 rtl:ml-4">
                            <button x-on:click="start" type="button"
                                class="inline-flex items-center rounded-sm border border-primary-600 bg-primary-600 px-4 py-2 text-[13px] font-medium text-white shadow-sm focus:outline-none focus:ring-2 focus:ring-primary-600 focus:ring-offset-2 focus:ring-offset-primary-50 hover:bg-primary-700">
                                {{ __('messages.t_start_the_order') }}
                            </button>
                        </span>
                    @endif

                    {{-- Deliver work --}}
                    @if ($order->status === 'proceeded' || ($order->status === 'delivered' && !$order->is_finished))
                        <span class="block ltr:mr-4 rtl:ml-4">
                            <a href="{{ url('seller/orders/deliver', $order->uid) }}" type="button"
                                class="inline-flex items-center rounded-sm border border-primary-600 bg-primary-600 px-4 py-2 text-[13px] font-medium text-white shadow-sm focus:outline-none focus:ring-2 focus:ring-primary-600 focus:ring-offset-2 focus:ring-offset-primary-50 hover:bg-primary-700">
                                {{ __('messages.t_deliver_work') }}
                            </a>
                        </span>
                    @endif

                @endif

                {{-- Back to orders --}}
                <span class="block">
                    <a href="{{ url('seller/orders') }}"
                        class="inline-flex items-center rounded border border-gray-300 bg-white px-4 py-2 text-[13px] font-medium text-gray-700 shadow-sm focus:outline-none focus:ring-2 focus:ring-primary-600 focus:ring-offset-2 focus:ring-offset-gray-50 hover:bg-gray-50 dark:border-zinc-700/40 dark:bg-zinc-700/40 dark:text-zinc-200 dark:focus:ring-offset-zinc-700/40 dark:hover:bg-zinc-800">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="h-4 w-4 text-gray-500 ltr:mr-2 rtl:ml-2 rtl:rotate-180 dark:text-zinc-200"
                            viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z"
                                clip-rule="evenodd" />
                        </svg>

                        {{ __('messages.t_back_to_orders') }}
                    </a>
                </span>

            </div>

        </nav>
    </div>

    {{-- Content --}}
    <div class="mx-auto max-w-7xl px-4 sm:px-6 md:px-12">

        <div class="grid lg:grid-cols-3 gap-4">
            <div class="lg:col-span-2">
                <dl
                    class=" lg:py-6 p-6  rounded-lg border border-gray-200 bg-white shadow-sm dark:border-zinc-700 dark:bg-zinc-800">

                    {{-- Placed at --}}
                    <div class="rounded-t-lg bg-gray-50 px-6 py-5 dark:bg-zinc-700/40 sm:grid sm:grid-cols-3 sm:gap-4">
                        <dt class="text-sm font-semibold text-black dark:text-gray-400">
                            {{ __('messages.t_date_placed') }}
                        </dt>
                        <dd class="mt-1 text-sm text-gray-500 dark:text-gray-200 sm:col-span-2 sm:mt-0">
                            {{ format_date($order->placed_at, config('carbon-formats.F_j,_Y_h_:_i_A')) }}
                        </dd>
                    </div>

                    {{-- Status --}}
                    <div class="bg-white px-6 lg:py-12 py-6 dark:bg-zinc-600 sm:grid sm:grid-cols-3 sm:gap-4">
                        <dt class="text-sm font-semibold text-black dark:text-gray-400">{{ __('messages.t_status') }}
                        </dt>
                        <dd class="mt-1 sm:col-span-2 sm:mt-0">
                            @if ($order->order->invoice && $order->order->invoice->status === 'pending')
                                <span
                                    class="inline-flex items-center rounded-sm bg-amber-50 px-2.5 py-1 text-[13px] font-medium text-amber-800 dark:bg-transparent dark:text-amber-400">
                                    {{ __('messages.t_pending_payment') }}
                                </span>
                            @else
                                @switch($order->status)
                                    {{-- Pending --}}
                                    @case('pending')
                                        <span
                                            class="inline-flex items-center rounded-sm bg-yellow-50 px-2.5 py-1 text-[13px] font-medium text-yellow-800 dark:bg-transparent dark:text-yellow-400">
                                            {{ __('messages.t_pending') }}
                                        </span>
                                    @break

                                    {{-- Delivered --}}
                                    @case('delivered')
                                        <span
                                            class="inline-flex items-center rounded-sm bg-green-50 px-2.5 py-1 text-[13px] font-medium text-green-800 dark:bg-transparent dark:text-green-400">
                                            {{ __('messages.t_delivered') }}
                                        </span>
                                    @break

                                    {{-- Refunded --}}
                                    @case('refunded')
                                        <span
                                            class="inline-flex items-center rounded-sm bg-red-50 px-2.5 py-1 text-[13px] font-medium text-red-800 dark:bg-transparent dark:text-red-400">
                                            {{ __('messages.t_refunded') }}
                                        </span>
                                    @break

                                    {{-- Proceeded --}}
                                    @case('proceeded')
                                        <span
                                            class="inline-flex items-center rounded-sm bg-blue-50 px-2.5 py-1 text-[13px] font-medium text-blue-800 dark:bg-transparent dark:text-blue-400">
                                            {{ __('messages.t_in_the_process') }}
                                        </span>
                                    @break

                                    {{-- Canceled --}}
                                    @case('canceled')
                                        <span
                                            class="inline-flex items-center rounded-sm bg-gray-50 px-2.5 py-1 text-[13px] font-medium text-gray-800 dark:bg-transparent dark:text-gray-300">
                                            {{ __('messages.t_canceled') }}
                                        </span>
                                    @break

                                    @default
                                @endswitch
                            @endif
                        </dd>
                    </div>

                    {{-- Expected delivery date --}}
                    <div class="bg-gray-50 px-6 py-5 dark:bg-zinc-700/40 sm:grid sm:grid-cols-3 sm:gap-4">
                        <dt class="text-sm font-semibold text-black dark:text-gray-400">
                            {{ __('messages.t_expected_delivery_date') }}</dt>
                        <dd class="mt-1 text-sm text-gray-500 dark:text-gray-200 sm:col-span-2 sm:mt-0">
                            @if ($order->expected_delivery_date)
                                {{ format_date($order->expected_delivery_date, config('carbon-formats.F_j,_Y_h_:_i_A')) }}
                            @else
                                —
                            @endif
                        </dd>
                    </div>

                    {{-- Expected delivery date --}}
                    <div class="bg-gray-50 px-6 py-5 dark:bg-zinc-700/40 sm:grid sm:grid-cols-3 sm:gap-4">
                        <dt class="text-sm font-semibold text-black dark:text-gray-400">
                            {{ __('messages.t_expected_delivery_date') }}</dt>
                        <dd class="mt-1 text-sm text-gray-500 dark:text-gray-200 sm:col-span-2 sm:mt-0">
                            @if ($order->expected_delivery_date)
                                {{ format_date($order->expected_delivery_date, config('carbon-formats.F_j,_Y_h_:_i_A')) }}
                            @else
                                —
                            @endif
                        </dd>
                    </div>

                    {{-- Quantity --}}
                    <div class="bg-white px-6 py-5 dark:bg-zinc-600 sm:grid sm:grid-cols-3 sm:gap-4">
                        <dt class="text-sm font-semibold text-black dark:text-gray-400">{{ __('messages.t_quantity') }}
                        </dt>
                        <dd class="mt-1 text-sm text-gray-500 dark:text-gray-200 sm:col-span-2 sm:mt-0">
                            {{ $order->quantity }}
                        </dd>
                    </div>

                    {{-- Gig --}}
                    <div class="bg-white px-6 py-5 dark:bg-zinc-600 sm:grid sm:grid-cols-3 sm:gap-4">
                        <dt class="text-sm font-semibold text-black dark:text-gray-400">{{ __('messages.t_gig') }}</dt>
                        <dd class="mt-1 text-sm text-gray-500 dark:text-gray-200 sm:col-span-2 sm:mt-0">
                            <div class="flex items-center">
                                <div class="flex-shrink-0">
                                    <img class="lazy h-12 w-12 rounded-md object-cover object-center shadow-sm"
                                        src="{{ placeholder_img() }}"
                                        data-src="{{ src($order->gig->image_thumb_id) }}" alt="">
                                </div>
                                <div class="ltr:ml-4 rtl:mr-4">
                                    <h3
                                        class="mb-2 block text-sm font-medium leading-6 text-gray-700 dark:text-gray-50">
                                        {{ $order->gig->title }}
                                    </h3>
                                    <div class="mt-1 space-x-2 text-xs rtl:space-x-reverse">

                                        {{-- View gig --}}
                                        <a href="{{ url('service', $order->gig->slug) }}" target="_blank"
                                            class="font-medium text-primary-600">
                                            {{ __('messages.t_view_gig') }}
                                        </a>


                                        <span class="font-black text-gray-500 dark:text-gray-300">·</span>

                                        {{-- Edit gig --}}
                                        <a href="{{ url('seller/gigs/edit', $order->gig->uid) }}" target="_blank"
                                            class="font-medium text-primary-600">
                                            {{ __('messages.t_edit_gig') }}
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </dd>
                    </div>

                    {{-- List of upgrades --}}
                    @if ($order->has('upgrades'))
                        <div
                            class="rounded-b-lg bg-gray-50 px-6 py-5 dark:bg-zinc-700/40 sm:grid sm:grid-cols-3 sm:gap-4">
                            <dt class="text-sm font-semibold text-black dark:text-gray-400">
                                {{ __('messages.t_upgrades') }}
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
                                <fieldset class="space-y-5">
                                    @foreach ($order->upgrades as $upgrade)
                                        <div class="relative flex items-start">
                                            <div class="flex h-5 items-center">
                                                <input type="checkbox"
                                                    class="pointer-events-none h-4 w-4 cursor-not-allowed rounded-sm border-2 border-gray-200 text-gray-300 dark:disabled:bg-zinc-500"
                                                    checked disabled>
                                            </div>
                                            <div class="mt-[-3px] text-sm ltr:ml-3 rtl:mr-3">
                                                <label
                                                    class="text-sm font-medium text-gray-500 dark:text-gray-200">{{ $upgrade->title }}</label>
                                                <p class="font-normal text-gray-400">
                                                <div class="mt-1 flex text-sm">
                                                    <p class="text-xs text-gray-400">+ @money($upgrade->price, settings('currency')->code, true)</p>

                                                    @if ($upgrade->extra_days)
                                                        <p
                                                            class="border-gray-200 text-xs text-gray-400 ltr:ml-4 ltr:border-l ltr:pl-4 rtl:mr-4 rtl:border-r rtl:pr-4">
                                                            {{ __('messages.t_extra_days_delivery_time_short', ['time' => delivery_time_trans($upgrade->extra_days)]) }}
                                                        </p>
                                                    @else
                                                        <p
                                                            class="border-gray-200 text-xs text-gray-400 ltr:ml-4 ltr:border-l ltr:pl-4 rtl:mr-4 rtl:border-r rtl:pr-4">
                                                            {{ __('messages.t_no_changes_delivery_time') }}
                                                        </p>
                                                    @endif
                                                </div>
                                                </p>
                                            </div>
                                    @endforeach
                                </fieldset>
                            </dd>
                        </div>
                    @endif
                    @php
                        $review = $order->orderItemReviews()->first();
                    @endphp
                    {{-- Review --}}
                    @if ($review && $review->seen)
                        <div class="col-span-12">
                            <div
                                class="bg-white dark:bg-zinc-700 dark:border-zinc-600 relative block p-8 overflow-hidden border border-gray-100 rounded-lg mb-6">

                                {{-- <span
                            class="absolute inset-x-0 bottom-0 h-2  bg-gradient-to-r from-green-300 via-blue-500 to-purple-600"></span> --}}
                                <h1 class="text-base -ml-2 font-semibold text-black  my-5 dark:text-gray-400">
                                    {{ __('messages.t_reviews') }}</h1>

                                <div class="flex items-center">
                                    <img src="{{ placeholder_img() }}"
                                        data-src="{{ src($review->user->avatar_id) }}"
                                        alt="{{ $review->user->username }}" class="lazy h-8 w-8 rounded-full">
                                    <div class="ml-4 group">
                                        <a href="{{ url('profile', $review->user->username) }}" target="_blank"
                                            class="text-sm font-bold text-gray-900 dark:text-gray-100 flex items-center group-hover:text-primary-600 dark:group-hover:text-primary-600">
                                            {{ $review->user->username }}
                                            @if ($review->user->status === 'verified')
                                                <img data-tooltip-target="tooltip-account-verified-{{ $review->id }}"
                                                    class="ltr:ml-0.5 rtl:mr-0.5 h-4 w-4 -mt-0.5"
                                                    src="{{ url('img/auth/verified-badge.svg') }}"
                                                    alt="{{ __('messages.t_account_verified') }}">
                                                <div id="tooltip-account-verified-{{ $review->id }}" role="tooltip"
                                                    class="inline-block absolute invisible z-10 py-2 px-3 text-xs font-medium text-white bg-gray-900 rounded-sm shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                                    {{ __('messages.t_account_verified') }}
                                                </div>
                                            @endif

                                            {{-- Country --}}
                                            @if ($review->user->country)
                                                <div class="ml-2">
                                                    <img src="{{ placeholder_img() }}"
                                                        data-src="{{ countryFlag($review->user->country?->code) }}"
                                                        alt="{{ $review->user->country?->name }}"
                                                        class="lazy h-3 -mt-px rounded-sm">
                                                </div>
                                            @endif

                                        </a>
                                        <div class="mt-1 flex items-start">
                                            <div>
                                                {!! render_star_rating($review->rating, '1rem', '1rem', '#d0d0d0') !!}
                                            </div>
                                            <div wire:ignore class="rating-item-container"
                                                data-rating-value="{{ $review->rating }}"></div>
                                            <span class="ltr:ml-2 rtl:mr-2 text-[11px] font-normal text-gray-400"><span
                                                    class="pr-2 text-gray-300">•</span>
                                                {{ format_date($review->created_at, 'ago') }}</span>
                                        </div>
                                    </div>
                                </div>


                                {{-- Message --}}
                                @if ($review->message)
                                    <div class="mt-4 space-y-6 text-sm italic text-gray-600 dark:text-gray-50">
                                        <p>{{ $review->message }}</p>
                                    </div>
                                @endif
                                @if ($review->repliedReview)
                                    <div class="mt-5 pl-5">
                                        <div class="flex items-center">
                                            <img src="{{ placeholder_img() }}"
                                                data-src="{{ src($review->repliedReview->user->avatar_id) }}"
                                                alt="{{ $review->repliedReview->user->username }}"
                                                class="lazy h-8 w-8 rounded-full">
                                            <div class="ml-4 group">
                                                <a href="{{ url('profile', $review->repliedReview->user->username) }}"
                                                    target="_blank"
                                                    class="text-sm font-bold text-gray-900 dark:text-gray-100 flex items-center group-hover:text-primary-600 dark:group-hover:text-primary-600">
                                                    {{ $review->repliedReview->user->username }}
                                                    @if ($review->repliedReview->user->status === 'verified')
                                                        <img data-tooltip-target="tooltip-account-verified-{{ $review->id }}"
                                                            class="ltr:ml-0.5 rtl:mr-0.5 h-4 w-4 -mt-0.5"
                                                            src="{{ url('img/auth/verified-badge.svg') }}"
                                                            alt="{{ __('messages.t_account_verified') }}">
                                                        <div id="tooltip-account-verified-{{ $review->repliedReview->id }}"
                                                            role="tooltip"
                                                            class="inline-block absolute invisible z-10 py-2 px-3 text-xs font-medium text-white bg-gray-900 rounded-sm shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                                            {{ __('messages.t_account_verified') }}
                                                        </div>
                                                    @endif

                                                    {{-- Country --}}
                                                    @if ($review->repliedReview->user->country)
                                                        <div class="ml-2">
                                                            <img src="{{ placeholder_img() }}"
                                                                data-src="{{ countryFlag($review->repliedReview->user->country?->code) }}"
                                                                alt="{{ $review->repliedReview->user->country?->name }}"
                                                                class="lazy h-3 -mt-px rounded-sm">
                                                        </div>
                                                    @endif

                                                </a>
                                                <div class="mt-1 flex items-start">
                                                    <div>
                                                        {!! render_star_rating($review->repliedReview->rating, '1rem', '1rem', '#d0d0d0') !!}
                                                    </div>
                                                    <div wire:ignore class="rating-item-container"
                                                        data-rating-value="{{ $review->repliedReview->rating }}">
                                                    </div>
                                                    <span
                                                        class="ltr:ml-2 rtl:mr-2 text-[11px] font-normal text-gray-400"><span
                                                            class="pr-2 text-gray-300">•</span>
                                                        {{ format_date($review->repliedReview->created_at, 'ago') }}</span>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- Message --}}
                                        @if ($review->repliedReview->message)
                                            <div class="mt-4 space-y-6 text-sm italic text-gray-600 dark:text-gray-50">
                                                <p>{{ $review->repliedReview->message }}</p>
                                            </div>
                                        @endif
                                        <div class="flex items-center justify-start">
                                            {{-- Edit review --}}
                                            <a href="{{ url('seller/reviews/edit/' . $review->repliedReview->uid) }}"
                                                class="text-gray-800 dark:text-gray-300 group flex items-center px-2 py-2 text-sm"
                                                role="menuitem" tabindex="-1" id="menu-item-0">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="ltr:mr-3 rtl:ml-3 h-5 w-5 text-gray-400 group-hover:text-gray-500 dark:text-gray-300"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                    stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                </svg>
                                            </a>

                                            {{-- Delete --}}
                                            {{-- <button
                                                x-on:click="confirm('{{ __('messages.t_are_u_sure_u_want_to_delete_this_review') }}') ? $wire.delete('{{ $review->repliedReview->id }}') : ''"
                                                wire:loading.attr="disabled"
                                                wire:target="delete('{{ $review->repliedReview->id }}')"
                                                type="button"
                                                class="text-gray-800 dark:text-gray-300 dark:hover:text-gray-400 group flex items-center px-2 py-2 text-sm"
                                                role="menuitem" tabindex="-1"> --}}
                                            {{-- Loading indicator --}}
                                            {{-- <div wire:loading
                                                    wire:target="delete('{{ $review->repliedReview->id }}')">
                                                    <svg role="status"
                                                        class="ltr:mr-3 rtl:ml-3 inline w-5 h-5 text-gray-500 animate-spin"
                                                        viewBox="0 0 100 101" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
                                                            fill="#E5E7EB" />
                                                        <path
                                                            d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </div> --}}

                                            {{-- Icon --}}
                                            {{-- <div wire:loading.remove
                                                    wire:target="delete('{{ $review->id }}')">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        class="ltr:mr-3 rtl:ml-3 h-5 w-5 text-gray-400 group-hover:text-gray-500 dark:text-gray-300"
                                                        fill="none" viewBox="0 0 24 24"
                                                        stroke="currentColor" stroke-width="2">
                                                        <path stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                    </svg>
                                                </div> --}}

                                            </button>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    @endif
                </dl>
            </div>
            @if (count($timelines) > 0)
                <div
                    class=" px-6 py-4  lg:col-span-1 lg:py-8 text-sm bg-white border border-gray-200 rounded-lg shadow-sm  dark:border-zinc-700 dark:bg-zinc-800">
                    <h1 class="font-bold text-">Order Timeline</h1>

                    <ol class="relative text-xs border-l border-gray-200 dark:border-gray-700">
                        @foreach ($timelines as $timeline)
                            <li class="py-2 ml-4">
                                <div
                                    @switch($timeline->name)
                                        @case('Order delivered')
                                        class="absolute -left-1.5 mt-1.5 h-3 w-3 bg-orange-500 rounded-full border border-white  dark:border-gray-900 dark:bg-gray-700"
                                        @break
                                        @case('Order finished')
                                        class="absolute -left-1.5 mt-1.5 h-3 w-3 bg-green-500 rounded-full border border-white  dark:border-gray-900 dark:bg-gray-700"
                                        @break
                                        @case('Order started')
                                        class="absolute -left-1.5 mt-1.5 h-3 w-3 bg-yellow-400 rounded-full border border-white  dark:border-gray-900 dark:bg-gray-700"
                                        @break
                                        @case('Order Reviewed')
                                        class="absolute -left-1.5 mt-1.5 h-3 w-3 bg-blue-500 rounded-full border border-white  dark:border-gray-900 dark:bg-gray-700"
                                        @break
                                        @case('Order refunded')
                                        class="absolute -left-1.5 mt-1.5 h-3 w-3 bg-red-500 rounded-full border border-white  dark:border-gray-900 dark:bg-gray-700"
                                        @break
                                        @case('Order canceled')
                                        class="absolute -left-1.5 mt-1.5 h-3 w-3 bg-red-500 rounded-full border border-white  dark:border-gray-900 dark:bg-gray-700"
                                        @break
                                        @case('Order placed')
                                        class="absolute -left-1.5 mt-1.5 h-3 w-3 bg-black rounded-full border border-white  dark:border-gray-900 dark:bg-gray-700"
                                        @break


                                    @default

                                @endswitch>
                                </div>


                                @switch($timeline->name)
                                @case('Order delivered')
                                <h3 class="font-semibold  text-orange-500 dark:text-white">
                                @break
                                @case('Order finished')
                                <h3 class="font-semibold text-green-500 dark:text-white">
                                @break
                                @case('Order started')
                                <h3 class="font-semibold text-yellow-300 dark:text-white">
                                @break
                                @case('Order Reviewed')
                                <h3 class="font-semibold text-blue-500 dark:text-white">
                                @break
                                @case('Order refunded')
                                <h3 class="font-semibold text-red-500 dark:text-white">
                                @break
                                @case('Order canceled')
                                <h3 class="font-semibold text-red-500 dark:text-white">
                                @break

                                @case('Order placed')
                                <h3 class="font-semibold text-black dark:text-white">
                                @break
                            @default

                        @endswitch
                                    {{ $timeline->name }}</h3>
                                <p class="text-gray-500 py-2 dark:text-gray-400">
                                    {{ $timeline->description }}
                                </p>
                                <time class="mb-1 text-xs font-normal leading-none text-gray-400 dark:text-gray-500">
                                    {{ format_date($timeline->created_at, config('carbon-formats.F_j,_Y_h_:_i_A')) }}</time>

                            </li>
                        @endforeach

                    </ol>

                </div>
            @endif
        </div>
        {{-- chat section --}}
        <div class="rounded-lg bg-white dark:bg-zinc-700 overflow-hidden border border-gray-200 dark:border-zinc-600">

            {{-- conversation Section title --}}
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
                        <a href="{{ url('seller/orders') }}"
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


            {{-- Conversation --}}
            <div class="w-full">
                <ul role="list" class="px-4 pb-3 last:pb-0">

                    @foreach ($order->conversation as $message)
                        <li wire:key="seller-deliver-order-msg-id-{{ $message->id }}">
                            <div class="relative pb-8">
                                @if (!$loop->last)
                                    <span
                                        class="absolute top-5 ltr:left-5 rtl:right-5 ltr:-ml-px rtl:-mr-px h-full w-0.5 bg-gray-200 dark:bg-zinc-700"
                                        aria-hidden="true"></span>
                                @endif
                                <div class="relative flex items-start space-x-3 rtl:space-x-reverse">
                                    <div class="relative">
                                        <img class="h-10 w-10 rounded-full bg-gray-400 flex items-center justify-center ring-8 ring-white dark:ring-transparent object-cover lazy"
                                            src="{{ placeholder_img() }}"
                                            data-src="{{ src($message->from->avatar_id) }}"
                                            alt="{{ $message->from->username }}">
                                    </div>
                                    <div class="min-w-0 flex-1">
                                        <div>
                                            <div class="text-sm">
                                                <a href="{{ url('profile', $message->from->username) }}"
                                                    target="_blank"
                                                    class="font-bold tracking-wide text-gray-900 dark:text-gray-100">{{ $message->from->username }}</a>
                                            </div>
                                            <p class="mt-1 text-xs text-gray-500 dark:text-gray-400">
                                                {{ format_date($message->created_at, 'ago') }}</p>
                                        </div>
                                        <div class="mt-2 text-sm text-gray-700 dark:text-gray-200">
                                            <p>{!! nl2br($message->msg_content) !!}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    @endforeach

                </ul>
            </div>
            {{-- Send message --}}
            @if (!$order->is_finished)
                <div
                    class="mt-auto w-full px-4 py-10 border-t bg-gray-50 dark:bg-zinc-800 dark:border-zinc-700 rounded-b-lg">
                    <div class="flex items-start space-x-4 rtl:space-x-reverse">
                        <div class="flex-shrink-0">
                            <img class="inline-block h-10 w-10 rounded-full object-cover lazy"
                                src="{{ placeholder_img() }}" data-src="{{ src(auth()->user()->avatar_id) }}"
                                alt="{{ auth()->user()->username }}">
                        </div>
                        <div class="min-w-0 flex-1">
                            <div class="relative">
                                <div
                                    class="border border-gray-300 dark:border-zinc-600 rounded-lg shadow-sm overflow-hidden focus-within:border-primary-600 focus-within:ring-1 focus-within:ring-primary-600">
                                    <textarea rows="3" maxlength="750" wire:model.defer="message"
                                        class="block w-full py-3 border-0 resize-none focus:ring-0 sm:text-sm dark:bg-transparent dark:text-gray-200"
                                        placeholder="{{ __('messages.t_type_ur_message_here') }}"></textarea>
                                    <div class="py-2" aria-hidden="true">
                                        <div class="py-px">
                                            <div class="h-9"></div>
                                        </div>
                                    </div>
                                </div>

                                <div
                                    class="absolute bottom-0 inset-x-0 ltr:pl-3 rtl:pr-3 ltr:pr-2 rtl:pl-2 py-2 flex justify-between">
                                    <div></div>
                                    <div class="flex-shrink-0">
                                        <button wire:click="sendMessage" wire:loading.attr="disabled"
                                            wire:target="sendMessage" type="button"
                                            class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-primary-600 hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-600">{{ __('messages.t_send') }}</button>
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

@push('scripts')
    {{-- SweetAlert2 --}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    {{-- AlpineJs --}}
    <script>
        function TBhqVNUmCYEnOEj() {
            return {

                // Start the order
                start() {
                    const is_requirements_sent = @js($order->is_requirements_sent);

                    if (!is_requirements_sent) {
                        Swal.fire({
                            title: "<span class='text-lg font-bold text-black'>{{ __('messages.t_attention_needed') }}</span>",
                            html: "<p class='text-sm text-gray-500 font-normal overflow-hidden px-12'>{{ __('messages.t_buyer_didnt_send_requirements_yet_continue') }}</p>",
                            showCancelButton: true,
                            cancelButtonText: "{{ __('messages.t_cancel') }}",
                            confirmButtonText: "{{ __('messages.t_i_have_all_info_needed') }}",
                            confirmButtonColor: '',
                            focusConfirm: false,
                            allowOutsideClick: false
                        }).then((result) => {
                            if (result.isConfirmed) {
                                @this.start();
                            }
                        });
                    } else {

                        @this.start();

                    }
                }

            }
        }
        window.TBhqVNUmCYEnOEj = TBhqVNUmCYEnOEj();
    </script>
@endpush

@push('styles')
    <style>
        .application .swal2-styled.swal2-cancel {
            background-color: transparent !important;
            color: #8f8f8f;
        }

        .application .swal2-actions button {
            font-size: 13px;
            font-weight: 400;
            letter-spacing: .2px;
        }
    </style>
@endpush
