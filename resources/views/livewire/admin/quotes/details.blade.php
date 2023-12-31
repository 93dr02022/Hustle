<div class="w-full">

    {{-- quotations Details --}}
    <div class="mx-auto space-y-2 max-w-7xl">
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
            <div class="bg-gray-100 border-y border-gray-200 py-7 px-3 mb-3">
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
                        <dt class="text-sm font-medium text-gray-500">Pay. Method</dt>
                        <dd class="mt-1 text-xs text-gray-500">{{ $quotation->payment_method }}</dd>
                    </div>
                </div>
            </div>

            {{-- quotation note details --}}
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
                                    <td class="font-normal text-sm dark:text-gray-300">{{ $item->description }}</td>
                                    <td class="font-normal text-sm dark:text-gray-300">{{ $item->quantity }}</td>
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
        </div>
    </div>
</div>
