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
        <div class="flex">
            <dl
                class="mb-8 flex-1 rounded-lg border border-gray-200 bg-white shadow-sm dark:border-zinc-700 dark:bg-zinc-800">

                {{-- Placed at --}}
                <div class="rounded-t-lg bg-gray-50 px-6 py-5 dark:bg-zinc-700/40 sm:grid sm:grid-cols-3 sm:gap-4">
                    <dt class="text-sm font-semibold text-black dark:text-gray-400">{{ __('messages.t_date_placed') }}
                    </dt>
                    <dd class="mt-1 text-sm text-gray-500 dark:text-gray-200 sm:col-span-2 sm:mt-0">
                        {{ format_date($order->placed_at, config('carbon-formats.F_j,_Y_h_:_i_A')) }}
                    </dd>
                </div>

                {{-- Status --}}
                <div class="bg-white px-6 py-5 dark:bg-zinc-600 sm:grid sm:grid-cols-3 sm:gap-4">
                    <dt class="text-sm font-semibold text-black dark:text-gray-400">{{ __('messages.t_status') }}</dt>
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
                                    src="{{ placeholder_img() }}" data-src="{{ src($order->gig->image_thumb_id) }}"
                                    alt="">
                            </div>
                            <div class="ltr:ml-4 rtl:mr-4">
                                <h3 class="mb-2 block text-sm font-medium leading-6 text-gray-700 dark:text-gray-50">
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
                    <div class="rounded-b-lg bg-gray-50 px-6 py-5 dark:bg-zinc-700/40 sm:grid sm:grid-cols-3 sm:gap-4">
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

            </dl>
            <div class="w-48 pl-3">
                <h1 class="font-bold">Order Timeline</h1>

                <ol class="relative border-l border-gray-200 dark:border-gray-700">
                    <li class="mb-10 ml-4">
                        <div
                            class="absolute -left-1.5 mt-1.5 h-3 w-3 rounded-full border border-white bg-gray-200 dark:border-gray-900 dark:bg-gray-700">
                        </div>
                        <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">
                            {{ format_date($order->placed_at, config('carbon-formats.F_j,_Y_h_:_i_A')) }}</time>
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Order placed</h3>
                        <p class="mb-4 text-[13px] text-gray-500 dark:text-gray-400">
                            <a class="font-extrabold tracking-wide"
                                href="{{ '/profile/' . $order->order->buyer->username }}"
                                target="_blank">{{ $order->order->buyer->username }}</a> placed the order
                        </p>
                    </li>

                    @if ($order->proceeded_at)
                        <li class="mb-10 ml-4">
                            <div
                                class="absolute -left-1.5 mt-1.5 h-3 w-3 rounded-full border border-white bg-gray-200 dark:border-gray-900 dark:bg-gray-700">
                            </div>
                            <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">
                                {{ format_date($order->proceeded_at, config('carbon-formats.F_j,_Y_h_:_i_A')) }}</time>
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Order started</h3>
                        </li>
                    @endif

                    @if ($order->delivered_at)
                        <li class="mb-10 ml-4">
                            <div
                                class="absolute -left-1.5 mt-1.5 h-3 w-3 rounded-full border border-white bg-gray-200 dark:border-gray-900 dark:bg-gray-700">
                            </div>
                            <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">
                                {{ format_date($order->delivered_at, config('carbon-formats.F_j,_Y_h_:_i_A')) }}</time>
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Order delivered</h3>
                        </li>
                    @endif

                    @if ($order->canceled_at)
                        <li class="mb-10 ml-4">
                            <div
                                class="absolute -left-1.5 mt-1.5 h-3 w-3 rounded-full border border-white bg-gray-200 dark:border-gray-900 dark:bg-gray-700">
                            </div>
                            <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">
                                {{ format_date($order->canceled_at, config('carbon-formats.F_j,_Y_h_:_i_A')) }}</time>
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Order cancelled</h3>
                        </li>
                    @endif

                    @if ($order->refunded_at)
                        <li class="mb-10 ml-4">
                            <div
                                class="absolute -left-1.5 mt-1.5 h-3 w-3 rounded-full border border-white bg-gray-200 dark:border-gray-900 dark:bg-gray-700">
                            </div>
                            <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">
                                {{ format_date($order->refunded_at, config('carbon-formats.F_j,_Y_h_:_i_A')) }}</time>
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Order refunded</h3>
                        </li>
                    @endif

                    @if ($order->finished_at)
                        <li class="mb-10 ml-4">
                            <div
                                class="absolute -left-1.5 mt-1.5 h-3 w-3 rounded-full border border-white bg-gray-200 dark:border-gray-900 dark:bg-gray-700">
                            </div>
                            <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">
                                {{ format_date($order->finished_at, config('carbon-formats.F_j,_Y_h_:_i_A')) }}</time>
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">The order was completed
                            </h3>
                        </li>
                    @endif

                </ol>

            </div>
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
