<div class="w-full" x-data="window.SellerDashboardQuotesPage">

    {{-- Loading --}}
    <x-forms.loading zindex="1000" />

    {{-- Heading --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-12 mb-10 -mt-4">
        <div class="mx-auto max-w-7xl">
            <div class="lg:flex lg:items-center lg:justify-between">

                <div class="min-w-0 flex-1">
                    {{-- Section heading --}}
                    <h2
                        class="text-lg font-bold leading-7 text-zinc-700 dark:text-gray-50 sm:truncate sm:text-xl sm:tracking-tight">
                        @lang('messages.t_quotes')
                    </h2>

                    {{-- Breadcrumbs --}}
                    <div class="mt-3 flex flex-col sm:flex-row sm:flex-wrap sm:space-x-6 rtl:space-x-reverse">
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

                            {{-- My dashboard --}}
                            <li aria-current="page">
                                <div class="flex items-center">
                                    <svg aria-hidden="true" class="w-4 h-4 text-gray-400 rtl:rotate-180"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <a href="{{ url('seller/home') }}"
                                        class="ltr:ml-1 rtl:mr-1 text-sm font-medium text-gray-700 hover:text-primary-600 md:ltr:ml-2 md:rtl:mr-2 dark:text-zinc-300 dark:hover:text-white">
                                        @lang('messages.t_my_dashboard')
                                    </a>
                                </div>
                            </li>

                            {{-- quotes --}}
                            <li aria-current="page">
                                <div class="flex items-center">
                                    <svg aria-hidden="true" class="w-4 h-4 text-gray-400 rtl:rotate-180"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="mx-1 text-sm font-medium text-gray-400 md:mx-2 dark:text-zinc-400">
                                        @lang('messages.t_quotes')
                                    </span>
                                </div>
                            </li>

                        </ol>
                    </div>

                </div>

                {{-- Actions --}}
                <div class="mt-5 flex items-center gap-x-3 lg:mt-0">
                    {{-- Create Quotes --}}
                    <span class="sm:ltr:ml-3 sm:rtl:mr-3">
                        <a href="{{ url('seller/quotes/create') }}"
                            class="inline-flex items-center rounded border border-transparent bg-primary-600 px-3 py-2.5 text-[13px] font-semibold text-white shadow-sm hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2">
                            @lang('messages.t_create_quote')
                        </a>
                    </span>

                    {{-- Quotation settings --}}
                    <span class="block">
                        <a href="{{ url('/seller/quotes/settings') }}"
                            class="inline-flex items-center rounded border border-gray-300 bg-white px-4 py-2.5 text-[13px] font-semibold text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-primary-600 focus:ring-offset-2 dark:bg-zinc-800 dark:border-zinc-800 dark:text-zinc-100 dark:hover:bg-zinc-900 dark:focus:ring-offset-zinc-900 dark:focus:ring-zinc-900 whitespace-nowrap">
                            Settings
                        </a>
                    </span>
                </div>

            </div>
        </div>
    </div>

    {{-- quotes metrics summary --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-12 mb-5" wire:ignore>
        <div class="swiper metric-swipe w-full">
            <div class="swiper-wrapper flex flex-row items-center gap-x-4">
                <div
                    class="swiper-slide min-w-[220px] !flex-auto stat-shadow flex flex-col justify-between px-3 py-4 bg-white border rounded-lg shadow-sm border-[#E7EAF3B3] dark:border-zinc-700 dark:bg-zinc-800">
                    <div class="flex justify-between space-x-1 rtl:space-x-reverse">
                        <p class="text-lg font-bold text-zinc-700 dark:text-zinc-100">
                            @money($metrics?->paid_invoices ?? 0, settings('currency')->code, true)
                        </p>
                        <div class="flex items-center justify-center rounded-full w-9 h-9 bg-zinc-100 dark:bg-zinc-700">
                            <svg class="w-5 h-5 shrink-0 text-zinc-600 dark:text-zinc-300" stroke="currentColor"
                                fill="currentColor" stroke-width="0"
                                viewBox="0 0 24 24"xmlns="http://www.w3.org/2000/svg">
                                <g>
                                    <path fill="none" d="M0 0h24v24H0z"></path>
                                    <path
                                        d="M10 20H6v2H4v-2H3a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h7V1.59a.5.5 0 0 1 .582-.493l10.582 1.764a1 1 0 0 1 .836.986V6h1v2h-1v7h1v2h-1v2.153a1 1 0 0 1-.836.986L20 20.333V22h-2v-1.333l-7.418 1.236A.5.5 0 0 1 10 21.41V20zm2-.36l8-1.334V4.694l-8-1.333v16.278zM16.5 14c-.828 0-1.5-1.12-1.5-2.5S15.672 9 16.5 9s1.5 1.12 1.5 2.5-.672 2.5-1.5 2.5z">
                                    </path>
                                </g>
                            </svg>
                        </div>
                    </div>
                    <p class="mt-1 text-[13px] text-gray-500 dark:text-zinc-300 font-medium">Paid Invoice</p>
                </div>

                <div
                    class="swiper-slide min-w-[220px] !flex-auto stat-shadow flex flex-col justify-between px-3 py-4 bg-white border rounded-lg shadow-sm border-[#E7EAF3B3] dark:border-zinc-700 dark:bg-zinc-800">
                    <div class="flex justify-between space-x-1 rtl:space-x-reverse">
                        <p class="text-lg font-bold text-zinc-700 dark:text-zinc-100">
                            @money($metrics?->unpaid_invoices ?? 0, settings('currency')->code, true)
                        </p>
                        <div class="flex items-center justify-center rounded-full w-9 h-9 bg-zinc-100 dark:bg-zinc-700">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="w-5 h-5 shrink-0 text-zinc-600 dark:text-zinc-300" viewBox="0 0 16 16">
                                <path
                                    d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zM11.5 4a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1z" />
                                <path
                                    d="M2.354.646a.5.5 0 0 0-.801.13l-.5 1A.5.5 0 0 0 1 2v13H.5a.5.5 0 0 0 0 1h15a.5.5 0 0 0 0-1H15V2a.5.5 0 0 0-.053-.224l-.5-1a.5.5 0 0 0-.8-.13L13 1.293l-.646-.647a.5.5 0 0 0-.708 0L11 1.293l-.646-.647a.5.5 0 0 0-.708 0L9 1.293 8.354.646a.5.5 0 0 0-.708 0L7 1.293 6.354.646a.5.5 0 0 0-.708 0L5 1.293 4.354.646a.5.5 0 0 0-.708 0L3 1.293 2.354.646zm-.217 1.198.51.51a.5.5 0 0 0 .707 0L4 1.707l.646.647a.5.5 0 0 0 .708 0L6 1.707l.646.647a.5.5 0 0 0 .708 0L8 1.707l.646.647a.5.5 0 0 0 .708 0L10 1.707l.646.647a.5.5 0 0 0 .708 0L12 1.707l.646.647a.5.5 0 0 0 .708 0l.509-.51.137.274V15H2V2.118l.137-.274z" />
                            </svg>
                        </div>
                    </div>
                    <p class="mt-1 text-[13px] text-gray-500 dark:text-zinc-300 font-medium">Unpaid Invoice</p>
                </div>

                <div
                    class="swiper-slide min-w-[220px] !flex-auto stat-shadow flex flex-col justify-between px-3 py-4 bg-white border rounded-lg shadow-sm border-[#E7EAF3B3] dark:border-zinc-700 dark:bg-zinc-800">
                    <div class="flex justify-between space-x-1 rtl:space-x-reverse">
                        <p class="text-lg font-bold text-zinc-700 dark:text-zinc-100">
                            {{ $metrics?->quotations ?? 0 }}
                        </p>
                        <div class="flex items-center justify-center rounded-full w-9 h-9 bg-zinc-100 dark:bg-zinc-700">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="w-5 h-5 shrink-0 text-zinc-600 dark:text-zinc-300" viewBox="0 0 16 16">
                                <path
                                    d="M1.92.506a.5.5 0 0 1 .434.14L3 1.293l.646-.647a.5.5 0 0 1 .708 0L5 1.293l.646-.647a.5.5 0 0 1 .708 0L7 1.293l.646-.647a.5.5 0 0 1 .708 0L9 1.293l.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .801.13l.5 1A.5.5 0 0 1 15 2v12a.5.5 0 0 1-.053.224l-.5 1a.5.5 0 0 1-.8.13L13 14.707l-.646.647a.5.5 0 0 1-.708 0L11 14.707l-.646.647a.5.5 0 0 1-.708 0L9 14.707l-.646.647a.5.5 0 0 1-.708 0L7 14.707l-.646.647a.5.5 0 0 1-.708 0L5 14.707l-.646.647a.5.5 0 0 1-.708 0L3 14.707l-.646.647a.5.5 0 0 1-.801-.13l-.5-1A.5.5 0 0 1 1 14V2a.5.5 0 0 1 .053-.224l.5-1a.5.5 0 0 1 .367-.27zm.217 1.338L2 2.118v11.764l.137.274.51-.51a.5.5 0 0 1 .707 0l.646.647.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.509.509.137-.274V2.118l-.137-.274-.51.51a.5.5 0 0 1-.707 0L12 1.707l-.646.647a.5.5 0 0 1-.708 0L10 1.707l-.646.647a.5.5 0 0 1-.708 0L8 1.707l-.646.647a.5.5 0 0 1-.708 0L6 1.707l-.646.647a.5.5 0 0 1-.708 0L4 1.707l-.646.647a.5.5 0 0 1-.708 0l-.509-.51z" />
                                <path
                                    d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm8-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5z" />
                            </svg>
                        </div>
                    </div>
                    <p class="mt-1 text-[13px] text-gray-500 dark:text-zinc-300 font-medium">Total Quotations</p>
                </div>

                <div
                    class="swiper-slide min-w-[220px] !flex-auto stat-shadow flex flex-col justify-between px-3 py-4 bg-white border rounded-lg shadow-sm border-[#E7EAF3B3] dark:border-zinc-700 dark:bg-zinc-800">
                    <div class="flex justify-between space-x-1 rtl:space-x-reverse">
                        <p class="text-lg font-bold text-zinc-700 dark:text-zinc-100">
                            @money($metrics?->total_profit ?? 0, settings('currency')->code, true)
                        </p>
                        <div class="flex items-center justify-center rounded-full w-9 h-9 bg-zinc-100 dark:bg-zinc-700">
                            <svg class="w-5 h-5 shrink-0 text-zinc-600 dark:text-zinc-300" stroke="currentColor"
                                fill="currentColor" stroke-width="0"
                                viewBox="0 0 24 24"xmlns="http://www.w3.org/2000/svg">
                                <g>
                                    <path fill="none" d="M0 0h24v24H0z"></path>
                                    <path
                                        d="M10 20H6v2H4v-2H3a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h7V1.59a.5.5 0 0 1 .582-.493l10.582 1.764a1 1 0 0 1 .836.986V6h1v2h-1v7h1v2h-1v2.153a1 1 0 0 1-.836.986L20 20.333V22h-2v-1.333l-7.418 1.236A.5.5 0 0 1 10 21.41V20zm2-.36l8-1.334V4.694l-8-1.333v16.278zM16.5 14c-.828 0-1.5-1.12-1.5-2.5S15.672 9 16.5 9s1.5 1.12 1.5 2.5-.672 2.5-1.5 2.5z">
                                    </path>
                                </g>
                            </svg>
                        </div>
                    </div>
                    <p class="mt-1 text-[13px] text-gray-500 dark:text-zinc-300 font-medium">Earnings</p>
                </div>
            </div>
        </div>
        <div class="flex justify-center pt-1">
            <div
                class="swiper-pagination !static [&>.swiper-pagination-bullet]:!rounded-[2px] [&>.swiper-pagination-bullet]:h-1 [&>.swiper-pagination-bullet]:w-5 p-0">
            </div>
        </div>
    </div>


    {{-- table filters and search --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-12 space-y-2 mt-10">
        <div class="flex items-center justify-between">
            <div class="relative bg-white dark:bg-gray-700 stat-shadow">
                <span class="grid place-items-center py-3 px-3 absolute left-0">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor"
                        class="text-gray-400 dark:text-gray-400" viewBox="0 0 16 16">
                        <path
                            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                    </svg>
                </span>
                <input type="text" class="form-ctr focus:!border-gray-300 pl-10"
                    @keyup.enter="@this.set('search', $event.target.value)" placeholder="Search quotes">
            </div>

            {{-- filter dropdown --}}
            <div class="static">
                <button
                    class="px-3 py-3 bg-white dark:bg-gray-700 hover:shadow-sm rounded-md border border-gray-200 flex items-center [&>*]:pointer-events-none"
                    data-offset="10" data-lc-toggle="dropdown" data-popper-placement="bottom-end">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                        class="w-5 h-5 text-slate-400 hover:text-slate-600 dark:text-slate-200 dark:hover:text-white"
                        fill="currentColor" class="bi bi-filter" viewBox="0 0 16 16">
                        <path
                            d="M6 10.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z" />
                    </svg>
                    <span
                        class="text-sm text-slate-500 hover:text-slate-600 dark:text-slate-200 dark:hover:text-white">Filter</span>
                </button>
                <div
                    class="z-10 hidden w-[250px] pb-4 bg-white border border-gray-100 rounded-md x-shadow dark:bg-zinc-800">
                    <div class="flex justify-between items-center border-b px-3 py-2">
                        <span class="text-gray-700 text-sm dark:text-gray-300 font-semibold">Filter Quotes</span>
                        <button class="rounded grid place-items-center p-2 hover:bg-[#EBF2FF]"
                            @click="document.body.click()">
                            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19"
                                fill="currentColor"
                                class="text-slate-400 hover:text-blue-400 dark:text-slate-200 dark:hover:text-white"
                                viewBox="0 0 16 16">
                                <path
                                    d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                            </svg>
                        </button>
                    </div>

                    <div class="px-4 pt-5">
                        <div class="grid grid-cols-1 gap-3">
                            <div class="">
                                <label for="startData" class="block text-slate-600 dark:text-zinc-400">Start
                                    date</label>
                                <input type="date" id="startData" class="form-ctr" wire:model.defer="start_date">
                            </div>
                            <div class="">
                                <label for="endData" class="block text-slate-600 dark:text-zinc-400">End date</label>
                                <input type="date" id="endData" class="form-ctr" wire:model.defer="end_date">
                            </div>
                            <div class="">
                                <label for="status" class="block text-slate-600 dark:text-zinc-400">Payment
                                    Status</label>
                                <select id="status" class="form-ctr" wire:model.defer="status">
                                    <option value="">All status</option>
                                    <option value="true">Paid</option>
                                    <option value="false">Unpaid</option>
                                </select>
                            </div>
                            <div class="flex items-center justify-end gap-x-3 mt-3">
                                <button class="btn-light py-2.5 px-5" wire:click="resetFilter">Clear</button>
                                <button class="btn-purple py-2.5 px-4" wire:click="filter">Apply</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


    {{-- quotations list table --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-12 space-y-2">
        <div>
            <div
                class="mt-8 overflow-x-auto overflow-y-hidden sm:mt-0 scrollbar-thin scrollbar-thumb-gray-300 scrollbar-track-gray-100 dark:scrollbar-thumb-zinc-800 dark:scrollbar-track-zinc-600">
                <table class="w-full text-left border-spacing-y-[10px] border-separate sm:mt-2">
                    <thead class="">
                        <tr class="thead-tr">
                            <th>Reference</th>
                            <th>Customer</th>
                            <th>Total dis.</th>
                            <th>Total</th>
                            <th>Expires At</th>
                            <th>Paid</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($quotations as $quote)
                            <tr class="tbody-tr cursor-pointer">
                                <td @click="viewQuote({{ $quote->toJson() }})">
                                    <span class="block text-blue-700">#{{ $quote->reference }}</span>
                                    <span class="block">{{ now()->parse($quote->created_at)->format('m/d/Y') }}</span>
                                </td>
                                <td>
                                    <div class="flex items-center gap-x-2">
                                        <div
                                            class="grid place-items-center h-10 w-10 rounded-full bg-[#EBF2FF] text-blue-600">
                                            {{ substr($quote->first_name, 0, 1) }}
                                        </div>
                                        <div class="flex flex-col">
                                            <span class="text-gray-700 dark:text-zinc-200 font-semibold capitalize">
                                                {{ $quote->first_name }} {{ $quote->last_name }}
                                            </span>
                                            <span class="text-gray-500 dark:text-zinc-200 font-light">
                                                {{ $quote->email }}
                                            </span>
                                        </div>
                                    </div>
                                </td>
                                <td>@money($quote->total_discount, settings('currency')->code, true)</td>
                                <td>@money($quote->total, settings('currency')->code, true)</td>
                                <td>{{ now()->parse($quote->expires_at)->format('m/d/Y') }}</td>
                                <td>
                                    @if (!$quote->paid)
                                        <span class="px-2.5 py-1 rounded bg-red-200 text-red-600">Unpaid</span>
                                    @endif

                                    @if ($quote->paid)
                                        <span class="px-2.5 py-1 rounded bg-green-200 text-green-600">Paid</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="static text-center">
                                        <button
                                            class="px-3 py-3 bg-white dark:bg-gray-700 hover:shadow-sm rounded-md border border-gray-200 text-sm text-slate-500 hover:text-slate-600 dark:text-slate-200 dark:hover:text-white"
                                            data-offset="10" data-lc-toggle="dropdown"
                                            data-popper-placement="bottom-end">
                                            Actions
                                        </button>
                                        <div
                                            class="z-10
                                                hidden w-48 py-4 px-3 bg-white border border-gray-100 rounded-md
                                                x-shadow dark:bg-zinc-800">
                                            <ul class="text-sm text-gray-700 dark:text-gray-200"
                                                aria-labelledby="dropdownDefault">
                                                {{-- Quote details Overview --}}
                                                <li>
                                                    <a href="/seller/quotes/{{ $quote->id }}/details"
                                                        class="flex items-center gap-x-2 py-3 px-2 rounded hover:bg-gray-100 dark:hover:bg-zinc-700 cursor-pointer">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" fill="currentColor"
                                                            class="text-slate-400 hover:!text-slate-600 dark:!text-slate-200 dark:hover:!text-white focus:outline-none"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zM11.5 4a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1z" />
                                                            <path
                                                                d="M2.354.646a.5.5 0 0 0-.801.13l-.5 1A.5.5 0 0 0 1 2v13H.5a.5.5 0 0 0 0 1h15a.5.5 0 0 0 0-1H15V2a.5.5 0 0 0-.053-.224l-.5-1a.5.5 0 0 0-.8-.13L13 1.293l-.646-.647a.5.5 0 0 0-.708 0L11 1.293l-.646-.647a.5.5 0 0 0-.708 0L9 1.293 8.354.646a.5.5 0 0 0-.708 0L7 1.293 6.354.646a.5.5 0 0 0-.708 0L5 1.293 4.354.646a.5.5 0 0 0-.708 0L3 1.293 2.354.646zm-.217 1.198.51.51a.5.5 0 0 0 .707 0L4 1.707l.646.647a.5.5 0 0 0 .708 0L6 1.707l.646.647a.5.5 0 0 0 .708 0L8 1.707l.646.647a.5.5 0 0 0 .708 0L10 1.707l.646.647a.5.5 0 0 0 .708 0L12 1.707l.646.647a.5.5 0 0 0 .708 0l.509-.51.137.274V15H2V2.118l.137-.274z" />
                                                        </svg>
                                                        <span
                                                            class="text-xs font-medium text-gray-700 dark:text-gray-300">
                                                            Quote view</span>
                                                    </a>
                                                </li>

                                                {{-- Edit Quote item --}}
                                                <li>
                                                    <a href="/seller/quotes/{{ $quote->id }}/edit"
                                                        class="flex items-center gap-x-2 py-3 px-2 rounded hover:bg-gray-100 dark:hover:bg-zinc-700 cursor-pointer">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" fill="currentColor"
                                                            class="text-slate-400 hover:!text-slate-600 dark:!text-slate-200 dark:hover:!text-white focus:outline-none"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                            <path fill-rule="evenodd"
                                                                d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                                        </svg>
                                                        <span
                                                            class="text-xs font-medium text-gray-700 dark:text-gray-300">Edit
                                                            Quote</span>
                                                    </a>
                                                </li>

                                                {{-- Share Quote item --}}
                                                <li>
                                                    <div @click="selectedQuote.quote = @js($quote); $refs.share.click()"
                                                        class="flex items-center gap-x-2 py-3 px-2 rounded hover:bg-gray-100 dark:hover:bg-zinc-700 cursor-pointer">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" fill="currentColor"
                                                            class="text-slate-400 hover:!text-slate-600 dark:!text-slate-200 dark:hover:!text-white focus:outline-none"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M13.5 1a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5zm-8.5 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm11 5.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3z" />
                                                        </svg>
                                                        <span
                                                            class="text-xs font-medium text-gray-700 dark:text-gray-300">Share
                                                            Quote</span>
                                                    </div>
                                                </li>

                                                {{-- Delete Quote item --}}
                                                <li>
                                                    <div @click="selectedQuote.quote = @js($quote); $refs.deleteQuote.click()"
                                                        class="flex items-center gap-x-2 py-3 px-2 rounded hover:bg-gray-100 dark:hover:bg-zinc-700 cursor-pointer">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" fill="currentColor"
                                                            class="text-red-500 hover:text-red-600 dark:text-red-400 dark:hover:!text-white focus:outline-none"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z" />
                                                            <path
                                                                d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z" />
                                                        </svg>
                                                        <span
                                                            class="text-xs font-medium text-gray-700 dark:text-gray-300">Delete
                                                            Quote</span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
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

            {{-- Pagination --}}
            @if ($quotations->hasPages())
                <div
                    class="bg-gray-100 px-4 py-5 sm:px-6 rounded-bl-lg rounded-br-lg flex justify-center border-t-0 border-r border-l border-b">
                    {!! $quotations->links('pagination::tailwind') !!}
                </div>
            @endif
        </div>
    </div>

    {{-- seleted modal quoations items --}}
    <x-forms.right-modal x-cloak>
        <x-slot name="title">
            <div class="">Quotation Details</div>
            <x-forms.close-button action="closeModal"></x-forms.close-button>
        </x-slot>

        <div class="">
            <div class="flex justify-between">
                <h3 class="font-bold text-slate-800" x-text="selectedQuote.quote.reference"></h3>
                <div class="flex items-center gap-x-2">
                    <button id="modals-share-btn" class="btn-purple rounded px-3 py-2.5 text-xs"
                        x-ref="share">Share</button>
                    <a :href="`/seller/quotes/${selectedQuote.quote.id}/edit`"
                        class="btn-purple rounded px-3 py-2.5 text-xs">Edit Quote</a>
                </div>
            </div>
            <div class="border rounded mt-2 mb-5">
                <div class="flex items-center px-4 py-3.5">
                    <div class="flex items-center flex-shrink-0 justify-center h-8 w-8 rounded-full bg-black mr-3">
                        <i class="icon-park w-4 h-4 text-white"></i>
                    </div>
                    <div class="text-sm font-medium"
                        x-text="`${selectedQuote.quote.first_name} ${selectedQuote.quote.last_name}`"></div>
                </div>
                <div class="grid grid-cols-3 items-center text-sm font-normal text-white bg-slate-700 py-3 px-3">
                    <h6>Total Disc.</h6>
                    <h6>Total</h6>
                    <h6>Paid</h6>
                </div>
                <div class="grid grid-cols-3 items-center text-sm font-normal py-4 px-3">
                    <h6 x-text="selectedQuote.quote.total_discount"></h6>
                    <h6 x-text="selectedQuote.quote.total"></h6>
                    <h6 x-text="selectedQuote.quote.paid ? 'Paid' : 'Unpaid'"></h6>
                </div>
            </div>

            <div class="text-sm font-semibold mb-3">Quote Items</div>
            <template x-for="item in selectedQuote.items" :key="item.id">
                <div class="border rounded py-4 px-3 grid grid-cols-3 gap-y-2 gap-x-3 sm:gap-x-5 mb-3">
                    <div class="col-span-2 md:col-span-3">
                        <div class="text-sm text-gray-500">Description</div>
                        <div class="text-sm" x-text="item.description"></div>
                    </div>
                    <div class="">
                        <div class="text-sm text-gray-500">Quantity</div>
                        <div class="text-sm" x-text="`${item.quantity} qty`"></div>
                    </div>
                    <div class="">
                        <div class="text-sm text-gray-500">Price</div>
                        <div class="text-sm" x-text="item.price"></div>
                    </div>
                    <div class="">
                        <div class="text-sm text-gray-500">Discount</div>
                        <div class="text-sm" x-text="item.discount"></div>
                    </div>
                </div>
            </template>

        </div>
    </x-forms.right-modal>

    {{-- Modals (Share gig) --}}
    <x-forms.modal id="modals-share-container" target="modals-share-btn" uid="modal_{{ uid() }}"
        placement="center-center" size="max-w-2xl">

        {{-- Header --}}
        <x-slot name="title">{{ __('messages.t_share_this_gig') }}</x-slot>

        {{-- Content --}}
        <x-slot name="content">
            <div class="flex items-center justify-center">

                {{-- Facebook --}}
                <div class="grid items-center justify-center mx-4">
                    <a :href="`https://www.facebook.com/share.php?u=https://correcthustle.com/quotations/${selectedQuote.quote.reference}/payment&t=Quotation`"
                        target="_blank"
                        class="inline-flex justify-center items-center h-12 w-12 border border-transparent rounded-full bg-[#3b5998] focus:outline-none focus:ring-0 mx-auto">
                        <svg class="h-5 w-5 fill-white" version="1.1" viewBox="0 0 512 512" width="100%"
                            xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                            xmlns:serif="http://www.serif.com/" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <path
                                d="M374.244,285.825l14.105,-91.961l-88.233,0l0,-59.677c0,-25.159 12.325,-49.682 51.845,-49.682l40.116,0l0,-78.291c0,0 -36.407,-6.214 -71.213,-6.214c-72.67,0 -120.165,44.042 -120.165,123.775l0,70.089l-80.777,0l0,91.961l80.777,0l0,222.31c16.197,2.541 32.798,3.865 49.709,3.865c16.911,0 33.511,-1.324 49.708,-3.865l0,-222.31l74.128,0Z" />
                        </svg>
                    </a>
                    <span
                        class="uppercase font-normal text-xs text-gray-500 mt-4 tracking-widest">{{ __('messages.t_facebook') }}</span>
                </div>

                {{-- Twitter --}}
                <div class="grid items-center justify-center mx-4">
                    <a :href="`https://twitter.com/intent/tweet?text=Quotation%20-%20https://correcthustle.com/quotations/${selectedQuote.quote.reference}/payment%20`"
                        target="_blank"
                        class="inline-flex justify-center items-center h-12 w-12 border border-transparent rounded-full bg-[#1da1f2] focus:outline-none focus:ring-0 mx-auto">
                        <svg class="h-5 w-5 fill-white" version="1.1" viewBox="0 0 512 512" width="100%"
                            xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                            xmlns:serif="http://www.serif.com/" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <path
                                d="M161.014,464.013c193.208,0 298.885,-160.071 298.885,-298.885c0,-4.546 0,-9.072 -0.307,-13.578c20.558,-14.871 38.305,-33.282 52.408,-54.374c-19.171,8.495 -39.51,14.065 -60.334,16.527c21.924,-13.124 38.343,-33.782 46.182,-58.102c-20.619,12.235 -43.18,20.859 -66.703,25.498c-19.862,-21.121 -47.602,-33.112 -76.593,-33.112c-57.682,0 -105.145,47.464 -105.145,105.144c0,8.002 0.914,15.979 2.722,23.773c-84.418,-4.231 -163.18,-44.161 -216.494,-109.752c-27.724,47.726 -13.379,109.576 32.522,140.226c-16.715,-0.495 -33.071,-5.005 -47.677,-13.148l0,1.331c0.014,49.814 35.447,93.111 84.275,102.974c-15.464,4.217 -31.693,4.833 -47.431,1.802c13.727,42.685 53.311,72.108 98.14,72.95c-37.19,29.227 -83.157,45.103 -130.458,45.056c-8.358,-0.016 -16.708,-0.522 -25.006,-1.516c48.034,30.825 103.94,47.18 161.014,47.104"
                                style="fill-rule:nonzero;" />
                        </svg>
                    </a>
                    <span
                        class="uppercase font-normal text-xs text-gray-500 mt-4 tracking-widest">{{ __('messages.t_twitter') }}</span>
                </div>

                {{-- Linkedin --}}
                <div class="grid items-center justify-center mx-4">
                    <a :href="`https://www.linkedin.com/shareArticle?mini=true&url=https://correcthustle.com/quotations/${selectedQuote.quote.reference}/payment&title=Quotation&summary=Quotation`"
                        target="_blank"
                        class="inline-flex justify-center items-center h-12 w-12 border border-transparent rounded-full bg-[#0a66c2] focus:outline-none focus:ring-0 mx-auto">
                        <svg class="h-5 w-5 fill-white" version="1.1" viewBox="0 0 512 512" width="100%"
                            xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                            xmlns:serif="http://www.serif.com/" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <path
                                d="M473.305,-1.353c20.88,0 37.885,16.533 37.885,36.926l0,438.251c0,20.393 -17.005,36.954 -37.885,36.954l-436.459,0c-20.839,0 -37.773,-16.561 -37.773,-36.954l0,-438.251c0,-20.393 16.934,-36.926 37.773,-36.926l436.459,0Zm-37.829,436.389l0,-134.034c0,-65.822 -14.212,-116.427 -91.12,-116.427c-36.955,0 -61.739,20.263 -71.867,39.476l-1.04,0l0,-33.411l-72.811,0l0,244.396l75.866,0l0,-120.878c0,-31.883 6.031,-62.773 45.554,-62.773c38.981,0 39.468,36.461 39.468,64.802l0,118.849l75.95,0Zm-284.489,-244.396l-76.034,0l0,244.396l76.034,0l0,-244.396Zm-37.997,-121.489c-24.395,0 -44.066,19.735 -44.066,44.047c0,24.318 19.671,44.052 44.066,44.052c24.299,0 44.026,-19.734 44.026,-44.052c0,-24.312 -19.727,-44.047 -44.026,-44.047Z"
                                style="fill-rule:nonzero;" />
                        </svg>
                    </a>
                    <span
                        class="uppercase font-normal text-xs text-gray-500 mt-4 tracking-widest">{{ __('messages.t_linkedin') }}</span>
                </div>

                {{-- Whatsapp --}}
                <div class="grid items-center justify-center mx-4">
                    <a :href="`https://api.whatsapp.com/send?text=Quotation%20https://correcthustle.com/quotations/${selectedQuote.quote.reference}/payment`"
                        target="_blank"
                        class="inline-flex justify-center items-center h-12 w-12 border border-transparent rounded-full bg-[#25d366] focus:outline-none focus:ring-0 mx-auto">
                        <svg class="h-5 w-5 fill-white" version="1.1" viewBox="0 0 512 512" width="100%"
                            xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                            xmlns:serif="http://www.serif.com/" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <path
                                d="M373.295,307.064c-6.37,-3.188 -37.687,-18.596 -43.526,-20.724c-5.838,-2.126 -10.084,-3.187 -14.331,3.188c-4.246,6.376 -16.454,20.725 -20.17,24.976c-3.715,4.251 -7.431,4.785 -13.8,1.594c-6.37,-3.187 -26.895,-9.913 -51.225,-31.616c-18.935,-16.89 -31.72,-37.749 -35.435,-44.126c-3.716,-6.377 -0.397,-9.824 2.792,-13c2.867,-2.854 6.371,-7.44 9.555,-11.16c3.186,-3.718 4.247,-6.377 6.37,-10.626c2.123,-4.252 1.062,-7.971 -0.532,-11.159c-1.591,-3.188 -14.33,-34.542 -19.638,-47.298c-5.171,-12.419 -10.422,-10.737 -14.332,-10.934c-3.711,-0.184 -7.963,-0.223 -12.208,-0.223c-4.246,0 -11.148,1.594 -16.987,7.969c-5.838,6.377 -22.293,21.789 -22.293,53.14c0,31.355 22.824,61.642 26.009,65.894c3.185,4.252 44.916,68.59 108.816,96.181c15.196,6.564 27.062,10.483 36.312,13.418c15.259,4.849 29.145,4.165 40.121,2.524c12.238,-1.827 37.686,-15.408 42.995,-30.286c5.307,-14.882 5.307,-27.635 3.715,-30.292c-1.592,-2.657 -5.838,-4.251 -12.208,-7.44m-116.224,158.693l-0.086,0c-38.022,-0.015 -75.313,-10.23 -107.845,-29.535l-7.738,-4.592l-80.194,21.037l21.405,-78.19l-5.037,-8.017c-21.211,-33.735 -32.414,-72.726 -32.397,-112.763c0.047,-116.825 95.1,-211.87 211.976,-211.87c56.595,0.019 109.795,22.088 149.801,62.139c40.005,40.05 62.023,93.286 62.001,149.902c-0.048,116.834 -95.1,211.889 -211.886,211.889m180.332,-392.224c-48.131,-48.186 -112.138,-74.735 -180.335,-74.763c-140.514,0 -254.875,114.354 -254.932,254.911c-0.018,44.932 11.72,88.786 34.03,127.448l-36.166,132.102l135.141,-35.45c37.236,20.31 79.159,31.015 121.826,31.029l0.105,0c140.499,0 254.87,-114.366 254.928,-254.925c0.026,-68.117 -26.467,-132.166 -74.597,-180.352"
                                id="WhatsApp-Logo" />
                        </svg>
                    </a>
                    <span
                        class="uppercase font-normal text-xs text-gray-500 mt-4 tracking-widest">{{ __('messages.t_whatsapp') }}</span>
                </div>

                {{-- Copy link --}}
                <div class="grid items-center justify-center mx-4">
                    <button type="button"
                        x-on:click="copy(`https://correcthustle.com/quotations/${selectedQuote.quote.reference}/payment`)"
                        class="inline-flex justify-center items-center h-12 w-12 border border-transparent rounded-full bg-gray-400 focus:outline-none focus:ring-0 mx-auto">
                        <svg class="h-5 w-5 fill-white" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <title />
                            <path
                                d="M17.3,13.35a1,1,0,0,1-.7-.29,1,1,0,0,1,0-1.41l2.12-2.12a2,2,0,0,0,0-2.83L17.3,5.28a2.06,2.06,0,0,0-2.83,0L12.35,7.4A1,1,0,0,1,10.94,6l2.12-2.12a4.1,4.1,0,0,1,5.66,0l1.41,1.41a4,4,0,0,1,0,5.66L18,13.06A1,1,0,0,1,17.3,13.35Z" />
                            <path
                                d="M8.11,21.3a4,4,0,0,1-2.83-1.17L3.87,18.72a4,4,0,0,1,0-5.66L6,10.94A1,1,0,0,1,7.4,12.35L5.28,14.47a2,2,0,0,0,0,2.83L6.7,18.72a2.06,2.06,0,0,0,2.83,0l2.12-2.12A1,1,0,1,1,13.06,18l-2.12,2.12A4,4,0,0,1,8.11,21.3Z" />
                            <path
                                d="M8.82,16.18a1,1,0,0,1-.71-.29,1,1,0,0,1,0-1.42l6.37-6.36a1,1,0,0,1,1.41,0,1,1,0,0,1,0,1.42L9.52,15.89A1,1,0,0,1,8.82,16.18Z" />
                        </svg>
                    </button>
                    <template x-if="!isCopied">
                        <span
                            class="uppercase font-normal text-xs text-gray-500 mt-4 tracking-widest">{{ __('messages.t_copy_link') }}</span>
                    </template>
                    <template x-if="isCopied">
                        <span
                            class="uppercase font-normal text-xs text-green-500 mt-4 tracking-widest">{{ __('messages.t_copied') }}</span>
                    </template>
                </div>

            </div>
        </x-slot>
    </x-forms.modal>

    {{-- delete quote action --}}
    <button class="hidden" id="deleteQuote" x-ref="deleteQuote"></button>
    <x-forms.modal placement="top" size="max-w-md" id="deleteQuoteModal" target="deleteQuote"
        uid="deleteQuoteModaluid">
        <x-slot:title>
            <div class="text-gray-800 dark:text-gray-300">Delete Quotation</div>
        </x-slot>
        <x-slot:content>
            <div class="sm:flex sm:items-start">
                <div class="text-center">
                    <h3 class="text-base font-medium leading-6 text-gray-600 dark:text-white">
                        Are you sure you want to delete this quotation, this action can't be reversed
                    </h3>
                </div>
            </div>
        </x-slot>
        <x-slot:footer>
            <div class="flex items-center gap-x-4">
                <button class="btn-light px-5" @click="$dispatch('close-modal', 'deleteQuoteModal')">Cancel</button>
                <button class="btn-purple bg-red-600 enabled:hover:bg-red-500" @click="deleteQuote"
                    modal-close="myModal">Proceed</button>
            </div>
        </x-slot>
    </x-forms.modal>

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

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
@endpush

@push('scripts')
    <script>
        function SellerDashboardQuotesPage() {
            return {
                form: {
                    demo: "this is a demo content"
                },

                hidden: false,
                isCopied: false,
                titleStyle: "",
                selectedQuote: {
                    quote: {},
                    items: []
                },

                viewQuote(quote) {
                    this.selectedQuote.quote = quote
                    this.selectedQuote.items = []
                    this.hidden = true
                    this.wireQuoteItems(quote.id)
                },

                async wireQuoteItems(quoteId) {
                    let res = await @this.getQuotationItems(quoteId)
                    this.selectedQuote.items = res
                },

                closeModal() {
                    this.hidden = false
                },

                copy(text) {
                    let _this = this;
                    navigator.clipboard.writeText(text).then(function() {
                        _this.isCopied = true;
                        setTimeout(() => {
                            _this.isCopied = false
                        }, 2000);
                    }, function(err) {})
                },

                closeRightModal(event) {
                    if (event.target.classList.contains('modal-backdrop')) {
                        this.hidden = false
                    }
                },

                async deleteQuote() {
                    await @this.deleteQuotation(this.selectedQuote.quote.id)
                    this.selectedQuote.quote = {}
                }
            }
        }
        window.SellerDashboardQuotesPage = SellerDashboardQuotesPage()

        new Swiper('.metric-swipe', {
            slidesPerView: "auto",

            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
        });
    </script>

    <script src="{{ mix('js/dropdown.js') }}"></script>
@endpush
