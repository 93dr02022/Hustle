<div class="w-full">

    {{-- Success --}}
    @if (session()->has('success'))
        <div class="w-full mb-8">
            <div class="p-4 rounded-md bg-green-50">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <svg class="w-5 h-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                            fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="ltr:ml-3 rtl:mr-3">
                        <p class="text-sm font-medium text-green-800">{{ session()->get('success') }}</p>
                    </div>
                </div>
            </div>

        </div>
    @endif

     {{-- quotations list table --}}
     <div class="mx-auto space-y-2 max-w-7xl">
        <div>
            <div
                class="mt-8 overflow-x-auto overflow-y-hidden sm:mt-0 scrollbar-thin scrollbar-thumb-gray-300 scrollbar-track-gray-100 dark:scrollbar-thumb-zinc-800 dark:scrollbar-track-zinc-600">
                <table class="w-full text-left border-spacing-y-[10px] border-separate sm:mt-2">
                    <thead class="">
                        <tr class="thead-tr">
                            <th>Recipient</th>
                            <th>Reference</th>
                            <th>Seller</th>
                            <th>Total dis.</th>
                            <th>Total</th>
                            <th>Expires At</th>
                            <th>Paid</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($quotations as $quote)
                            <tr class="cursor-pointer tbody-tr">
                                <td class="text-blue-500">
                                    <a href="/dashboard/quotes/{{ $quote->reference }}/details">{{ $quote->first_name }} {{ $quote->last_name }}</a>
                                </td>
                                <td>{{ $quote->reference }}</td>
                                <td>{{ $quote->owner_first_name }} {{ $quote->owner_last_name }}</td>
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
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5"
                                    class="py-3 text-sm font-light tracking-wide text-center text-gray-400 bg-white rounded-md shadow-sm dark:text-zinc-200 dark:bg-zinc-800">
                                    @lang('messages.no_results_found')
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            {{-- Pagination --}}
            @if ($quotations->hasPages())
                <div class="flex justify-center px-4 py-5 bg-gray-100 border-t-0 border-b border-l border-r rounded-bl-lg rounded-br-lg sm:px-6">
                    {!! $quotations->links('pagination::tailwind') !!}
                </div>
            @endif
        </div>
    </div>
</div>