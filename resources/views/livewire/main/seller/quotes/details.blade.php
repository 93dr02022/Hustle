<div class="w-full" x-data="window.SellerDashboardQuoteInfo">

    {{-- Loading --}}
    {{-- <x-forms.loading /> --}}

    {{-- Heading --}}
    <div class="px-4 mx-auto mb-16 max-w-7xl sm:px-6 md:px-12">
        <div class="mx-auto max-w-7xl">
            <div class="lg:flex lg:items-center lg:justify-between">

                <div class="flex-1 min-w-0">

                    {{-- Section heading --}}
                    <h2
                        class="text-lg font-bold leading-7 text-zinc-700 dark:text-gray-50 sm:truncate sm:text-xl sm:tracking-tight">
                        @lang('messages.t_quotes')
                    </h2>

                    {{-- Breadcrumbs --}}
                    <div class="flex flex-col mt-3 sm:flex-row sm:flex-wrap sm:space-x-6 rtl:space-x-reverse">
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

                            {{-- Quotes --}}
                            <li aria-current="page">
                                <div class="flex items-center">
                                    <svg aria-hidden="true" class="w-4 h-4 text-gray-400 rtl:rotate-180"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <a href="{{ url('seller/quotes') }}"
                                        class="text-sm font-medium text-gray-700 ltr:ml-1 rtl:mr-1 hover:text-primary-600 md:ltr:ml-2 md:rtl:mr-2 dark:text-zinc-300 dark:hover:text-white">
                                        Quotes
                                    </a>
                                </div>
                            </li>

                            {{-- Create Quote --}}
                            <li aria-current="page">
                                <div class="flex items-center">
                                    <svg aria-hidden="true" class="w-4 h-4 text-gray-400 rtl:rotate-180"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="mx-1 text-sm font-medium text-gray-400 md:mx-2 dark:text-zinc-400">
                                        {{ __('Quote view') }}
                                    </span>
                                </div>
                            </li>

                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Content --}}
    <div class="px-4 mx-auto space-y-2 max-w-7xl sm:px-6 md:px-12">
        <div class="max-w-[800px] mx-auto">
            <div class="w-full mb-6">
                <div
                    class="mb-6 bg-white dark:bg-zinc-800 shadow-sm rounded-md border border-slate-200 dark:border-zinc-700">
                    {{-- Section title --}}
                    <div class="bg-gray-50 dark:bg-zinc-700 px-7 py-4 rounded-t-md">
                        <div class="-ml-4 -mt-4 flex justify-between items-center flex-wrap sm:flex-nowrap">
                            <div class="ltr:ml-4 rtl:mr-4 mt-4">
                                <h3 class="text-sm leading-6 font-bold tracking-wide text-gray-800 dark:text-gray-100">
                                    {{ __('Quotation') }}</h3>
                                <p class="text-xs font-normal text-gray-400 dark:text-gray-300">
                                    {{ __('Quotation information with order items') }}</p>
                            </div>
                        </div>
                    </div>

                    {{-- invoice logo heading --}}
                    <div class="flex justify-between flex-col sm:flex-row px-4 gap-y-5 sm:px-7 py-5">
                        <div class="flex items-center gap-4 text-sm">
                            <div class="h-20 w-20 bg-slate-700 rounded-md grid place-items-center overflow-hidden">
                                @if ($quotation->settings->logo)
                                    <img src="{{ placeholder_img() }}" data-src="{{ src($quotation->settings->logo) }}" class="lazy w-ful h-full object-cover" alt="">
                                @else
                                    <h1 class="text-white text-5xl">
                                        {{ mb_substr($quotation->owner->first_name, 0, 1) }}
                                    </h1>
                                @endif
                            </div>
                            <div class="flex flex-col">
                                <h3 class="capitalize text-base font-semibold text-gray-600 dark:text-gray-400">
                                    {{ $quotation->settings->business_name }}
                                </h3>
                                <h3 class="break-words">
                                    {{ $quotation->settings->email }}
                                </h3>
                                <h3 class="capitalize">
                                    {{ $quotation->settings->contact }}
                                </h3>
                            </div>
                        </div>

                        <div class="flex flex-row sm:flex-col gap-x-3">
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

                    {{-- quotation note details --}}
                    <div class="flex flex-col px-4 md:px-7">
                        <dt class="text-sm font-medium text-gray-500">Details</dt>
                        <dd class="mt-1 text-xs text-gray-500 capitalize line-clamp-2">
                            {{ $quotation->note ?? 'N/A' }}
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

                    {{-- Quotation payment --}}
                    <div
                        class="flex items-center px-4 py-3 bg-gray-50 dark:bg-black/50 sm:px-5 border-t border-t-gray-">
                        Transaction
                    </div>

                    <div class="overflow-x-auto">
                        <table class="w-full" width="100%">
                            <thead>
                                <tr
                                    class="border-t border-b dark:border-gray-500 [&>th]:px-6 [&>th]:py-3 [&>th]:text-left">
                                    <th class="font-semibold text-sm dark:text-gray-300">Date</th>
                                    <th class="font-semibold text-sm dark:text-gray-300">Gateway</th>
                                    <th class="font-semibold text-sm dark:text-gray-300">TransactionID</th>
                                    <th class="font-semibold text-sm dark:text-gray-300">Amount</th>
                                    <th class="font-semibold text-sm dark:text-gray-300">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($quotation->invoices as $invoice)
                                    <tr class="[&>td]:px-6 [&>td]:py-3">
                                        <td class="font-normal text-sm dark:text-gray-300">
                                            {{ now()->parse($invoice->updated_at)->format('d/m/Y') }}
                                        </td>
                                        <td class="font-normal text-sm dark:text-gray-300">
                                            {{ $invoice->payment_method }}
                                        </td>
                                        <td class="font-normal text-sm dark:text-gray-300">
                                            {{ $invoice->payment_id }}
                                        </td>
                                        <td class="font-normal text-sm dark:text-gray-300">
                                            @money($invoice->amount_paid, settings('currency')->code, true)
                                        </td>
                                        <td class="font-normal text-sm dark:text-gray-300">
                                            {{ $invoice->status }}
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5"
                                            class="py-3 font-light text-sm text-gray-400 dark:text-zinc-200 text-center tracking-wide shadow-sm bg-white dark:bg-zinc-800 rounded-md">
                                            @lang('messages.no_results_found')
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('styles')
    <style>
        .stat-shadow {
            box-shadow: 0 0.375rem 0.75rem rgba(140, 152, 164, .075);
        }

        .x-shadow {
            box-shadow: 0 12px 40px 8px rgba(140, 152, 164, 0.19) !important;
        }
    </style>
@endpush

@push('scripts')
    <script>
        function SellerDashboardQuoteInfo() {
            return {
                successful: false,
                quote: {},
                total: 0,
                copying: false,
                tax: @json($commission),

                toastMessage(message, type = "error") {
                    window.$wireui.notify({
                        title: type == 'success' ? 'Success' : 'Error occured',
                        description: message,
                        icon: type == 'success' ? 'success' : 'error'
                    });
                },

                copy(text) {
                    navigator.clipboard.writeText(text)
                        .then(() => {
                            this.copying = true;
                            setTimeout(() => this.copying = false, 2000);
                        })
                        .catch((err) => {
                            this.copying = false;
                        });
                }
            }
        }
        window.SellerDashboardQuoteInfo = SellerDashboardQuoteInfo()
    </script>
@endpush
