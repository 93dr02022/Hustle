<main class="w-full" x-data>
    <div class="sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-zinc-800 rounded-lg shadow overflow-hidden">
            <div
                class="divide-y divide-gray-200 dark:divide-zinc-700 lg:grid lg:grid-cols-12 lg:divide-y-0 lg:divide-x rtl:divide-x-reverse">

                {{-- Sidebar --}}
                <aside class="lg:col-span-3 py-6 hidden lg:block" wire:ignore>
                    <x-main.account.sidebar />
                </aside>

                {{-- Section content --}}
                <div class="divide-y divide-gray-200 dark:divide-zinc-700 lg:col-span-9">

                    {{-- Form --}}
                    <div class="py-6 px-4 sm:p-6 lg:pb-8 h-[calc(100%-80px)]">

                        {{-- Section header --}}
                        <div class="mb-10">
                            <h2 class="text-base leading-6 font-bold text-gray-900 dark:text-gray-100">
                                {{ __('Quotation Details') }}</h2>
                        </div>

                        {{-- Session flash message --}}
                        @if (session()->has('message'))
                            <div class="bg-yellow-100 ltr:border-l-4 rtl:border-r-4 border-yellow-400 p-4 mb-6">
                                <div class="flex">
                                    <div class="flex-shrink-0">
                                        <svg class="h-5 w-5 text-yellow-400" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <div class="ltr:ml-3 rtl:mr-3">
                                        <p class="text-sm text-yellow-700 font-medium">
                                            {{ session()->get('message') }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endif

                        {{-- Section content --}}
                        <div class="w-full mb-6">
                            <div
                                class="mb-6 bg-white dark:bg-zinc-800 shadow-sm rounded-md border dark:border-zinc-700">
                                {{-- Section title --}}
                                <div class="bg-gray-50 dark:bg-zinc-700 px-7 py-4 rounded-t-md">
                                    <div class="-ml-4 -mt-4 flex justify-between items-center flex-wrap sm:flex-nowrap">
                                        <div class="ltr:ml-4 rtl:mr-4 mt-4">
                                            <h3
                                                class="text-sm leading-6 font-bold tracking-wide text-gray-800 dark:text-gray-100">
                                                {{ __('Quotation') }}</h3>
                                            <p class="text-xs font-normal text-gray-400 dark:text-gray-300">
                                                {{ __('Quotation information with order items') }}</p>
                                        </div>
                                    </div>
                                </div>

                                {{-- invoice logo heading --}}
                                <div class="flex justify-between flex-col sm:flex-row px-4 gap-y-5 sm:px-7 py-5">
                                    <div class="flex items-center gap-4 text-sm">
                                        <div
                                            class="h-20 w-20 bg-slate-700 rounded-md grid place-items-center overflow-hidden">
                                            @if ($quotation->settings->logo)
                                                <img src="{{ placeholder_img() }}"
                                                    data-src="{{ src($quotation->settings->logo) }}"
                                                    class="lazy w-ful h-full object-cover" alt="">
                                            @else
                                                <h1 class="text-white text-5xl">
                                                    {{ mb_substr($quotation->owner->first_name, 0, 1) }}
                                                </h1>
                                            @endif
                                        </div>
                                        <div class="flex flex-col">
                                            <h3
                                                class="capitalize text-base font-semibold text-gray-600 dark:text-gray-400">
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
                                            <dd class="mt-1 text-xs text-gray-500 capitalize">
                                                {{ $quotation->phone_number }}</dd>
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
                                    <dd class="mt-1 text-xs text-gray-500 capitalize">
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
                                                    <th class="font-semibold text-sm dark:text-gray-300">Description
                                                    </th>
                                                    <th class="font-semibold text-sm dark:text-gray-300">Quantity</th>
                                                    <th class="font-semibold text-sm dark:text-gray-300">Price</th>
                                                    <th class="font-semibold text-sm dark:text-gray-300">Discount</th>
                                                    <th class="font-semibold text-sm dark:text-gray-300">Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($quotation->items as $item)
                                                    <tr class="[&>td]:px-6 [&>td]:py-3">
                                                        <td class="font-normal text-sm dark:text-gray-300">
                                                            {{ $item->description }}
                                                        </td>
                                                        <td class="font-normal text-sm dark:text-gray-300">
                                                            {{ $item->quantity }}
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
                                            <th class="px-6 pt-4 pb-0.5 w-32 font-medium text-right">@money($quotation->total, settings('currency')->code, true)
                                            </th>
                                        </tr>

                                        <tr class="border-t dark:border-gray-600">
                                            <th colspan="4" class="px-6 pt-4 pb-0.5 text-right">Tax</th>
                                            <th class="px-6 pt-4 pb-0.5 w-32 font-medium text-right">@money($quotation->total_tax, settings('currency')->code, true)
                                            </th>
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
                                            <tr class="[&>td]:px-6 [&>td]:py-3">
                                                <td class="font-normal text-sm dark:text-gray-300">
                                                    {{ now()->parse($quotation->invoice->updated_at)->format('d/m/Y') }}
                                                </td>
                                                <td class="font-normal text-sm dark:text-gray-300">
                                                    {{ $quotation->invoice->payment_method }}
                                                </td>
                                                <td class="font-normal text-sm dark:text-gray-300">
                                                    {{ $quotation->invoice->payment_id }}
                                                </td>
                                                <td class="font-normal text-sm dark:text-gray-300">
                                                    @money($quotation->invoice->amount_paid, settings('currency')->code, true)
                                                </td>
                                                <td class="font-normal text-sm dark:text-gray-300">
                                                    {{ $quotation->invoice->status }}
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</main>
