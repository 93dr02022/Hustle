<div class="relative w-full mx-auto" x-data="window.MainquotesPaymentPage" x-init="initialize()">
    {{-- Loading --}}
    <div class="fixed top-0 left-0 z-50 bg-black w-full h-full opacity-80" wire:loading>
        <div class="w-full h-full flex items-center justify-center">
            <div role="status">
                <svg aria-hidden="true" class="mx-auto w-12 h-12 text-gray-500 animate-spin dark:text-gray-600 fill-white"
                    viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
                        fill="currentColor" />
                    <path
                        d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
                        fill="currentFill" />
                </svg>
                <span
                    class="text-xs font-medium tracking-wider text-white mt-4 block">{{ __('messages.t_please_wait_dots') }}</span>
            </div>
        </div>
    </div>

    <div class="max-w-4xl mx-auto">
        {{-- Quotation items --}}
        @if ($quotation)

            {{-- quotation items table list --}}
            @if (!$goToPay && !$payCompleted && !$payHasError)
                <div class="mb-6 bg-white dark:bg-zinc-800 shadow-sm rounded-md border dark:border-zinc-700">
                    {{-- Section title --}}
                    <div class="bg-gray-50 dark:bg-zinc-700 px-7 py-4 rounded-t-md">
                        <div class="-ml-4 -mt-4 flex justify-between items-center flex-wrap sm:flex-nowrap">
                            <div class="ltr:ml-4 rtl:mr-4 mt-4">
                                <h3 class="text-sm leading-6 font-bold tracking-wide text-gray-800 dark:text-gray-100">
                                    {{ __('Quotation') }}</h3>
                                <p class="text-xs font-normal text-gray-400 dark:text-gray-300">
                                    {{ __('Quotation information with order items') }}</p>
                            </div>
                            <div class="ltr:ml-4 rtl:mr-4 mt-4 flex-shrink-0">
                                <a href="{{ url('/') }}"
                                    class="inline-flex items-center py-2 px-3 border border-transparent rounded-full bg-transparent hover:bg-transparent focus:outline-none focus:ring-0">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="h-4 w-4 text-primary-600 hover:text-primary-600 ltr:mr-2 rtl:ml-2"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M11 17l-5-5m0 0l5-5m-5 5h12" />
                                    </svg>
                                    <span class="text-xs font-medium text-primary-600 hover:text-primary-600">
                                        {{ __('messages.t_continue_shopping') }}
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>

                    {{-- invoice logo heading --}}
                    <div class="flex justify-between px-4 sm:px-7 py-5">
                        <div class="flex gap-4 text-sm">
                            <div class="h-20 w-20 bg-slate-700 rounded-md grid place-items-center">
                                <h1 class="text-white text-5xl">
                                    {{ mb_substr($quotation->owner->first_name, 0, 1) }}
                                </h1>
                            </div>
                            <div class="flex flex-col">
                                <h3 class="capitalize">
                                    {{ $quotation->owner->first_name }} {{ $quotation->owner->last_name }}
                                </h3>
                                <h3 class="capitalize">
                                    {{ $quotation->owner->email }}
                                </h3>
                                <h3 class="capitalize">
                                    {{ $quotation->owner->country_name }} {{ $quotation->owner->address }}
                                </h3>
                            </div>
                        </div>

                        <div class="flex flex-col">
                            <div class="flex flex-col">
                                <span class="text-sm font-normal">Invoice NO:</span>
                                <span class="text-sm font-bold">{{ $quotation->reference }}</span>
                            </div>
                            <div class="flex flex-col">
                                <span class="text-sm font-normal">Issue Date:</span>
                                <span class="text-sm font-bold">
                                    {{ now()->parse($quotation->updated_at)->format('d/m/Y') }}
                                </span>
                            </div>
                        </div>
                    </div>


                    <div class="flex justify-between mb-1 px-4 md:px-7">
                        <dt class="text-sm font-medium text-gray-500">Customer Info</dt>
                    </div>
                    <div class="bg-gray-100 border-y border-gray-200 py-7 px-4 md:px-7 mb-3">
                        <div class="grid grid-cols-1 gap-y-5 sm:gap-y-8 sm:grid-cols-3 md:grid-cols-4">
                            <div class="sm:col-span-1">
                                <dt class="text-sm font-medium text-gray-500">Name</dt>
                                <dd class="mt-1 text-xs text-gray-500 capitalize">
                                    {{ $quotation->first_name }} {{ $quotation->last_name }}
                                </dd>
                            </div>

                            <div class="sm:col-span-1">
                                <dt class="text-sm font-medium text-gray-500">Email</dt>
                                <dd class="mt-1 text-xs text-gray-500">{{ $quotation?->email }}</dd>
                            </div>

                            <div class="sm:col-span-1">
                                <dt class="text-sm font-medium text-gray-500">Phone</dt>
                                <dd class="mt-1 text-xs text-gray-500 capitalize">{{ $quotation->phone_number }}</dd>
                            </div>

                            <div class="sm:col-span-1">
                                <dt class="text-sm font-medium text-gray-500">Expires At</dt>
                                <dd class="mt-1 text-xs text-gray-500">
                                    {{ now()->parse($quotation->expirese_at)->format('d/m/Y') }}
                                </dd>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col px-4 md:px-7">
                        <dt class="text-sm font-medium text-gray-500">Details</dt>
                        <dd class="mt-1 text-xs text-gray-500 capitalize">
                            {{ $quotation->notes ?? 'N/A' }}
                        </dd>
                    </div>

                    {{-- Section content --}}
                    <div class="pb-7 pt-3">
                        <div class="overflow-x-auto">
                            <table class="w-full mt-4" width="100%">
                                <thead>
                                    <tr
                                        class="border-t border-b dark:border-gray-500 [&>th]:px-6 [&>th]:py-3 [&>th]:text-left">
                                        <th class="font-semibold text-sm dark:text-gray-300">Description</th>
                                        <th class="font-semibold text-sm dark:text-gray-300">Quantity</th>
                                        <th class="font-semibold text-sm dark:text-gray-300">Price</th>
                                        <th class="font-semibold text-sm dark:text-gray-300">Discount</th>
                                        <th class="font-semibold text-sm dark:text-gray-300">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($quotation->items as $item)
                                        <tr class="[&>td]:px-6 [&>td]:py-3">
                                            <td class="font-normal text-sm dark:text-gray-300">{{ $item->description }}
                                            </td>
                                            <td class="font-normal text-sm dark:text-gray-300">{{ $item->quantity }}
                                            </td>
                                            <td class="font-normal text-sm dark:text-gray-300">
                                                @money($item->price, settings('currency')->code, true)
                                            </td>
                                            <td class="font-normal text-sm dark:text-gray-300">
                                                @money($item->discount, settings('currency')->code, true)
                                            </td>
                                            <td class="font-normal text-sm dark:text-gray-300">
                                                @money($item->total_price, settings('currency')->code, true)
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        {{-- Quotation payment total and grand total --}}
                        <table width="100%">
                            <tr class="border-t dark:border-gray-600">
                                <th colspan="4" class="px-6 pt-4 pb-0.5 text-right">Total</th>
                                <th class="px-6 pt-4 pb-0.5 w-32 font-medium text-right">@money($quotation->total, settings('currency')->code, true)</th>
                            </tr>

                            <tr class="border-t dark:border-gray-600">
                                <th colspan="4" class="px-6 pt-4 pb-0.5 text-right">Tax</th>
                                <th class="px-6 pt-4 pb-0.5 w-32 font-medium text-right">@money($quotation->total_tax, settings('currency')->code, true)</th>
                            </tr>

                            <tr class="text-lg">
                                <th colspan="4" class="px-6 py-0.5 text-right">Grand Total</th>
                                <th class="px-6 py-0.5 w-32 font-medium text-right">
                                    @money($quotation->total + $quotation->total_tax, settings('currency')->code, true)
                                </th>
                            </tr>
                        </table>
                    </div>

                    {{-- proceed to payment button --}}
                    <div
                        class="flex items-center justify-end px-4 py-3 text-right shadow bg-gray-50 dark:bg-black/50 sm:px-5 sm:rounded-bl-md sm:rounded-br-md border-t border-t-gray-">
                        <button type="submit" wire:loading.attr="disabled" wire:click="$set('goToPay', 'true')"
                            class="btn-purple">Proceed</button>
                    </div>
                </div>
            @endif

            {{-- checkout payment selection --}}
            @if ($goToPay && !$payHasError)
                <div
                    class="max-w-2xl py-12 mx-auto bg-white dark:bg-zinc-800 shadow-sm rounded-md border dark:border-zinc-700 text-center mb-12">
                    {{-- payment secure icon logo --}}
                    @include('livewire.main.quotes.partials.successLogo')

                    @if ($inSelection)
                        <div class="max-w-sm mx-auto mt-7 grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-4 px-4">
                            {{-- Paystack --}}
                            @if (settings('paystack')->is_enabled)
                                <div wire:click="$set('paymentMethod', 'paystack')"
                                    class="py-2.5 px-1 bg-white dark:bg-zinc-700 rounded-lg ring-1 cursor-pointer grid items-center justify-center text-center transition-all duration-200 {{ $paymentMethod === 'paystack' ? 'ring-primary-600 border border-primary-600' : 'ring-transparent hover:ring-primary-600 border border-gray-200 dark:border-zinc-600 shadow-sm' }}">

                                    {{-- paystack Logo --}}
                                    @if (settings('paystack')->logo_id)
                                        <img src="{{ placeholder_img() }}"
                                            data-src="{{ src(settings('paystack')->logo_id) }}"
                                            class="lazy max-h-[35px] max-w-[75%] mb-2 mx-auto p-1 mt-2">
                                    @endif

                                    {{-- Name --}}
                                    <span
                                        class="text-[13px] text-gray-500 dark:text-gray-100 font-bold mb-2">{{ settings('paystack')->name }}</span>
                                </div>
                            @endif
                        </div>
                    @else
                        <div class="max-w-md mx-auto">
                            <div class="bg-gray-50 dark:bg-zinc-700 rounded-lg px-4 my-5 py-6 sm:p-6">
                                <div class="flow-root w-full">
                                    <dl class="-my-4 text-sm divide-y divide-gray-200 dark:divide-zinc-600">

                                        <div class="py-4 flex items-center justify-between">
                                            <dt class="text-gray-600 dark:text-gray-300">Payment method</dt>
                                            <dd class="font-medium text-gray-900 dark:text-gray-200">
                                                <div
                                                    class="flex items-center text-sm text-gray-500 dark:text-gray-300">
                                                    @if (settings($paymentMethod)->logo)
                                                        <img src="{{ placeholder_img() }}"
                                                            data-src="{{ src(settings($paymentMethod)->logo_id) }}"
                                                            class="lazy max-w-[50px]">
                                                    @endif
                                                    <span
                                                        class="ltr:pl-3 rtl:pr-3 font-bold">{{ settings($paymentMethod)->name }}</span>
                                                </div>
                                            </dd>
                                        </div>

                                        <div class="py-4 flex items-center justify-between">
                                            <dt class="text-gray-600 dark:text-gray-300">
                                                Total </dt>
                                            <dd class="font-medium text-gray-500 dark:text-gray-300">
                                                @money($toPay, settings('currency')->code, true)
                                            </dd>
                                        </div>
                                    </dl>
                                </div>
                            </div>
                        </div>


                        @if ($paymentMethod === 'paystack' && settings('paystack')->is_enabled)
                            <div class="max-w-md mx-auto px-3">
                                <button @click="window.makePaystackPayment" id="paystack-payment-button"
                                    class="w-full text-sm font-medium flex justify-center py-5 px-8 rounded tracking-wide focus:outline-none focus:shadow-outline bg-primary-600 hover:bg-primary-700 text-white cursor-pointer disabled:bg-gray-200 disabled:text-gray-600 disabled:cursor-not-allowed"
                                    wire:loading.attr="disabled" wire:target="checkout">
                                    {{ __('messages.t_pay') }}
                                </button>
                            </div>
                        @endif
                    @endif
                </div>
            @endif

            @if ($goToPay && $payHasError)
                <div
                    class="max-w-2xl py-12 mx-auto bg-white dark:bg-zinc-800 shadow-sm rounded-md border dark:border-zinc-700 text-center mb-12">
                    {{-- payment secure icon logo --}}
                    @include('livewire.main.quotes.partials.errorLogo')
                </div>
            @endif
        @else
            {{-- Quotation has no items --}}
            <div class="flex-grow flex flex-col justify-center max-w-7xl w-full mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex-shrink-0 flex justify-center">
                    <div class="inline-flex h-32 w-32 rounded-full bg-gray-100 p-6 items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-gray-400" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </div>
                </div>
                <div class="py-12">
                    <div class="text-center">
                        <h1 class="mt-2 text-2xl md:text-4xl font-extrabold text-gray-900 tracking-tight sm:text-4xl">
                            Quotation not Found
                        </h1>
                        <p class="mt-2 text-base text-gray-500">Sorry we couldnt find quotation or it has expired</p>
                        <div class="mt-6">
                            <a href="{{ url('/') }}"
                                class="text-base font-medium text-primary-600 hover:text-primary-600">
                                Check more Services<span aria-hidden="true"> →</span></a>
                        </div>
                    </div>
                </div>
            </div>
        @endif

        {{-- payment gateways script hook and initializations --}}
        @if ($paymentMethod === 'paystack' && settings('paystack')->is_enabled)
            {{-- Paystack Js --}}
            <script>
                window.makePaystackPayment = function() {
                    let handler = PaystackPop.setup({
                        key: "{{ config('paystack.publicKey') }}",
                        email: "{{ $quotation?->email }}",
                        amount: Number({{ $toPay }}) * 100,
                        currency: "{{ settings('paystack')->currency }}",
                        ref: '{{ uid(32) }}',
                        onClose: function() {

                        },
                        callback: function(response) {
                            @this.checkout(response.reference);
                        }
                    });

                    handler.openIframe();
                }
            </script>
        @endif
    </div>
</div>

@push('styles')
    {{-- Paystack.js --}}
    @if (settings('paystack')->is_enabled)
        <script src="https://js.paystack.co/v1/inline.js"></script>
    @endif
@endpush

@push('scripts')
    {{-- AlpineJs --}}
    <script>
        function MainquotesPaymentPage() {
            return {

                open: false,

                // Init component
                initialize() {

                }

            }
        }
        window.MainquotesPaymentPage = MainquotesPaymentPage();
    </script>
@endpush
