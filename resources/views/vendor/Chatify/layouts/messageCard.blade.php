{{-- -------------------- The default card (white) -------------------- --}}
@if ($viewType == 'default')
    @if ($from_id != $to_id)
        <div class="message-card" data-id="{{ $id }}">
            <div class="flex flex-col justify-start ltr:ml-1.5 rtl:mr-1.5">

                @if ($offerId)
                    <div class="bg-zinc-700 p-5 rounded">This is offer test</div>
                @endif

                @if ($quotationId)
                    <div x-data="{
                        quote: {},
                        quotationId: '{{ $quotationId }}',
                        openMain() {
                            globalQuote = this.quote;
                            mainIsHidden = !mainIsHidden
                        },
                        init() {
                            window.axios.post('{{ route('chatQuote') }}', {
                                    quoteId: this.quotationId
                                })
                                .then(res => {
                                    this.quote = res.data;
                                })
                                .catch(err => console.error(err));
                        }
                    }" class="flex justify-start sm:max-w-[320px]"
                        style="direction: ltr !important">
                        <div
                            class="flex flex-col w-full overflow-hidden bg-white border border-[#d1f3d6] rounded-[7px] mb-2 relative">
                            <div x-show="Object.keys(quote).length <= 0"
                                class="absolute inset-0 bg-gray-100/70 backdrop-blur-sm z-10"></div>
                            <div class="py-3 bg-[#D8F4DC]">
                                <div class="flex items-center px-4">
                                    <div class="flex items-center text-white flex-shrink-0 justify-center h-10 w-10 rounded-lg bg-slate-700 mr-3"
                                        x-text="nameInitials(`${quote?.first_name} ${quote.last_name}`)">
                                    </div>
                                    <div class="text-sm font-medium">
                                        <dt x-text="`${quote?.first_name} ${quote.last_name}`"></dt>
                                        <dd class="text-blue-600" x-text="`Ref: ${quote.reference}`"></dd>
                                    </div>
                                </div>
                            </div>
                            <div class="pt-5 pb-3 grid grid-cols-3 px-4">
                                <div class="text-sm text-black font-medium leading-loose">
                                    <dt class="text-sm font-semibold text-gray-400">
                                        Sub Total
                                    </dt>
                                    <dd class="mt-0.5 text-[13px] font-medium text-gray-900"
                                        x-text="moneyFormat(quote.total)">
                                    </dd>
                                </div>

                                <div class="text-sm text-black font-medium leading-loose">
                                    <dt class="text-sm font-semibold text-gray-400">
                                        Total Tax
                                    </dt>
                                    <dd class="mt-0.5 text-[13px] font-medium text-gray-900"
                                        x-text="moneyFormat(quote.total_tax)">
                                    </dd>
                                </div>

                                <div class="text-sm text-black font-medium leading-loose">
                                    <dt class="text-sm font-semibold text-gray-400">
                                        Grand Total
                                    </dt>
                                    <dd class="mt-0.5 text-[13px] font-medium text-gray-900"
                                        x-text="moneyFormat(Number(quote.total) + Number(quote.total_tax))">
                                    </dd>
                                </div>

                                <div class="col-span-3 text-[13px] text-gray-500 mt-2">
                                    Quotation is
                                    <span x-text="quote.paid ? 'Paid' : 'Unpaid'"
                                        :class="quote.paid ? 'text-green-500' : 'text-red-600'"></span>
                                </div>
                            </div>
                            <div class="border-t border-[#D8F4DC] bg-[#f9f9f9] py-3 px-3 flex items-center">
                                <div class="w-1/2 flex items-center gap-2 cursor-pointer" @click="openMain()">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="text-slate-500" viewBox="0 0 16 16">
                                        <path
                                            d="M1.92.506a.5.5 0 0 1 .434.14L3 1.293l.646-.647a.5.5 0 0 1 .708 0L5 1.293l.646-.647a.5.5 0 0 1 .708 0L7 1.293l.646-.647a.5.5 0 0 1 .708 0L9 1.293l.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .801.13l.5 1A.5.5 0 0 1 15 2v12a.5.5 0 0 1-.053.224l-.5 1a.5.5 0 0 1-.8.13L13 14.707l-.646.647a.5.5 0 0 1-.708 0L11 14.707l-.646.647a.5.5 0 0 1-.708 0L9 14.707l-.646.647a.5.5 0 0 1-.708 0L7 14.707l-.646.647a.5.5 0 0 1-.708 0L5 14.707l-.646.647a.5.5 0 0 1-.708 0L3 14.707l-.646.647a.5.5 0 0 1-.801-.13l-.5-1A.5.5 0 0 1 1 14V2a.5.5 0 0 1 .053-.224l.5-1a.5.5 0 0 1 .367-.27zm.217 1.338L2 2.118v11.764l.137.274.51-.51a.5.5 0 0 1 .707 0l.646.647.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.509.509.137-.274V2.118l-.137-.274-.51.51a.5.5 0 0 1-.707 0L12 1.707l-.646.647a.5.5 0 0 1-.708 0L10 1.707l-.646.647a.5.5 0 0 1-.708 0L8 1.707l-.646.647a.5.5 0 0 1-.708 0L6 1.707l-.646.647a.5.5 0 0 1-.708 0L4 1.707l-.646.647a.5.5 0 0 1-.708 0l-.509-.51z" />
                                        <path
                                            d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm8-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5z" />
                                    </svg>

                                    <span class="text-slate-500">View Quote</span>
                                </div>
                                <div class="bg-slate-300 h-5 w-[1px]"></div>
                                <a :href="`/quotations/${quote?.reference}/payment`" target="_blank"
                                    class="w-1/2 flex items-center gap-2 pl-3 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="text-slate-500" viewBox="0 0 16 16">
                                        <path
                                            d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v1h14V4a1 1 0 0 0-1-1H2zm13 4H1v5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V7z" />
                                        <path
                                            d="M2 10a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-1z" />
                                    </svg>

                                    <span class="text-slate-500">Payment</span>
                                </a>
                            </div>
                        </div>
                    </div>
                @endif


                {{-- Message content --}}
                @if ($message)
                    <div class="msg-card-content" title="{{ $fullTime }}">
                        {!! $message == null && $attachment != null && @$attachment[2] != 'file' ? $attachment[1] : nl2br($message) !!}
                    </div>
                @endif

                {{-- Message attachment (File) --}}
                @if (@$attachment[2] == 'file')
                    <div class="mt-2 w-fit bg-gray-200 dark:bg-zinc-700 rounded-md py-2 px-3"
                        dir="{{ config()->get('direction') }}">
                        <div class="flex items-center justify-end space-x-5 rtl:space-x-reverse">

                            {{-- File icon --}}
                            <span class="fiv-sqo fiv-icon-{{ $attachment[3] }} text-4xl"></span>

                            {{-- File details --}}
                            <div class="flex flex-col justify-center">

                                {{-- File name --}}
                                <span
                                    class="text-[13px] font-semibold text-zinc-700 dark:text-slate-200 truncate max-w-xs">{{ $attachment[1] }}</span>

                                {{-- File footer --}}
                                <div
                                    class="flex items-center space-x-3 rtl:space-x-reverse text-xs text-zinc-500 dark:text-zinc-400 mt-1">

                                    {{-- File size --}}
                                    <span>{{ format_bytes($attachment[4]) }}</span>

                                    {{-- Download --}}
                                    <button type="button" onclick="downloadAttachement(this)"
                                        data-file="{{ $attachment[0] }}"
                                        class="text-blue-600 hover:underline disabled:text-gray-400 disabled:cursor-not-allowed disabled:pointer-events-none disabled:no-underline">@lang('messages.t_download')</button>

                                </div>

                            </div>

                        </div>
                    </div>
                @endif

                {{-- Message attachment (Image) --}}
                @if (@$attachment[2] == 'image')
                    <div class="image-file chat-image w-60 h-48"
                        style="background-image: url('{{ Chatify::getAttachmentUrl($attachment[0]) }}')"></div>
                @endif

                {{-- Message date --}}
                <div class="!mt-1.5 text-xs text-gray-400 dark:text-zinc-300 font-medium message-time"
                    dir="{{ config()->get('direction') }}" data-time="{{ $fullTime }}">
                    {{ $time }}
                </div>

            </div>
        </div>
    @endif
