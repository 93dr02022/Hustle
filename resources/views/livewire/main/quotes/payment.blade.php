<div class="relative w-full mx-auto" x-data="window.MainquotesPaymentPage" x-init="initialize()">
    <div class="max-w-4xl mx-auto">
        {{-- Quotation items --}}
        @if ($quotation)

            {{-- quotation items table list --}}
            @if (!$goToPay)
                <div class="mb-6 bg-white dark:bg-zinc-800 shadow-sm rounded-md border dark:border-zinc-700">
                    {{-- Section title --}}
                    <div class="bg-gray-50 dark:bg-zinc-700 px-7 py-4 rounded-t-md">
                        <div class="-ml-4 -mt-4 flex justify-between items-center flex-wrap sm:flex-nowrap">
                            <div class="ltr:ml-4 rtl:mr-4 mt-4">
                                <h3 class="text-sm leading-6 font-bold tracking-wide text-gray-800 dark:text-gray-100">{{ __('Quotation') }}</h3>
                                <p class="text-xs font-normal text-gray-400 dark:text-gray-300">{{ __('Quotation information with order items') }}</p>
                            </div>
                            <div class="ltr:ml-4 rtl:mr-4 mt-4 flex-shrink-0">
                                <a href="{{ url('/') }}" class="inline-flex items-center py-2 px-3 border border-transparent rounded-full bg-transparent hover:bg-transparent focus:outline-none focus:ring-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-primary-600 hover:text-primary-600 ltr:mr-2 rtl:ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                        stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M11 17l-5-5m0 0l5-5m-5 5h12" />
                                    </svg>
                                    <span class="text-xs font-medium text-primary-600 hover:text-primary-600">
                                        {{ __('messages.t_continue_shopping') }}
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>

                    {{-- Section content --}}
                    <div class="py-7">
                        <div class="overflow-x-auto">
                            <table class="w-full mt-4" width="100%">
                                <thead>
                                    <tr class="border-t border-b dark:border-gray-500 [&>th]:px-6 [&>th]:py-3 [&>th]:text-left">
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
                                        <td class="font-medium text-sm dark:text-gray-300">{{ $item->description }}</td>
                                        <td class="font-medium text-sm dark:text-gray-300">{{ $item->quantity }}</td>
                                        <td class="font-medium text-sm dark:text-gray-300">{{ $item->taxed_price }}</td>
                                        <td class="font-medium text-sm dark:text-gray-300">{{ $item->discount }}</td>
                                        <td class="font-medium text-sm dark:text-gray-300">{{ $item->total_price }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr class="border-t dark:border-gray-600">
                                        <th colspan="4" class="px-6 pt-4 pb-0.5 text-right">Total</th>
                                        <th class="px-6 pt-4 pb-0.5 w-32 text-right">{{ $quotation->total }}</th>
                                    </tr>

                                    <tr class="text-lg">
                                        <th colspan="4" class="px-6 py-0.5 text-right">Grand Total</th>
                                        <th class="px-6 py-0.5 w-32 text-right">{{ $quotation->total }}</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>

                    {{-- proceed to payment button --}}
                    <div class="flex items-center justify-end px-4 py-3 text-right shadow bg-gray-50 dark:bg-black/50 sm:px-5 sm:rounded-bl-md sm:rounded-br-md border-t border-t-gray-">
                        <button type="submit" wire:loading.attr="disabled" wire:click="$set('goToPay', 'true')" class="btn-purple">Proceed</button>
                    </div>
                </div>
            @endif

            {{-- checkout payment selection --}}
            @if ($goToPay)
                <div class="max-w-2xl py-12 mx-auto bg-white dark:bg-zinc-800 shadow-sm rounded-md border dark:border-zinc-700 text-center mb-12">
                    {{-- Icon --}}
                    <div class="h-28 w-28 border-2 border-gray-100 dark:border-zinc-600 bg-gray-50 dark:bg-zinc-700 rounded-full flex items-center justify-center mx-auto">
                        <svg class="mx-auto h-9 w-9 text-gray-400 dark:text-gray-300" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <g>
                                <path fill="none" d="M0 0h24v24H0z"></path>
                                <path d="M6.5 2h11a1 1 0 0 1 .8.4L21 6v15a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V6l2.7-3.6a1 1 0 0 1 .8-.4zm12 4L17 4H7L5.5 6h13zM9 10H7v2a5 5 0 0 0 10 0v-2h-2v2a3 3 0 0 1-6 0v-2z">
                                </path>
                            </g>
                        </svg>
                    </div>

                    {{-- Texts --}}
                    <h2 class="mt-4 text-base font-bold text-gray-700 dark:text-gray-100">{{ __('messages.t_checkout') }}</h2>
                    <div class="flex items-center justify-center text-green-400 hover:text-green-500 mt-1">
                        <svg class="h-5 w-5 ltr:mr-1 rtl:ml-1" stroke="currentColor" fill="currentColor" stroke-width="0" version="1.2" baseProfile="tiny" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M17 10h-1v-2c0-2.205-1.794-4-4-4s-4 1.795-4 4v2h-1c-1.103 0-2 .896-2 2v7c0 1.104.897 2 2 2h10c1.103 0 2-.896 2-2v-7c0-1.104-.897-2-2-2zm-5 8.299c-.719 0-1.3-.58-1.3-1.299s.581-1.301 1.3-1.301 1.3.582 1.3 1.301-.581 1.299-1.3 1.299zm2-7.299h-4v-3c0-1.104.897-2 2-2s2 .896 2 2v3z">
                            </path>
                        </svg>
                        <p class="text-sm">{{ __('messages.t_ur_transaction_is_secure') }}</p>
                    </div>

                    @if ($inSelection)
                        <div class="max-w-sm mx-auto mt-7 grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-4 px-4">
                            {{-- Paystack --}}
                            @if (settings('paystack')->is_enabled)
                                <div wire:click="$set('paymentMethod', 'paystack')"
                                    class="py-2.5 px-1 bg-white dark:bg-zinc-700 rounded-lg ring-1 cursor-pointer grid items-center justify-center text-center transition-all duration-200 {{ $paymentMethod === 'paystack' ? 'ring-primary-600 border border-primary-600' : 'ring-transparent hover:ring-primary-600 border border-gray-200 dark:border-zinc-600 shadow-sm' }}">

                                    {{-- paystack Logo --}}
                                    @if (settings('paystack')->logo)
                                    <img src="{{ placeholder_img() }}" data-src="{{ src(settings('paystack')->logo) }}" class="lazy max-h-[35px] max-w-[75%] mb-2 mx-auto p-1 mt-2">
                                    @endif

                                    {{-- Name --}}
                                    <span class="text-[13px] text-gray-500 dark:text-gray-100 font-bold mb-2">{{ settings('paystack')->name }}</span>
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
                                                <div class="flex items-center text-sm text-gray-500 dark:text-gray-300">
                                                    @if (settings($paymentMethod)->logo)
                                                        <img src="{{ placeholder_img() }}" data-src="{{ src(settings($paymentMethod)->logo) }}" class="lazy max-w-[50px]">
                                                    @endif
                                                    <span class="ltr:pl-3 rtl:pr-3 font-bold">{{ settings($paymentMethod)->name }}</span>
                                                </div>
                                            </dd>
                                        </div>
                                
                                        <div class="py-4 flex items-center justify-between">
                                            <dt class="text-gray-600 dark:text-gray-300">
                                                Total </dt>
                                            <dd class="font-medium text-gray-500 dark:text-gray-300">
                                                @money($quotation->total, 'NGN', true)
                                            </dd>
                                        </div>
                                    </dl>
                                </div>
                            </div>
                        </div>
                        

                        @if ($paymentMethod === 'paystack' && settings('paystack')->is_enabled)
                            <div class="max-w-md mx-auto px-3">
                                <button
                                    @click="window.makePaystackPayment"
                                    id="paystack-payment-button"
                                    class="w-full text-sm font-medium flex justify-center py-5 px-8 rounded tracking-wide focus:outline-none focus:shadow-outline bg-primary-600 hover:bg-primary-700 text-white cursor-pointer disabled:bg-gray-200 disabled:text-gray-600 disabled:cursor-not-allowed"
                                    >
                                        {{ __('messages.t_pay')    }}
                                </button>
                            </div>
                        @endif
                    @endif
                </div>
            @endif

        @else
            {{-- Quotation has no items --}}
            <div class="flex-grow flex flex-col justify-center max-w-7xl w-full mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex-shrink-0 flex justify-center">
                    <div class="inline-flex h-32 w-32 rounded-full bg-gray-100 p-6 items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </div>
                </div>
                <div class="py-12">
                    <div class="text-center">
                        <h1 class="mt-2 text-2xl md:text-4xl font-extrabold text-gray-900 tracking-tight sm:text-4xl">{{ __('messages.t_ur_cart_is_empty') }}</h1>
                        <p class="mt-2 text-base text-gray-500">{{ __('messages.t_ur_cart_is_empty_subtitle') }}</p>
                        <div class="mt-6">
                            <a href="{{ url('/') }}" class="text-base font-medium text-primary-600 hover:text-primary-600">{{ __('messages.t_continue_shopping') }}<span aria-hidden="true"> →</span></a>
                        </div>
                    </div>
                </div>
            </div>
        @endif

        {{-- payment gateways script hook and initializations --}}
        @if ($paymentMethod === 'paystack' && settings('paystack')->is_enabled)
            {{-- Paystack Js --}}
            <script>
                window.makePaystackPayment = function(){
                    let handler = PaystackPop.setup({
                        key     : "{{ config('paystack.publicKey') }}",
                        email   : "{{ $quotation->email }}",
                        amount  : Number({{ $quotation->total }}) * 100,
                        currency: "{{ settings('paystack')->currency }}",
                        ref     : '{{ uid(32) }}',
                        onClose : function(){
                            
                        },
                        callback: function(response){
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