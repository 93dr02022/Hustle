<div class="w-full" x-data="window.SellerDashboardQuotesPage">

    {{-- Loading --}}
    <x-forms.loading />

    {{-- Heading --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-12 mb-10">
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
                <div class="mt-5 flex justify-between lg:mt-0 lg:ltr::ml-4 lg:rtl:mr-4">
                    {{-- Create Quotes --}}
                    <span class="sm:ltr:ml-3 sm:rtl:mr-3">
                        <a href="{{ url('seller/quotes/create') }}"
                            class="inline-flex items-center rounded border border-transparent bg-primary-600 px-4 py-2.5 text-[13px] font-semibold text-white shadow-sm hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2">
                            @lang('messages.t_create_quote')
                        </a>
                    </span>

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
                            <th>Name</th>
                            <th>Reference</th>
                            <th>Total dis.</th>
                            <th>Total</th>
                            <th>Expires At</th>
                            <th>Paid</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($quotations as $quote)
                            <tr class="tbody-tr">
                                <td>{{ $quote->first_name }} {{ $quote->last_name }}</td>
                                <td>{{ $quote->reference }}</td>
                                <td>{{ $quote->total_discount}}</td>
                                <td>{{ $quote->total }}</td>
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
                                    <x-dropdown>                                     
                                        <x-dropdown.item @click="viewQuote({{ $quote->toJson() }})" class="mx-2 my-2" label="View Quotation" />
                                    </x-dropdown>
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
                <div class="bg-gray-100 px-4 py-5 sm:px-6 rounded-bl-lg rounded-br-lg flex justify-center border-t-0 border-r border-l border-b">
                    {!! $quotations->links('pagination::tailwind') !!}
                </div>
            @endif
        </div>
    </div>

    {{-- seleted modal quoations items --}}
    <x-forms.right-modal>
        <x-slot name="title">
            <div class="">Quotation information</div>
        </x-slot>

        <div class="">
            <div class="border rounded mt-2 mb-5">
                <div class="flex items-center px-4 py-3.5">
                   <div class="flex items-center flex-shrink-0 justify-center h-8 w-8 rounded-full bg-black mr-3">
                      <i class="icon-park w-4 h-4 text-white"></i>
                   </div>
                   <div class="text-sm font-medium" x-text="`${selectedQuote.quote.first_name} ${selectedQuote.quote.last_name}`"></div>
                </div>
                <div class="grid grid-cols-3 items-center text-sm font-normal text-white bg-black py-3 px-3">
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
                <div class="border rounded py-4 px-3 grid grid-cols-3 gap-y-2 gap-x-3 sm:gap-x-5">
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
    
</div>

@push('scripts')
    <script>
        function SellerDashboardQuotesPage() {
            return {
                form: {
                    demo: "this is a demo content"
                },

                hidden: false,
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

                closeRightModal(event) {
                    if (event.target.classList.contains('modal-backdrop')) {
                        this.hidden = false
                    }
                }
            }
        }
        window.SellerDashboardQuotesPage = SellerDashboardQuotesPage()
    </script>
@endpush
