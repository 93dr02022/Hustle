<div class="w-full" x-data="window.AccountSingleMilestone">

    {{-- Loading --}}
    <x-forms.loading />

    {{-- Section --}}
    <div class="lg:grid lg:grid-cols-12">

        {{-- Sidebar --}}
        <aside class="lg:col-span-3 py-6 hidden lg:block bg-white shadow-sm border border-gray-200 rounded-lg dark:bg-zinc-800 dark:border-transparent" wire:ignore>
            <x-main.account.sidebar />
        </aside>

        {{-- Container --}}
        <div class="lg:col-span-9 lg:ltr:ml-8 lg:rtl:mr-8">

            {{-- Head --}}
            <div class="w-full mb-16">
                <div class="mx-auto max-w-7xl">
                    <div class="lg:flex lg:items-center lg:justify-between">

                        <div class="min-w-0 flex-1">

                            {{-- Breadcrumbs --}}
                            <div class="mb-3 flex flex-col sm:flex-row sm:flex-wrap sm:space-x-6 rtl:space-x-reverse">
                                <ol class="inline-flex items-center mb-3 space-x-1 md:space-x-3 md:rtl:space-x-reverse sm:mb-0">

                                    {{-- Main home --}}
                                    <li>
                                        <div class="flex items-center">
                                            <a href="{{ url('/') }}" class="text-sm font-medium text-gray-700 hover:text-primary-600 dark:text-zinc-300 dark:hover:text-white">
                                                @lang('messages.t_home')
                                            </a>
                                        </div>
                                    </li>

                                    {{-- My projects --}}
                                    <li aria-current="page">
                                        <div class="flex items-center">
                                            <svg aria-hidden="true" class="w-4 h-4 text-gray-400 rtl:rotate-180" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                            <span class="mx-1 text-sm font-medium text-gray-400 md:mx-2 dark:text-zinc-400">
                                                @lang('messages.t_my_projects')
                                            </span>
                                        </div>
                                    </li>

                                </ol>
                            </div>

                            {{-- Section heading --}}
                            <h2 class="text-lg font-bold leading-7 text-zinc-700 dark:text-gray-50 sm:truncate sm:text-xl sm:tracking-tight">
                                @lang('messages.t_milestone_payments')
                            </h2>

                            {{-- Subtitle --}}
                            <p class="leading-relaxed text-gray-400 mt-1 text-sm">
                                @lang('messages.t_employer_milestone_payments_subtitle')
                            </p>

                        </div>

                        {{-- Actions --}}
                        <div class="mt-5 flex justify-between lg:mt-0 lg:ltr::ml-4 lg:rtl:mr-4">

                            {{-- View project --}}
                            <span class="block">
                                <a href="{{ url('project/' . $project->pid . '/' . $project->slug) }}" target="_blank"
                                    class="inline-flex items-center px-4 py-2 border border-gray-300 dark:border-zinc-500 rounded-sm shadow-sm text-[13px] font-medium text-gray-700 dark:text-zinc-200 bg-white dark:bg-zinc-600 hover:bg-gray-50 dark:hover:bg-zinc-500 focus:outline-none focus:ring-primary-600">
                                    <svg class="h-5 w-5 text-gray-500 ltr:mr-2 rtl:ml-2 dark:text-zinc-200" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill="none" d="M0 0h24v24H0z"></path>
                                        <path d="M19 19H5V5h7V3H5a2 2 0 00-2 2v14a2 2 0 002 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z">
                                        </path>
                                    </svg>
                                    {{ __('messages.t_view_project') }}
                                </a>
                            </span>

                        </div>

                    </div>
                </div>
            </div>

            {{-- Content --}}
            <div class="w-full">

                {{-- Project details --}}
                <div class="flex justify-end mb-4">
                    <div class="static">
                        <a class="btn-purple cursor-pointer text[13px] rounded font-medium px-3 py-2" data-offset="10" data-lc-toggle="dropdown" data-popper-placement="bottom-end">
                            Budget Funds
                        </a>
                        <div class="z-10 hidden w-48 px-3 py-4 bg-white border border-gray-200 rounded shadow-lg dark:bg-zinc-800">
                            <a id="modal-topup-budget-button-{{ $project->uid }}" class="block text-sm py-2 px-3 rounded hover:bg-slate-100 cursor-pointer">
                                Topup Allocation</a>
                            <a id="modal-increase-budget-button-{{ $project->uid }}" class="block text-sm py-2 px-3 rounded hover:bg-slate-100 cursor-pointer">Increase Budget</a>
                        </div>
                    </div>
                </div>

                <div class="w-full mb-6">
                    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-6 gap-y-6 gap-x-2 h-full">

                        {{-- Status --}}
                        <div>
                            <div
                                class="flex flex-col h-full justify-center items-center text-center space-y-3 dark:bg-zinc-800 dark:border-transparent py-4 px-2 border rounded-lg bg-slate-50 border-slate-200 shadow-sm-light dark:shadow-none">
                                <div class="w-10 h-10 rounded-full flex items-center justify-center border border-slate-200 bg-slate-100 dark:bg-zinc-700 dark:border-transparent">
                                    <svg class="h-5 w-5 text-slate-400 dark:text-zinc-400" stroke="currentColor" fill="currentColor" stroke-width="0" version="1.2" baseProfile="tiny"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M13.839 17.525c-.006.002-.559.186-1.039.186-.265 0-.372-.055-.406-.079-.168-.117-.48-.336.054-1.4l1-1.994c.593-1.184.681-2.329.245-3.225-.356-.733-1.039-1.236-1.92-1.416-.317-.065-.639-.097-.958-.097-1.849 0-3.094 1.08-3.146 1.126-.179.158-.221.42-.102.626.12.206.367.3.595.222.005-.002.559-.187 1.039-.187.263 0 .369.055.402.078.169.118.482.34-.051 1.402l-1 1.995c-.594 1.185-.681 2.33-.245 3.225.356.733 1.038 1.236 1.921 1.416.314.063.636.097.954.097 1.85 0 3.096-1.08 3.148-1.126.179-.157.221-.42.102-.626-.12-.205-.369-.297-.593-.223z">
                                        </path>
                                        <circle cx="13" cy="6.001" r="2.5"></circle>
                                    </svg>
                                </div>
                                <span class="font-medium text-slate-400 text-[11px] uppercase dark:text-zinc-300 tracking-[2px] whitespace-nowrap">@lang('messages.t_status')</span>
                                <div class="text-sm font-semibold tracking-wide dark:text-white text-zinc-700">
                                    @switch($project->status)
                                        {{-- Active --}}
                                        @case('active')
                                            <span class="text-emerald-600">
                                                @lang('messages.t_active')
                                            </span>
                                        @break

                                        {{-- Completed --}}
                                        @case('completed')
                                            <span class="text-green-600">
                                                @lang('messages.t_completed')
                                            </span>
                                        @break

                                        {{-- Under development --}}
                                        @case('under_development')
                                            <span class="text-blue-600">
                                                @lang('messages.t_under_development')
                                            </span>
                                        @break

                                        {{-- Pending final review --}}
                                        @case('pending_final_review')
                                            <span class="text-amber-600">
                                                @lang('messages.t_pending_final_review')
                                            </span>
                                        @break

                                        {{-- Incomplete --}}
                                        @case('incomplete')
                                            <span class="text-red-600">
                                                @lang('messages.t_incomplete')
                                            </span>
                                        @break

                                        {{-- Closed --}}
                                        @case('closed')
                                            <span class="text-slate-600 dark:text-slate-200">
                                                @lang('messages.t_closed')
                                            </span>
                                        @break

                                        @default
                                    @endswitch
                                </div>
                            </div>
                        </div>

                        {{-- Delivery date --}}
                        <div>
                            <div
                                class="flex flex-col h-full justify-center items-center text-center space-y-3 dark:bg-zinc-800 dark:border-transparent py-4 px-2 border rounded-lg bg-slate-50 border-slate-200 shadow-sm-light dark:shadow-none">
                                <div class="w-10 h-10 rounded-full flex items-center justify-center border border-slate-200 bg-slate-100 dark:bg-zinc-700 dark:border-transparent">
                                    <svg class="h-5 w-5 text-slate-400 dark:text-zinc-400" stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                                        stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M11.795 21h-6.795a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v4">
                                        </path>
                                        <path d="M18 18m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0"></path>
                                        <path d="M15 3v4"></path>
                                        <path d="M7 3v4"></path>
                                        <path d="M3 11h16"></path>
                                        <path d="M18 16.496v1.504l1 1"></path>
                                    </svg>
                                </div>
                                <span class="font-medium text-slate-400 text-[11px] uppercase dark:text-zinc-300 tracking-[2px] whitespace-nowrap">@lang('messages.t_delivery_time')</span>
                                <div class="text-sm font-semibold tracking-wide dark:text-white text-zinc-700">
                                    @if ($expected_delivery_date)
                                        {{ format_date($expected_delivery_date, config('carbon-formats.F_j_Y')) }}
                                    @else
                                        @lang('messages.t_n_a')
                                    @endif
                                </div>
                            </div>
                        </div>

                        {{-- Amount In progress --}}
                        <div>
                            <div
                                class="flex flex-col h-full justify-center items-center text-center space-y-3 dark:bg-zinc-800 dark:border-transparent py-4 px-2 border rounded-lg bg-slate-50 border-slate-200 shadow-sm-light dark:shadow-none">
                                <div class="w-10 h-10 rounded-full flex items-center justify-center border border-slate-200 bg-slate-100 dark:bg-zinc-700 dark:border-transparent">
                                    <svg class="h-5 w-5 text-slate-400 dark:text-zinc-400" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M20.92 2.38A15.72 15.72 0 0 0 17.5 2a8.26 8.26 0 0 0-6 2.06Q9.89 5.67 8.31 7.27c-1.21-.13-4.08-.2-6 1.74a1 1 0 0 0 0 1.41l11.3 11.32a1 1 0 0 0 1.41 0c1.95-2 1.89-4.82 1.77-6l3.21-3.2c3.19-3.19 1.74-9.18 1.68-9.43a1 1 0 0 0-.76-.73zm-2.36 8.75L15 14.67a1 1 0 0 0-.27.9 6.81 6.81 0 0 1-.54 3.94L4.52 9.82a6.67 6.67 0 0 1 4-.5A1 1 0 0 0 9.39 9s1.4-1.45 3.51-3.56A6.61 6.61 0 0 1 17.5 4a14.51 14.51 0 0 1 2.33.2c.24 1.43.62 5.04-1.27 6.93z">
                                        </path>
                                        <circle cx="15.73" cy="8.3" r="2"></circle>
                                        <path d="M5 16c-2 1-2 5-2 5a7.81 7.81 0 0 0 5-2z"></path>
                                    </svg>
                                </div>
                                <span class="font-medium text-slate-400 text-[11px] uppercase dark:text-zinc-300 tracking-[2px] whitespace-nowrap">@lang('messages.t_in_progress')</span>
                                <div class="text-sm font-semibold tracking-wide dark:text-white text-zinc-700">
                                    @money($payments_in_progress, settings('currency')->code, true)
                                </div>
                            </div>
                        </div>

                        {{-- Paid amount --}}
                        <div>
                            <div
                                class="flex flex-col h-full justify-center items-center text-center space-y-3 dark:bg-zinc-800 dark:border-transparent py-4 px-2 border rounded-lg bg-slate-50 border-slate-200 shadow-sm-light dark:shadow-none">
                                <div class="w-10 h-10 rounded-full flex items-center justify-center border border-slate-200 bg-slate-100 dark:bg-zinc-700 dark:border-transparent">
                                    <svg class="h-5 w-5 text-slate-400 dark:text-zinc-400" stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                                        stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M9 12l2 2l4 -4"></path>
                                        <path d="M12 3a12 12 0 0 0 8.5 3a12 12 0 0 1 -8.5 15a12 12 0 0 1 -8.5 -15a12 12 0 0 0 8.5 -3">
                                        </path>
                                    </svg>
                                </div>
                                <span class="font-medium text-slate-400 text-[11px] uppercase dark:text-zinc-300 tracking-[2px] whitespace-nowrap">@lang('messages.t_paid_amount')</span>
                                <div class="text-sm font-semibold tracking-wide dark:text-white text-zinc-700">
                                    @money($paid_amount, settings('currency')->code, true)
                                </div>
                            </div>
                        </div>

                        {{-- project allocated budget --}}
                        <div>
                            <div
                                class="flex flex-col h-full justify-center items-center text-center space-y-3 dark:bg-zinc-800 dark:border-transparent py-4 px-2 border rounded-lg bg-slate-50 border-slate-200 shadow-sm-light dark:shadow-none">
                                <div class="w-10 h-10 rounded-full flex items-center justify-center border border-slate-200 bg-slate-100 dark:bg-zinc-700 dark:border-transparent">
                                    <svg class="h-5 w-5 text-slate-400 dark:text-zinc-400" stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                                        stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2">
                                        </path>
                                        <path d="M9 3m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z">
                                        </path>
                                        <path d="M14 11h-2.5a1.5 1.5 0 0 0 0 3h1a1.5 1.5 0 0 1 0 3h-2.5"></path>
                                        <path d="M12 17v1m0 -8v1"></path>
                                    </svg>
                                </div>
                                <span class="font-medium text-slate-400 text-[11px] uppercase dark:text-zinc-300 tracking-[2px] whitespace-nowrap">@lang('Allocated funds')</span>
                                <div class="text-sm font-semibold tracking-wide dark:text-white text-zinc-700">
                                    @money($project->budget_allocation, settings('currency')->code, true)
                                </div>
                            </div>
                        </div>

                        {{-- Project budget --}}
                        <div>
                            <div
                                class="flex flex-col h-full justify-center items-center text-center space-y-3 dark:bg-zinc-800 dark:border-transparent py-4 px-2 border rounded-lg bg-slate-50 border-slate-200 shadow-sm-light dark:shadow-none">
                                <div class="w-10 h-10 rounded-full flex items-center justify-center border border-slate-200 bg-slate-100 dark:bg-zinc-700 dark:border-transparent">
                                    <svg class="h-5 w-5 text-slate-400 dark:text-zinc-400" stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                                        stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2">
                                        </path>
                                        <path d="M9 3m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z">
                                        </path>
                                        <path d="M14 11h-2.5a1.5 1.5 0 0 0 0 3h1a1.5 1.5 0 0 1 0 3h-2.5"></path>
                                        <path d="M12 17v1m0 -8v1"></path>
                                    </svg>
                                </div>
                                <span class="font-medium text-slate-400 text-[11px] uppercase dark:text-zinc-300 tracking-[2px] whitespace-nowrap">@lang('budget')</span>
                                <div class="text-sm font-semibold tracking-wide dark:text-white text-zinc-700">
                                    @money($project->awarded_bid->amount, settings('currency')->code, true)
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                {{-- Milestones --}}
                <div class="w-full">

                    {{-- Action buttons --}}
                    <div class="flex justify-end items-center mt-12">
                        <div class="flex items-center space-x-3 rtl:space-x-reverse">

                            {{-- View awarded bid --}}
                            <button type="button"
                                class="inline-flex justify-center items-center space-x-2 rtl:space-x-reverse rounded border font-medium focus:outline-none px-3 py-2 tracking-wide text-[13px] border-gray-300 bg-white text-gray-800 shadow-sm hover:text-gray-800 hover:bg-gray-100 hover:border-gray-300 hover:shadow focus:ring focus:ring-gray-500 focus:ring-opacity-25 active:bg-white active:border-white active:shadow-none dark:bg-zinc-700 dark:border-transparent dark:text-zinc-200 dark:hover:bg-zinc-600"
                                id="modal-awarded-bid-button-{{ $project->uid }}">
                                @lang('messages.t_awarded_bid')
                            </button>

                            {{-- Create milestone --}}
                            @if (in_array($project->status, ['active', 'under_development', 'pending_final_review']))
                                <button type="button"
                                    class="inline-flex justify-center items-center space-x-2 rtl:space-x-reverse rounded border font-medium focus:outline-none px-3 py-2 tracking-wide text-[13px] border-primary-600 bg-primary-600 text-white hover:text-white hover:bg-primary-700 hover:border-primary-700 focus:ring focus:ring-primary-500 focus:ring-opacity-50 active:bg-primary-700 active:border-primary-700"
                                    id="modal-create-milestone-button-{{ $project->uid }}">
                                    @lang('messages.t_create_milestone')
                                </button>
                            @endif

                        </div>
                    </div>

                    {{-- Table --}}
                    <div class="mt-8 overflow-x-auto overflow-y-hidden scrollbar-thin scrollbar-thumb-gray-300 scrollbar-track-gray-100 dark:scrollbar-thumb-zinc-800 dark:scrollbar-track-zinc-600">
                        <table class="w-full text-left border-spacing-y-[10px] border-separate -mt-2">
                            <thead class="">
                                <tr class="bg-slate-200 dark:bg-zinc-600">

                                    {{-- Date --}}
                                    <th
                                        class="font-bold tracking-wider text-gray-600 px-5 py-4.5 border-b-0 whitespace-nowrap text-xs uppercase dark:text-zinc-300 first:ltr:rounded-l-md last:ltr:rounded-r-md first:rtl:rounded-r-md last:rtl:rounded-l-md rtl:text-right">
                                        @lang('messages.t_date')</th>

                                    {{-- Description --}}
                                    <th
                                        class="font-bold tracking-wider text-gray-600 px-5 py-4.5 border-b-0 whitespace-nowrap text-xs uppercase dark:text-zinc-300 first:ltr:rounded-l-md last:ltr:rounded-r-md first:rtl:rounded-r-md last:rtl:rounded-l-md rtl:text-right">
                                        @lang('messages.t_description')</th>

                                    {{-- Status --}}
                                    <th
                                        class="font-bold tracking-wider text-gray-600 px-5 py-4.5 text-center border-b-0 whitespace-nowrap text-xs uppercase dark:text-zinc-300 first:ltr:rounded-l-md last:ltr:rounded-r-md first:rtl:rounded-r-md last:rtl:rounded-l-md">
                                        @lang('messages.t_status')</th>

                                    {{-- Paid to freelancer --}}
                                    <th
                                        class="font-bold tracking-wider text-gray-600 px-5 py-4.5 text-center border-b-0 whitespace-nowrap text-xs uppercase dark:text-zinc-300 first:ltr:rounded-l-md last:ltr:rounded-r-md first:rtl:rounded-r-md last:rtl:rounded-l-md">
                                        @lang('messages.t_paid_to_freelancer')</th>

                                    {{-- Total --}}
                                    <th
                                        class="font-bold tracking-wider text-gray-600 px-5 py-4.5 text-center border-b-0 whitespace-nowrap text-xs uppercase dark:text-zinc-300 first:ltr:rounded-l-md last:ltr:rounded-r-md first:rtl:rounded-r-md last:rtl:rounded-l-md">
                                        @lang('messages.t_total')</th>

                                    {{-- Options --}}
                                    <th
                                        class="font-bold tracking-wider text-gray-600 px-5 py-4.5 text-center border-b-0 whitespace-nowrap text-xs uppercase dark:text-zinc-300 first:ltr:rounded-l-md last:ltr:rounded-r-md first:rtl:rounded-r-md last:rtl:rounded-l-md">
                                        @lang('messages.t_options')</th>

                                </tr>
                            </thead>
                            <thead>
                                @forelse ($payments as $p)
                                    <tr class="shadow-sm bg-white dark:bg-zinc-800 rounded-md h-16" wire:key="employer-dashboard-project-milestones-{{ $p->uid }}">

                                        {{-- Date --}}
                                        <td class="px-5 py-3 first:ltr:rounded-l-md last:ltr:rounded-r-md first:rtl:rounded-r-md last:rtl:rounded-l-md rtl:text-right">
                                            <div class="text-gray-600 dark:text-gray-100 text-[13px] font-normal whitespace-nowrap">
                                                {{ format_date($p->created_at) }}
                                            </div>
                                        </td>

                                        {{-- Description --}}
                                        <td class="px-5 pt-6 first:ltr:rounded-l-md last:ltr:rounded-r-md first:rtl:rounded-r-md last:rtl:rounded-l-md w-48 flex items-center gap-x-2 rtl:text-right">
                                            <div class="text-gray-700 leading-relaxed dark:text-gray-100 text-sm font-medium truncate overflow-auto w-48">
                                                {{ $p->description }}
                                            </div>
                                            @if (strlen($p->description) > 15)
                                                <div class="static">
                                                    <a class="" data-offset="8" data-lc-toggle="dropdown" data-popper-placement="bottom">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="text-blue-600 pointer-events-none" viewBox="0 0 16 16">
                                                            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                                                        </svg>
                                                    </a>
                                                    <div class="z-10 hidden text-left text-white text-xs w-[210px] px-3 py-4 bg-slate-700/90 border border-gray-200 rounded shadow-lg dark:bg-zinc-800">
                                                        {{ $p->description }}
                                                    </div>
                                                </div>
                                            @endif
                                        </td>

                                        {{-- Status --}}
                                        <td class="px-5 py-3 first:ltr:rounded-l-md last:ltr:rounded-r-md first:rtl:rounded-r-md last:rtl:rounded-l-md text-center">
                                            @switch($p->status)
                                                {{-- Requested --}}
                                                @case('request')
                                                    <span
                                                        class="inline-flex items-center px-3 py-2 rounded-3xl text-xs tracking-wide font-medium bg-yellow-100 text-yellow-800 dark:bg-transparent dark:text-amber-400">
                                                        {{ __('messages.t_requested') }}
                                                    </span>
                                                @break

                                                {{-- Paid --}}
                                                @case('paid')
                                                    <span
                                                        class="inline-flex items-center px-4 py-2 rounded-3xl text-xs tracking-wide font-medium bg-green-100 text-green-800 dark:bg-transparent dark:text-green-400">
                                                        {{ __('messages.t_paid') }}
                                                    </span>
                                                @break

                                                {{-- declined --}}
                                                @case('declined')
                                                    <div class="flex items-center gap-x-2">
                                                        <span
                                                            class="inline-flex items-center px-4 py-2 rounded-3xl text-xs tracking-wide font-medium bg-red-100 text-red-800 dark:bg-transparent dark:text-red-400">
                                                            {{ __('declined') }}
                                                        </span>
                                                        <div class="static">
                                                            <a class="" data-offset="8" data-lc-toggle="dropdown" data-popper-placement="bottom">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="text-red-600 pointer-events-none" viewBox="0 0 16 16">
                                                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                                                                </svg>
                                                            </a>
                                                            <div class="z-10 hidden text-left text-white text-xs w-[210px] px-3 py-4 bg-slate-700/90 border border-gray-200 rounded shadow-lg dark:bg-zinc-800">
                                                                {{ $p->decline_reason }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                @break

                                                {{-- Funded --}}
                                                @case('funded')
                                                    <span
                                                        class="inline-flex items-center px-3 py-2 rounded-3xl text-xs tracking-wide font-medium bg-purple-100 text-purple-800 dark:bg-transparent dark:text-purple-400">
                                                        {{ __('messages.t_funded') }}
                                                    </span>
                                                @break

                                                @default
                                            @endswitch
                                        </td>

                                        {{-- Pait to freelancer --}}
                                        <td class="px-5 py-3 first:ltr:rounded-l-md last:ltr:rounded-r-md first:rtl:rounded-r-md last:rtl:rounded-l-md text-center">
                                            <div class="text-gray-700 dark:text-gray-100 text-sm font-medium">
                                                @money(convertToNumber($p->amount), settings('currency')->code, true)
                                            </div>
                                        </td>

                                        {{-- Paid to you --}}
                                        <td class="px-5 py-3 first:ltr:rounded-l-md last:ltr:rounded-r-md first:rtl:rounded-r-md last:rtl:rounded-l-md text-center">
                                            <div class="text-gray-700 dark:text-gray-100 text-sm font-medium">
                                                @money(convertToNumber($p->amount) + convertToNumber($p->employer_commission), settings('currency')->code, true)
                                            </div>
                                        </td>

                                        {{-- Options --}}
                                        <td class="px-5 py-3 first:ltr:rounded-l-md last:ltr:rounded-r-md first:rtl:rounded-r-md last:rtl:rounded-l-md">
                                            <div class="static">
                                                <a class="btn-bordered" data-offset="8" data-lc-toggle="dropdown" data-popper-placement="bottom-end">
                                                    Actions
                                                </a>
                                                <div class="z-10 hidden w-48 px-3 py-4 bg-white border border-gray-200 rounded shadow-lg dark:bg-zinc-800">
                                                    {{-- Details --}}
                                                    <a wire:click="details('{{ $p->uid }}')" class="block text-sm py-2 px-3 rounded hover:bg-slate-100 cursor-pointer">
                                                        {{ __('Milestone details') }}
                                                    </a>

                                                    {{-- milestone files --}}
                                                    <a @click="selectMilestone(@js($p))" class="block text-sm py-2 px-3 rounded hover:bg-slate-100 cursor-pointer">
                                                        {{ __('Milestone files') }}
                                                    </a>

                                                    {{-- Pay --}}
                                                    @if ($p->status === 'request')
                                                        <a wire:click="confirmPay('{{ $p->uid }}')" class="block text-sm py-2 px-3 rounded hover:bg-slate-100 cursor-pointer">
                                                            {{ __('messages.t_deposit_funds') }}
                                                        </a>
                                                    @endif

                                                    {{-- Cancel --}}
                                                    @if ($p->status === 'request')
                                                        <a @click="selectedMilestonePay = '{{ $p->uid }}'" id="modal-decline-milestone-button-{{ $project->uid }}"
                                                            class="block text-sm py-2 px-3 rounded hover:bg-slate-100 cursor-pointer">
                                                            {{ __('Decline Request') }}
                                                        </a>
                                                    @endif

                                                    {{-- Release --}}
                                                    @if ($p->status === 'funded')
                                                        <a wire:click="confirmRelease('{{ $p->uid }}')" class="block text-sm py-2 px-3 rounded hover:bg-slate-100 cursor-pointer">
                                                            {{ __('Release funds') }}
                                                        </a>
                                                    @endif
                                                </div>
                                            </div>
                                        </td>

                                    </tr>

                                    @empty
                                        <tr>
                                            <td colspan="6"
                                                class="py-4.5 font-light text-sm text-gray-400 dark:text-zinc-200 text-center tracking-wide shadow-sm bg-white dark:bg-zinc-800 rounded-md">
                                                @lang('messages.t_no_milestone_payments_created_yet')
                                            </td>
                                        </tr>
                                    @endforelse
                                </thead>
                                @if ($payments->count())
                                    <tfoot>
                                        <tr class="bg-slate-200 dark:bg-zinc-600 intro-x rounded-md h-16">
                                            <th colspan="3" class="text-center py-3 px-5 first:ltr:rounded-l-md last:ltr:rounded-r-md first:rtl:rounded-r-md last:rtl:rounded-l-md">
                                            </th>
                                            <td
                                                class="text-center py-3 px-5 first:ltr:rounded-l-md last:ltr:rounded-r-md first:rtl:rounded-r-md last:rtl:rounded-l-md text-sm font-bold text-slate-600 dark:text-zinc-300">
                                                @money(convertToNumber($paid_amount) + convertToNumber($payments_in_progress), settings('currency')->code, true)
                                            </td>
                                            <td
                                                class="text-center py-3 px-5 first:ltr:rounded-l-md last:ltr:rounded-r-md first:rtl:rounded-r-md last:rtl:rounded-l-md text-sm font-bold text-slate-600 dark:text-zinc-300">
                                                @money(convertToNumber($paid_amount) + convertToNumber($payments_in_progress) + (convertToNumber(settings('projects')->commission_from_publisher) / 100) * (convertToNumber($paid_amount) + convertToNumber($payments_in_progress)), settings('currency')->code, true)
                                            </td>
                                            <td
                                                class="text-center py-3 px-5 first:ltr:rounded-l-md last:ltr:rounded-r-md first:rtl:rounded-r-md last:rtl:rounded-l-md text-sm font-bold text-slate-600 dark:text-zinc-300">
                                            </td>
                                        </tr>
                                    </tfoot>
                                @endif
                            </table>
                        </div>

                    </div>

                </div>

            </div>

        </div>



        {{-- ================================================ modals ================================================= --}}

        {{-- Awarded bid modal --}}
        <x-forms.modal id="modal-awarded-bid-container-{{ $project->uid }}" target="modal-awarded-bid-button-{{ $project->uid }}" uid="modal_awarded_bid_{{ $project->uid }}"
            placement="center-center" size="max-w-2xl">

            {{-- Modal heading --}}
            <x-slot name="title">{{ __('messages.t_awarded_bid') }}</x-slot>

            {{-- Modal content --}}
            <x-slot name="content">

                {{-- Bid --}}
                <div class="w-full relative">
                    <div class="relative">

                        {{-- Bid heading --}}
                        <div class="mb-8">

                            {{-- Freelancer profile --}}
                            <div class="flex items-center space-x-4 rtl:space-x-reverse">

                                {{-- Avatar --}}
                                <a href="{{ url('profile', $project->awarded_bid->user->username) }}" class="block">
                                    <img class="rounded-full h-12 w-12 object-cover object-center lazy" src="{{ placeholder_img() }}" data-src="{{ src($project->awarded_bid->user->avatar_id) }}"
                                        alt="{{ $project->awarded_bid->user->username }}">
                                </a>

                                {{-- User info --}}
                                <div class="space-y-0.5">

                                    <div class="flex items-center">

                                        {{-- User fullname --}}
                                        @if ($project->awarded_bid->user->fullname)
                                            <span class="font-medium text-zinc-900 text-sm hover:text-black dark:text-zinc-200 dark:hover:text-white ltr:pr-1 rtl:pl-1">
                                                {{ $project->awarded_bid->user->fullname }}
                                            </span>
                                        @endif

                                        {{-- Username --}}
                                        <a href="{{ url('profile', $project->awarded_bid->user->username) }}"
                                            class="font-medium text-gray-500 text-[13px] hover:text-primary-600 focus:text-primary-600 inline-flex items-center dark:text-zinc-400">
                                            <svg class="w-4 h-4" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10c1.466 0 2.961-.371 4.442-1.104l-.885-1.793C14.353 19.698 13.156 20 12 20c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8v1c0 .692-.313 2-1.5 2-1.396 0-1.494-1.819-1.5-2V8h-2v.025A4.954 4.954 0 0 0 12 7c-2.757 0-5 2.243-5 5s2.243 5 5 5c1.45 0 2.748-.631 3.662-1.621.524.89 1.408 1.621 2.838 1.621 2.273 0 3.5-2.061 3.5-4v-1c0-5.514-4.486-10-10-10zm0 13c-1.654 0-3-1.346-3-3s1.346-3 3-3 3 1.346 3 3-1.346 3-3 3z">
                                                </path>
                                            </svg>
                                            <span>{{ $project->awarded_bid->user->username }}</span>
                                        </a>

                                    </div>

                                    {{-- User details --}}
                                    <div class="flex items-center space-x-3 rtl:space-x-reverse text-[13px] dark:text-zinc-400">

                                        {{-- Country --}}
                                        @if ($project->awarded_bid->user->country)
                                            <p class="flex items-center space-x-1 rtl:space-x-reverse">
                                                <img class="h-4 ltr:pr-0.5 rtl:pl-0.5 -mt-0.5 lazy" src="{{ placeholder_img() }}"
                                                    data-src="{{ countryFlag($project->awarded_bid->user->country->code) }}" alt="{{ $project->awarded_bid->user->country->name }}">
                                                <span>{{ $project->awarded_bid->user->country->name }}</span>
                                            </p>

                                            <div class="mx-2 my-0.5 text-gray-300 dark:text-zinc-400">|</div>
                                        @endif

                                        {{-- Rating --}}
                                        <p class="flex shrink-0 items-center space-x-1 rtl:space-x-reverse">
                                            <svg aria-hidden="true" class="w-4 h-4 {{ $project->awarded_bid->user->rating() == 0 ? 'text-gray-400' : 'text-amber-500' }} -mt-0.5" fill="currentColor"
                                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                </path>
                                            </svg>
                                            <span>
                                                {{ $project->awarded_bid->user->rating() }}
                                            </span>
                                        </p>

                                        {{-- Verified account --}}
                                        @if ($project->awarded_bid->user->status === 'verified')
                                            <div class="mx-2 my-0.5 text-gray-300 dark:text-zinc-400">|</div>
                                            <div class="flex shrink-0 items-center space-x-1 rtl:space-x-reverse">
                                                <svg class="w-4 h-4 text-blue-500 -mt-0.5" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                                <span>@lang('messages.t_verified_account')</span>
                                            </div>
                                        @endif

                                    </div>

                                </div>

                            </div>

                        </div>

                        {{-- Bid body --}}
                        <p class="mb-2 font-light text-sm leading-relaxed text-gray-500 dark:text-gray-300">
                            {!! nl2br($project->awarded_bid->message) !!}
                        </p>

                    </div>
                </div>

            </x-slot>

            {{-- Footer --}}
            <x-slot name="footer">
                <div class="flex justify-between items-center w-full">
                    <div></div>
                    {{-- Cancel --}}
                    <button x-on:click="close" type="button"
                        class="inline-flex justify-center items-center space-x-2 rounded border font-semibold focus:outline-none px-3 py-2 leading-5 text-xs tracking-wide border-gray-300 bg-white text-gray-800 shadow-sm hover:text-gray-800 hover:bg-gray-100 hover:border-gray-300 hover:shadow focus:ring focus:ring-gray-500 focus:ring-opacity-25 active:bg-white active:border-white active:shadow-none dark:bg-zinc-800 dark:border-transparent dark:text-zinc-300 dark:hover:bg-zinc-700 dark:hover:text-gray-100">
                        @lang('messages.t_close')
                    </button>
                </div>
            </x-slot>

        </x-forms.modal>


        {{-- decline milestone dialog --}}
        <x-forms.modal id="modal-decline-milestone-container-{{ $project->uid }}" target="modal-decline-milestone-button-{{ $project->uid }}" uid="modal_decline_milestone_funds_{{ $project->uid }}"
            placement="center-center" size="max-w-md">

            {{-- Modal heading --}}
            <x-slot name="title">{{ __('Decline milestone request') }}</x-slot>

            {{-- Modal content --}}
            <x-slot name="content">
                <div class="grid grid-cols-1">
                    <div class="mb-4 sm:space-x-4 rtl:space-x-reverse sm:flex items-start sm:items-center">
                        <div class="mx-auto flex items-center self-start justify-center shrink-0 sm:items-start sm:mx-0">
                            <div class="bg-warning-100 rounded-full p-3 dark:bg-warning-700">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    class="w-10 h-10 text-yellow-500 dark:text-yellow-400 p-1 sm:w-6 sm:h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                                    </path>
                                </svg>
                            </div>
                        </div>

                        <div class="mt-4 w-full sm:mt-0">
                            <h3 class="text-lg leading-6 font-medium text-secondary-900 dark:text-gray-400 text-center sm:text-left sm:rtl:text-right">
                                <h1 class="text-base font-bold tracking-wide">Decline Milestone</h1>
                            </h3>

                            <p class="mt-2 text-sm text-secondary-500 dark:text-gray-500 text-center sm:text-left sm:rtl:text-right">
                                You are about to decline a milestone request doing this might result in freelancer not doing your work.
                            </p>
                        </div>
                    </div>
                    <div class="">
                        <label for="block text-sm text-secondary-500 dark:text-gray-500">Decline reason</label>
                        <textarea class="form-ctr" rows="3" x-model="declineReason" maxlength="160"></textarea>
                    </div>
                </div>
            </x-slot>

            {{-- Footer --}}
            <x-slot name="footer">
                <div class="flex justify-end items-center gap-x-3">

                    {{-- Cancel --}}
                    <button x-on:click="close" type="button"
                        class="inline-flex justify-center items-center space-x-2 rounded border font-semibold focus:outline-none px-3 py-2 leading-5 text-xs tracking-wide border-gray-300 bg-white text-gray-800 shadow-sm hover:text-gray-800 hover:bg-gray-100 hover:border-gray-300 hover:shadow focus:ring focus:ring-gray-500 focus:ring-opacity-25 active:bg-white active:border-white active:shadow-none">
                        @lang('messages.t_cancel')
                    </button>

                    {{-- Create --}}
                    <button type="button" @click="$wire.declineMilestone(selectedMilestonePay, declineReason)"  :disabled="declineReason.length <= 0" wire:loading.attr="disabled"
                        class="inline-flex justify-center items-center rounded border font-semibold focus:outline-none px-3 py-2 leading-5 text-xs tracking-wide border-transparent bg-yellow-400 text-white hover:bg-yellow-500 focus:ring focus:ring-primary-500 focus:ring-opacity-25 disabled:bg-gray-200 disabled:hover:bg-gray-200 disabled:text-gray-500 disabled:cursor-not-allowed">

                        {{-- Loading indicator --}}
                        <div wire:loading wire:target="declineMilestone">
                            <svg role="status" class="inline w-4 h-4 text-gray-700 animate-spin" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
                                    fill="#E5E7EB" />
                                <path
                                    d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
                                    fill="currentColor" />
                            </svg>
                        </div>

                        {{-- Button text --}}
                        <div wire:loading.remove wire:target="declineMilestone">
                            @lang('Decline')
                        </div>

                    </button>

                </div>
            </x-slot>

        </x-forms.modal>


        {{-- topup budget funds modal --}}
        <x-forms.modal id="modal-topup-budget-container-{{ $project->uid }}" target="modal-topup-budget-button-{{ $project->uid }}" uid="modal_topup_budget_funds_{{ $project->uid }}"
            placement="center-center" size="max-w-md">

            {{-- Modal heading --}}
            <x-slot name="title">{{ __('Topup budget funds') }}</x-slot>

            {{-- Modal content --}}
            <x-slot name="content">
                <div class="grid grid-cols-1 gap-y-6">
                    {{-- Amount --}}
                    <div>
                        <x-forms.text-input :label="__('messages.t_amount')" placeholder="100" model="topupAmount" :suffix="settings('currency')->code"
                            hint="{{ __('messages.t_available_balance') }} {{ money(convertToNumber(auth()->user()->balance_available), settings('currency')->code, true) }}" x-model="topupAmount"
                            hintclass="!text-orange-500" />
                    </div>
                </div>
            </x-slot>

            {{-- Footer --}}
            <x-slot name="footer">
                <div class="flex justify-between items-center w-full">

                    {{-- Cancel --}}
                    <button x-on:click="close" type="button"
                        class="inline-flex justify-center items-center space-x-2 rounded border font-semibold focus:outline-none px-3 py-2 leading-5 text-xs tracking-wide border-gray-300 bg-white text-gray-800 shadow-sm hover:text-gray-800 hover:bg-gray-100 hover:border-gray-300 hover:shadow focus:ring focus:ring-gray-500 focus:ring-opacity-25 active:bg-white active:border-white active:shadow-none">
                        @lang('messages.t_cancel')
                    </button>

                    {{-- Create --}}
                    <button type="button" wire:click="topupBudgetFunds" wire:loading.attr="disabled" :disabled="topupAmount <= 99"
                        class="inline-flex justify-center items-center rounded border font-semibold focus:outline-none px-3 py-2 leading-5 text-xs tracking-wide border-transparent bg-primary-500 text-white hover:bg-primary-600 focus:ring focus:ring-primary-500 focus:ring-opacity-25 disabled:bg-gray-200 disabled:hover:bg-gray-200 disabled:text-gray-500 disabled:cursor-not-allowed">

                        {{-- Loading indicator --}}
                        <div wire:loading wire:target="topupBudgetFunds">
                            <svg role="status" class="inline w-4 h-4 text-gray-700 animate-spin" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
                                    fill="#E5E7EB" />
                                <path
                                    d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
                                    fill="currentColor" />
                            </svg>
                        </div>

                        {{-- Button text --}}
                        <div wire:loading.remove wire:target="topupBudgetFunds">
                            @lang('deposit')
                        </div>

                    </button>

                </div>
            </x-slot>

        </x-forms.modal>


        {{-- increase project budget modal --}}
        <x-forms.modal id="modal-increase-budget-container-{{ $project->uid }}" target="modal-increase-budget-button-{{ $project->uid }}" uid="modal_increase_budget_funds_{{ $project->uid }}"
            placement="center-center" size="max-w-md">

            {{-- Modal heading --}}
            <x-slot name="title">{{ __('Increase budget funds') }}</x-slot>

            {{-- Modal content --}}
            <x-slot name="content">
                <div class="grid grid-cols-1 gap-y-6">
                    {{-- Amount --}}
                    <div>
                        <x-forms.text-input :label="__('messages.t_amount')" placeholder="100" model="increaseAmount" :suffix="settings('currency')->code" type="number"
                            hint="{{ __('messages.t_available_balance') }} {{ money(convertToNumber(auth()->user()->balance_available), settings('currency')->code, true) }}" x-model="increaseAmount"
                            hintclass="!text-orange-500" />
                    </div>
                </div>
            </x-slot>

            {{-- Footer --}}
            <x-slot name="footer">
                <div class="flex justify-between items-center w-full">

                    {{-- Cancel --}}
                    <button x-on:click="close" type="button"
                        class="inline-flex justify-center items-center space-x-2 rounded border font-semibold focus:outline-none px-3 py-2 leading-5 text-xs tracking-wide border-gray-300 bg-white text-gray-800 shadow-sm hover:text-gray-800 hover:bg-gray-100 hover:border-gray-300 hover:shadow focus:ring focus:ring-gray-500 focus:ring-opacity-25 active:bg-white active:border-white active:shadow-none">
                        @lang('messages.t_cancel')
                    </button>

                    {{-- Create --}}
                    <button type="button" wire:click="increaseBudgetFunds" wire:loading.attr="disabled" :disabled="increaseAmount <= 99"
                        class="inline-flex justify-center items-center rounded border font-semibold focus:outline-none px-3 py-2 leading-5 text-xs tracking-wide border-transparent bg-primary-500 text-white hover:bg-primary-600 focus:ring focus:ring-primary-500 focus:ring-opacity-25 disabled:bg-gray-200 disabled:hover:bg-gray-200 disabled:text-gray-500 disabled:cursor-not-allowed">

                        {{-- Loading indicator --}}
                        <div wire:loading wire:target="increaseBudgetFunds">
                            <svg role="status" class="inline w-4 h-4 text-gray-700 animate-spin" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
                                    fill="#E5E7EB" />
                                <path
                                    d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
                                    fill="currentColor" />
                            </svg>
                        </div>

                        {{-- Button text --}}
                        <div wire:loading.remove wire:target="increaseBudgetFunds">
                            @lang('deposit')
                        </div>

                    </button>

                </div>
            </x-slot>

        </x-forms.modal>



        {{-- Create milestone --}}
        @if (in_array($project->status, ['active', 'under_development', 'pending_final_review']))
            <x-forms.modal id="modal-create-milestone-container-{{ $project->uid }}" target="modal-create-milestone-button-{{ $project->uid }}" uid="modal_create_milestone_{{ $project->uid }}"
                placement="center-center" size="max-w-md">

                {{-- Modal heading --}}
                <x-slot name="title">{{ __('messages.t_create_milestone_payment') }}</x-slot>

                {{-- Modal content --}}
                <x-slot name="content">
                    <div class="grid grid-cols-1 gap-y-6">

                        {{-- Amount --}}
                        <div>
                            <x-forms.text-input :label="__('messages.t_amount')" placeholder="0.00" model="milestone_amount" :suffix="settings('currency')->code"
                                hint="{{ __('messages.t_available_balance') }} {{ money(convertToNumber($project->budget_allocation), settings('currency')->code, true) }}"
                                hintclass="!text-orange-500" />
                        </div>

                        {{-- Description --}}
                        <div>
                            <x-forms.textarea :label="__('messages.t_description')" :placeholder="__('messages.t_enter_milestone_payment_description')" model="milestone_description" :rows="6"
                                svg_icon='<svg class="w-5 h-5 text-gray-400 dark:text-gray-300" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M19.045 7.401c.378-.378.586-.88.586-1.414s-.208-1.036-.586-1.414l-1.586-1.586c-.378-.378-.88-.586-1.414-.586s-1.036.208-1.413.585L4 13.585V18h4.413L19.045 7.401zm-3-3 1.587 1.585-1.59 1.584-1.586-1.585 1.589-1.584zM6 16v-1.585l7.04-7.018 1.586 1.586L7.587 16H6zm-2 4h16v2H4z"></path></svg>' />
                        </div>

                    </div>
                </x-slot>

                {{-- Footer --}}
                <x-slot name="footer">
                    <div class="flex justify-between items-center w-full">

                        {{-- Cancel --}}
                        <button x-on:click="close" type="button"
                            class="inline-flex justify-center items-center space-x-2 rounded border font-semibold focus:outline-none px-3 py-2 leading-5 text-xs tracking-wide border-gray-300 bg-white text-gray-800 shadow-sm hover:text-gray-800 hover:bg-gray-100 hover:border-gray-300 hover:shadow focus:ring focus:ring-gray-500 focus:ring-opacity-25 active:bg-white active:border-white active:shadow-none">
                            @lang('messages.t_cancel')
                        </button>

                        {{-- Create --}}
                        <button type="button" wire:click="confirmCreate" wire:loading.attr="disabled"
                            class="inline-flex justify-center items-center rounded border font-semibold focus:outline-none px-3 py-2 leading-5 text-xs tracking-wide border-transparent bg-primary-500 text-white hover:bg-primary-600 focus:ring focus:ring-primary-500 focus:ring-opacity-25 disabled:bg-gray-200 disabled:hover:bg-gray-200 disabled:text-gray-500 disabled:cursor-not-allowed">

                            {{-- Loading indicator --}}
                            <div wire:loading wire:target="confirmCreate">
                                <svg role="status" class="inline w-4 h-4 text-gray-700 animate-spin" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
                                        fill="#E5E7EB" />
                                    <path
                                        d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
                                        fill="currentColor" />
                                </svg>
                            </div>

                            {{-- Button text --}}
                            <div wire:loading.remove wire:target="confirmCreate">
                                @lang('messages.t_create')
                            </div>

                        </button>

                    </div>
                </x-slot>

            </x-forms.modal>
        @endif


        {{-- milestone attachment right modal --}}
        <x-forms.right-modal x-cloak>
            <x-slot name="title">
                <div class="capitalize dark:text-slate-400">Milestone</div>
                <x-forms.close-button action="closeModal"></x-forms.close-button>
            </x-slot>

            <div class="">
                <div class="border rounded overflow-hidden mt-2 mb-5">
                    <div class="grid grid-cols-3 items-center text-sm font-normal text-white bg-slate-700 py-3 px-3">
                        <h6>Status</h6>
                        <h6>Amount</h6>
                        <h6>To Pay</h6>
                    </div>
                    <div class="grid grid-cols-3 items-center text-sm font-normal py-4 px-3">
                        <h6>
                            <span class="px-2 py-1 rounded" :class="statusClass[`${milestone?.status}`]" x-text="milestone?.status"></span>
                        </h6>
                        <h6 x-text="milestone?.amount"></h6>
                        <h6 x-text="(Number(milestone?.amount ?? 0) + Number(milestone?.freelancer_commission ?? 0)).toFixed(2)"></h6>
                    </div>
                </div>

                <div class="flex items-center justify-between mb-3">
                    <div class="text-sm font-semibold">Files</div>
                    <button class="btn-purple rounded px-3 py-2" @click="showUploader = !showUploader">Send File</button>
                </div>

                {{-- attachment upload --}}
                <div x-show="showUploader" class="border-2 border-dashed rounded-md p-3 mb-4">
                    <form wire:submit.prevent>
                        <input type="file"
                            class="block w-full text-[13px] text-gray-900 bg-transparent border dark:text-gray-300 rounded-md cursor-pointer focus:outline-none dark:dark:border-zinc-500 border-gray-300 file:!bg-slate-100 file:!text-slate-500 file:hover:!bg-slate-200 dark:border-zinc-600 dark:bg-transparent dark:file:!bg-zinc-700 dark:file:!text-zinc-200"
                            accept="image/jpg,image/jpeg,image/png, .pdf, .docx" @change="attachment = $event.target.files[0]" required>

                        <button type="submit" wire:loading.attr="disabled" wire:target="sendFiles" @click="upload()" class="btn-purple rounded px-3 py-2 mt-4">Upload file</button>
                    </form>
                </div>

                {{-- list of attachments --}}
                <template x-if="milestone?.attachments?.length > 0">
                    <ul class="text-sm font-medium overflow-hidden text-gray-900 bg-white border border-gray-200 rounded-md dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                        <template x-for="(file, key) in milestone?.attachments ?? []">
                            <li class="border-b last:border-b-0 border-gray-200 w-full px-3 py-3 dark:border-gray-600">
                                <div class="flex items-center gap-x-3">
                                    <img class="h-7 w-7 flex-shrink-0" src="/img/general/docs.svg" alt="">
                                    <div class="flex flex-col grow">
                                        <div class="text-sm font-medium dark:text-slate-400" x-text="file?.file_name"></div>
                                        <div class="text-xs text-gray-500 font-medium dark:text-slate-500 capitalize" x-text="`${file?.sent_by} - ${file?.updated_at}`"></div>
                                    </div>
                                    <a :href="`https://hustlebucket.s3.amazonaws.com/${file?.file}`" class="grid place-items-center border rounded shadown-md p-2" download="demo.pdf">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="current-color" class="text-black pointer-events-none" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M7.646 10.854a.5.5 0 0 0 .708 0l2-2a.5.5 0 0 0-.708-.708L8.5 9.293V5.5a.5.5 0 0 0-1 0v3.793L6.354 8.146a.5.5 0 1 0-.708.708l2 2z" />
                                            <path
                                                d="M4.406 3.342A5.53 5.53 0 0 1 8 2c2.69 0 4.923 2 5.166 4.579C14.758 6.804 16 8.137 16 9.773 16 11.569 14.502 13 12.687 13H3.781C1.708 13 0 11.366 0 9.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383zm.653.757c-.757.653-1.153 1.44-1.153 2.056v.448l-.445.049C2.064 6.805 1 7.952 1 9.318 1 10.785 2.23 12 3.781 12h8.906C13.98 12 15 10.988 15 9.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 4.825 10.328 3 8 3a4.53 4.53 0 0 0-2.941 1.1z" />
                                        </svg>
                                    </a>
                                </div>
                            </li>
                        </template>
                    </ul>
                </template>

                <template x-if="milestone?.attachments?.length <= 0">
                    <div class="py-14 px-6 text-center text-sm sm:px-14">
                        <svg class="mx-auto h-12 w-12" stroke="currentColor" fill="currentColor" stroke-width="0" version="1" viewBox="0 0 48 48" enable-background="new 0 0 48 48"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill="#FFA000" d="M38,12H22l-4-4H8c-2.2,0-4,1.8-4,4v24c0,2.2,1.8,4,4,4h31c1.7,0,3-1.3,3-3V16C42,13.8,40.2,12,38,12z">
                            </path>
                            <path fill="#FFCA28" d="M42.2,18H15.3c-1.9,0-3.6,1.4-3.9,3.3L8,40h31.7c1.9,0,3.6-1.4,3.9-3.3l2.5-14C46.6,20.3,44.7,18,42.2,18z">
                            </path>
                        </svg>
                        <p class="mt-3 font-semibold text-gray-900 dark:text-zinc-300 text-[15px]">
                            Files is empty</p>
                        <p class="mt-2 text-gray-500 dark:text-zinc-400 max-w-md mx-auto">
                            click the button above to send files to freelancer</p>
                    </div>
                </template>

            </div>
        </x-forms.right-modal>

    </div>


    @push('scripts')
        <script>
            function AccountSingleMilestone() {
                return {
                    selectedMilestonePay: "",
                    topupAmount: '',
                    increaseAmount: '',
                    declineReason: '',

                    hidden: false,
                    milestone: {},
                    statusClass: {
                        "request": "bg-yellow-50 text-yellow-800 dark:bg-transparent dark:text-amber-400",
                        "decline": "bg-red-100 text-red-800 dark:bg-transparent dark:text-red-400",
                        "paid": "bg-green-50 text-green-800 dark:bg-transparent dark:text-green-400",
                        "funded": "bg-purple-50 text-purple-800 dark:bg-transparent dark:text-purple-400"
                    },
                    attachment: "",
                    attachmentName: "",
                    showUploader: false,

                    selectMilestone(milestone) {
                        this.hidden = true;
                        this.milestone = milestone
                    },

                    closeRightModal(event) {
                        if (event.target.classList.contains('modal-backdrop')) {
                            this.hidden = false
                        }
                    },

                    closeModal() {
                        this.hidden = false
                    },

                    upload() {
                        const reader = new FileReader();
                        reader.readAsDataURL(this.attachment);

                        reader.onload = () => {
                            console.log(reader?.result)
                            @this.sendFiles(reader.result, this.milestone.id, this.attachment.name)
                        };
                    },
                }
            }
            window.AccountSingleMilestone = AccountSingleMilestone()

            window.addEventListener('close-right-modal', event => {
                window.AccountSingleMilestone.hidden = false
            })
        </script>
        <script src="{{ mix('js/dropdown.js') }}"></script>
    @endpush