@endif

{{-- -------------------- Sender card (owner) -------------------- --}}
@if ($viewType == 'sender')
    <div class="message-card mc-sender" data-id="{{ $id }}">
        <div class="flex flex-col justify-end ltr:ml-1.5 rtl:mr-1.5">

            @if ($offerId)
                <div x-data="{
                    offer: {},
                    offerId: '{{ $offerId }}',
                    openMain() {
                        globalQuote = this.quote;
                        mainIsHidden = !mainIsHidden
                    },
                    init() {
                        window.axios.post('{{ route('offerDetails') }}', {
                                offerId: this.offerId
                            })
                            .then(res => {
                                this.offer = res.data;
                            })
                            .catch(err => console.error(err));
                    }
                }" class="flex justify-end sm:max-w-[350px]"
                    style="direction: ltr !important">
                    <div class="flex flex-col w-full overflow-hidden bg-white border rounded-md mb-2 relative">
                        <div x-show="false" class="absolute inset-0 bg-gray-100/70 backdrop-blur-sm z-10"></div>

                        <div class="p-3 bg-[#f9f9f9] border-b min-h-[40px]" x-text="offer?.gig?.title"></div>

                        <div class="pt-3 pb-3 px-4 text-slate-600">
                            <div class="text-sm line-clamp-2 mb-2" x-text="offer?.description"></div>
                            <div class="flex items-center gap-x-2 mb-2.5">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                    fill="currentColor" class="text-slate-400" viewBox="0 0 16 16">
                                    <path
                                        d="M5.5 9.511c.076.954.83 1.697 2.182 1.785V12h.6v-.709c1.4-.098 2.218-.846 2.218-1.932 0-.987-.626-1.496-1.745-1.76l-.473-.112V5.57c.6.068.982.396 1.074.85h1.052c-.076-.919-.864-1.638-2.126-1.716V4h-.6v.719c-1.195.117-2.01.836-2.01 1.853 0 .9.606 1.472 1.613 1.707l.397.098v2.034c-.615-.093-1.022-.43-1.114-.9H5.5zm2.177-2.166c-.59-.137-.91-.416-.91-.836 0-.47.345-.822.915-.925v1.76h-.005zm.692 1.193c.717.166 1.048.435 1.048.91 0 .542-.412.914-1.135.982V8.518l.087.02z" />
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                    <path
                                        d="M8 13.5a5.5 5.5 0 1 1 0-11 5.5 5.5 0 0 1 0 11zm0 .5A6 6 0 1 0 8 2a6 6 0 0 0 0 12z" />
                                </svg>
                                <dt x-text="`Offer price: ${moneyFormat(offer.offer_amount)}`"></dt>
                            </div>
                            <div class="flex items-center gap-x-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17"
                                    fill="currentColor" class="text-slate-400" viewBox="0 0 16 16">
                                    <path
                                        d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                </svg>
                                <dt x-text="`${offer.delivery_time} days delivery`"></dt>
                            </div>
                        </div>
                        <div
                            class="border-t border-[#D8F4DC] bg-[#f9f9f9] py-2 px-3 flex items-center justify-end gap-x-2">
                            <button
                                class="!bg-[#F5841B] !text-xs !rounded !text-white !py-2.5 !px-2 disabled:!bg-gray-400">
                                Withdraw Offer
                            </button>
                        </div>
                    </div>

                </div>
            @endif

            @if ($quotationId)
                <div x-data="{
                    quote: {},
                    quotationId: '{{ $quotationId }}',
                    openMain() {
                        globalQuote = this.quote;
                        mainIsHidden = !mainIsHidden
                    },
                    init() {
                        window.axios.post('{{ route('chatQuote') }}', {
                                quoteId: this.quotationId
                            })
                            .then(res => {
                                this.quote = res.data;
                            })
                            .catch(err => console.error(err));
                    }
                }" class="flex justify-end sm:max-w-[320px]"
                    style="direction: ltr !important">
                    <div
                        class="flex flex-col w-full overflow-hidden bg-white border border-[#d1f3d6] rounded-[7px] mb-2 relative">
                        <div x-show="Object.keys(quote).length <= 0"
                            class="absolute inset-0 bg-gray-100/70 backdrop-blur-sm z-10"></div>
                        <div class="py-3 bg-[#D8F4DC]">
                            <div class="flex items-center px-4">
                                <div class="flex items-center text-white flex-shrink-0 justify-center h-10 w-10 rounded-lg bg-slate-700 mr-3"
                                    x-text="nameInitials(`${quote?.first_name} ${quote.last_name}`)">
                                </div>
                                <div class="text-sm font-medium">
                                    <dt x-text="`${quote?.first_name} ${quote.last_name}`"></dt>
                                    <dd class="text-blue-600" x-text="`Ref: ${quote.reference}`"></dd>
                                </div>
                            </div>
                        </div>
                        <div class="pt-5 pb-3 grid grid-cols-3 px-4">
                            <div class="text-sm text-black font-medium leading-loose">
                                <dt class="text-sm font-semibold text-gray-400">
                                    Sub Total
                                </dt>
                                <dd class="mt-0.5 text-[13px] font-medium text-gray-900"
                                    x-text="moneyFormat(quote.total)">
                                </dd>
                            </div>

                            <div class="text-sm text-black font-medium leading-loose">
                                <dt class="text-sm font-semibold text-gray-400">
                                    Total Tax
                                </dt>
                                <dd class="mt-0.5 text-[13px] font-medium text-gray-900"
                                    x-text="moneyFormat(quote.total_tax)">
                                </dd>
                            </div>

                            <div class="text-sm text-black font-medium leading-loose">
                                <dt class="text-sm font-semibold text-gray-400">
                                    Grand Total
                                </dt>
                                <dd class="mt-0.5 text-[13px] font-medium text-gray-900"
                                    x-text="moneyFormat(Number(quote.total) + Number(quote.total_tax))">
                                </dd>
                            </div>

                            <div class="col-span-3 text-[13px] text-gray-500 mt-2">
                                Quotation is
                                <span x-text="quote.paid ? 'Paid' : 'Unpaid'"
                                    :class="quote.paid ? 'text-green-500' : 'text-red-600'"></span>
                            </div>
                        </div>
                        <div class="border-t border-[#D8F4DC] bg-[#f9f9f9] py-3 px-3 flex items-center">
                            <div class="w-1/2 flex items-center gap-2 cursor-pointer" @click="openMain()">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="text-slate-500" viewBox="0 0 16 16">
                                    <path
                                        d="M1.92.506a.5.5 0 0 1 .434.14L3 1.293l.646-.647a.5.5 0 0 1 .708 0L5 1.293l.646-.647a.5.5 0 0 1 .708 0L7 1.293l.646-.647a.5.5 0 0 1 .708 0L9 1.293l.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .801.13l.5 1A.5.5 0 0 1 15 2v12a.5.5 0 0 1-.053.224l-.5 1a.5.5 0 0 1-.8.13L13 14.707l-.646.647a.5.5 0 0 1-.708 0L11 14.707l-.646.647a.5.5 0 0 1-.708 0L9 14.707l-.646.647a.5.5 0 0 1-.708 0L7 14.707l-.646.647a.5.5 0 0 1-.708 0L5 14.707l-.646.647a.5.5 0 0 1-.708 0L3 14.707l-.646.647a.5.5 0 0 1-.801-.13l-.5-1A.5.5 0 0 1 1 14V2a.5.5 0 0 1 .053-.224l.5-1a.5.5 0 0 1 .367-.27zm.217 1.338L2 2.118v11.764l.137.274.51-.51a.5.5 0 0 1 .707 0l.646.647.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.509.509.137-.274V2.118l-.137-.274-.51.51a.5.5 0 0 1-.707 0L12 1.707l-.646.647a.5.5 0 0 1-.708 0L10 1.707l-.646.647a.5.5 0 0 1-.708 0L8 1.707l-.646.647a.5.5 0 0 1-.708 0L6 1.707l-.646.647a.5.5 0 0 1-.708 0L4 1.707l-.646.647a.5.5 0 0 1-.708 0l-.509-.51z" />
                                    <path
                                        d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm8-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5z" />
                                </svg>

                                <span class="text-slate-500">View Quote</span>
                            </div>
                            <div class="bg-slate-300 h-5 w-[1px]"></div>
                            <a class="w-1/2 flex items-center gap-2 pl-3 cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="text-slate-500" viewBox="0 0 16 16">
                                    <path
                                        d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v1h14V4a1 1 0 0 0-1-1H2zm13 4H1v5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V7z" />
                                    <path
                                        d="M2 10a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-1z" />
                                </svg>

                                <span class="text-slate-500">Payment</span>
                            </a>
                        </div>
                    </div>
                </div>
            @endif

            {{-- Message content --}}
            @if ($message)
                <div class="msg-card-content" title="{{ $fullTime }}">
                    {!! $message == null && $attachment != null && @$attachment[2] != 'file' ? $attachment[1] : nl2br($message) !!}
                </div>
            @endif

            {{-- Message attachment (File) --}}
            @if (@$attachment[2] == 'file')
                <div class="mt-2 w-fit bg-gray-200 dark:bg-zinc-700 rounded-md py-2 px-3"
                    dir="{{ config()->get('direction') }}">
                    <div class="flex items-center justify-end space-x-5 rtl:space-x-reverse">

                        {{-- File icon --}}
                        <span class="fiv-sqo fiv-icon-{{ $attachment[3] }} text-4xl"></span>

                        {{-- File details --}}
                        <div class="flex flex-col justify-center">

                            {{-- File name --}}
                            <span
                                class="text-[13px] font-semibold text-zinc-700 dark:text-slate-200 truncate max-w-xs">{{ $attachment[1] }}</span>

                            {{-- File footer --}}
                            <div
                                class="flex items-center space-x-3 rtl:space-x-reverse text-xs text-zinc-500 dark:text-zinc-400 mt-1">

                                {{-- File size --}}
                                <span>{{ format_bytes($attachment[4]) }}</span>

                                {{-- Download --}}
                                <button type="button" onclick="downloadAttachement(this)"
                                    data-file="{{ $attachment[0] }}"
                                    class="text-blue-600 hover:underline disabled:text-gray-400 disabled:cursor-not-allowed disabled:pointer-events-none disabled:no-underline">@lang('messages.t_download')</button>

                            </div>

                        </div>

                    </div>
                </div>
            @endif

            {{-- Message attachment (Image) --}}
            @if (@$attachment[2] == 'image')
                <div class="image-file chat-image w-60 h-48"
                    style="background-image: url('{{ Chatify::getAttachmentUrl($attachment[0]) }}')"></div>
            @endif

            {{-- Message footer --}}
            <div class="flex items-center justify-end space-x-3 rtl:space-x-reverse !mt-1.5"
                dir="{{ config()->get('direction') }}">

                {{-- Delete --}}
                @if (!$seen)
                    <button class="text-xs font-medium !text-red-500 chatify-hover-delete-btn"
                        data-id="{{ $id }}">
                        @lang('messages.t_delete')
                    </button>
                @endif

                {{-- Date --}}
                <div class="text-xs text-gray-400 dark:text-zinc-300 font-medium message-time"
                    data-time="{{ $fullTime }}">
                    {{ $time }}
                </div>

                {{-- Message's status --}}
                <div class="message-seen-status">
                    @if ($seen)
                        <svg class="text-blue-500 w-4.5 h-4.5 -mt-px message-is-seen" stroke="currentColor"
                            fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <g>
                                <path fill="none" d="M0 0h24v24H0z"></path>
                                <path
                                    d="M11.602 13.76l1.412 1.412 8.466-8.466 1.414 1.414-9.88 9.88-6.364-6.364 1.414-1.414 2.125 2.125 1.413 1.412zm.002-2.828l4.952-4.953 1.41 1.41-4.952 4.953-1.41-1.41zm-2.827 5.655L7.364 18 1 11.636l1.414-1.414 1.413 1.413-.001.001 4.951 4.951z">
                                </path>
                            </g>
                        </svg>
                    @else
                        <svg class="text-gray-500 dark:text-zinc-300 w-4.5 h-4.5 -mt-px message-not-seen"
                            stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <g>
                                <path fill="none" d="M0 0h24v24H0z"></path>
                                <path
                                    d="M11.602 13.76l1.412 1.412 8.466-8.466 1.414 1.414-9.88 9.88-6.364-6.364 1.414-1.414 2.125 2.125 1.413 1.412zm.002-2.828l4.952-4.953 1.41 1.41-4.952 4.953-1.41-1.41zm-2.827 5.655L7.364 18 1 11.636l1.414-1.414 1.413 1.413-.001.001 4.951 4.951z">
                                </path>
                            </g>
                        </svg>
                    @endif
                </div>

            </div>

        </div>
    </div>
@endif
