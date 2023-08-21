<div class="messenger-sendCard !mx-3 xs:!mx-5 !mb-3.5 xs:!mb-5" x-data="window.ieFgUjXUHsNGdOd" x-init="initialize">

    {{-- Emojis box --}}
    @if (settings('live_chat')->enable_emojis)
        <div id="emojis-box-container" style="display: none"></div>
    @endif

    <div x-show="selectedQuote.reference"
        class="bg-gray-100 flex items-center border rounded-lg overflow-hidden gap-x-3 mb-5 relative" x-cloak>
        <div class="bg-slate-800 text-xl text-white h-[70px] w-[70px] grid place-items-center"
            x-text="initials(`${selectedQuote?.first_name} ${selectedQuote?.last_name}`)"></div>
        <div class="flex flex-col">
            <div class="font-medium text-sm" x-text="`Ref: ${selectedQuote?.reference}`"></div>
            <div class="text-sm"
                x-text="currencyFormat(Number(selectedQuote?.total ?? 0) + Number(selectedQuote?.total_tax ?? 0))">
            </div>
            <div class="">
                <span :class="selectedQuote?.paid ? 'bg-green-200 text-green-600' : 'bg-red-200 text-red-600'"
                    class="px-2.5 text-xs py-0.5 rounded" x-text="selectedQuote?.paid ? 'Paid' : 'Unpaid'"></span>
            </div>
        </div>
        <span @click="removeQuote"
            class="absolute top-0 right-0 m-2 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm !p-1.5 inline-flex items-center dark:hover:bg-zinc-600 dark:hover:text-white">

            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                    clip-rule="evenodd"></path>
            </svg>
        </span>
    </div>

    {{-- Send message form --}}
    <form id="message-form" method="POST" :action="`{{ route('send.message') }}`" enctype="multipart/form-data"
        x-ref="messageForm" class="items-center">

        @csrf

        {{-- Emoji container --}}
        @if (settings('live_chat')->enable_emojis)
            <div id="emojis-box-trigger">
                <svg class="emoji-box-trigger-event action-svg w-5 h-5 !text-slate-400 hover:!text-slate-600 dark:!text-slate-200 dark:hover:!text-white focus:outline-none"
                    data-tooltip-target="chat-tooltip-btn-insert-emoji" stroke="currentColor" fill="none"
                    stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round"
                    xmlns="http://www.w3.org/2000/svg">
                    <circle cx="12" cy="12" r="10"></circle>
                    <path d="M8 14s1.5 2 4 2 4-2 4-2"></path>
                    <line x1="9" y1="9" x2="9.01" y2="9"></line>
                    <line x1="15" y1="9" x2="15.01" y2="9"></line>
                </svg>
            </div>
            <x-forms.tooltip id="chat-tooltip-btn-insert-emoji" :text="__('messages.t_insert_emoji')" />
        @endif

        {{-- Attach a file --}}
        @if (auth()->user()->account_type == 'buyer')
            <label id="attachment-file-btn">
                <svg class="action-svg w-5 h-5 !text-slate-400 hover:!text-slate-600 dark:!text-slate-200 dark:hover:!text-white focus:outline-none"
                    data-tooltip-target="chat-tooltip-btn-insert-file" stroke="currentColor" fill="none"
                    stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M21.44 11.05l-9.19 9.19a6 6 0 0 1-8.49-8.49l9.19-9.19a4 4 0 0 1 5.66 5.66l-9.2 9.19a2 2 0 0 1-2.83-2.83l8.49-8.48">
                    </path>
                </svg>
                <input disabled='disabled' type="file" class="upload-attachment" name="file"
                    accept=".{{ implode(', .', config('chatify.attachments.allowed_images')) }}, .{{ implode(', .', config('chatify.attachments.allowed_files')) }}" />
            </label>
            <x-forms.tooltip id="chat-tooltip-btn-insert-file" :text="__('messages.t_attach_a_file')" />
        @endif

        {{-- plus button to add actions --}}
        @if (auth()->user()->account_type == 'seller')
            <div class="static">
                <a class="flex items-center [&>*]:pointer-events-none" data-tooltip-target="ch-tooltip-actions"
                    data-offset="10" data-lc-toggle="dropdown" data-popper-placement="bottom-end">
                    <svg class="action-svg w-5 h-5 !text-slate-400 hover:!text-slate-600 dark:!text-slate-200 dark:hover:!text-white focus:outline-none"
                        xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-plus-square" viewBox="0 0 16 16">
                        <path
                            d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                        <path
                            d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                    </svg>
                    <x-forms.tooltip id="ch-tooltip-actions" text="Actions" />
                </a>
                <div
                    class="z-10 hidden w-48 px-1.5 py-4 bg-white border border-gray-200 rounded x-shadow dark:bg-zinc-800">
                    <ul class="text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefault">
                        {{-- quotation item --}}
                        <li>
                            <div @click="openRightModal()"
                                class="flex items-center p-0 rounded hover:bg-gray-100 dark:hover:bg-zinc-700">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor"
                                    class="action-svg w-54h-54!text-slate-400 hover:!text-slate-600 dark:!text-slate-200 dark:hover:!text-white focus:outline-none"
                                    viewBox="0 0 16 16">
                                    <path
                                        d="M1.92.506a.5.5 0 0 1 .434.14L3 1.293l.646-.647a.5.5 0 0 1 .708 0L5 1.293l.646-.647a.5.5 0 0 1 .708 0L7 1.293l.646-.647a.5.5 0 0 1 .708 0L9 1.293l.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .801.13l.5 1A.5.5 0 0 1 15 2v12a.5.5 0 0 1-.053.224l-.5 1a.5.5 0 0 1-.8.13L13 14.707l-.646.647a.5.5 0 0 1-.708 0L11 14.707l-.646.647a.5.5 0 0 1-.708 0L9 14.707l-.646.647a.5.5 0 0 1-.708 0L7 14.707l-.646.647a.5.5 0 0 1-.708 0L5 14.707l-.646.647a.5.5 0 0 1-.708 0L3 14.707l-.646.647a.5.5 0 0 1-.801-.13l-.5-1A.5.5 0 0 1 1 14V2a.5.5 0 0 1 .053-.224l.5-1a.5.5 0 0 1 .367-.27zm.217 1.338L2 2.118v11.764l.137.274.51-.51a.5.5 0 0 1 .707 0l.646.647.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.509.509.137-.274V2.118l-.137-.274-.51.51a.5.5 0 0 1-.707 0L12 1.707l-.646.647a.5.5 0 0 1-.708 0L10 1.707l-.646.647a.5.5 0 0 1-.708 0L8 1.707l-.646.647a.5.5 0 0 1-.708 0L6 1.707l-.646.647a.5.5 0 0 1-.708 0L4 1.707l-.646.647a.5.5 0 0 1-.708 0l-.509-.51z" />
                                    <path
                                        d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm8-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5z" />
                                </svg>
                                <span class="text-xs font-medium text-gray-700 dark:text-gray-300">Quotations</span>
                                <input type="text" class="hidden" :value="selectedQuote.id" name="quotation" />
                            </div>
                        </li>

                        {{-- custom offer --}}
                        <li>
                            <div class="flex items-center p-0 rounded hover:bg-gray-100 dark:hover:bg-zinc-700"
                                @click="offerHidden = !offerHidden">
                                <svg class="action-svg w-4 h-4 !text-slate-400 hover:!text-slate-600 dark:!text-slate-200 dark:hover:!text-white focus:outline-none"
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-bag-plus" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M8 7.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0v-1.5H6a.5.5 0 0 1 0-1h1.5V8a.5.5 0 0 1 .5-.5z" />
                                    <path
                                        d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                                </svg>
                                <span class="text-xs font-medium text-gray-700 dark:text-gray-300">Custom Offer</span>
                            </div>
                        </li>

                        {{-- file attachment --}}
                        <li>
                            <div class="flex items-center p-0 rounded hover:bg-gray-100 dark:hover:bg-zinc-700">
                                <label id="attachment-file-btn">
                                    <svg class="action-svg w-4 h-4 !text-slate-400 hover:!text-slate-600 dark:!text-slate-200 dark:hover:!text-white focus:outline-none"
                                        data-tooltip-target="chat-tooltip-btn-insert-file" stroke="currentColor"
                                        fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                                        stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M21.44 11.05l-9.19 9.19a6 6 0 0 1-8.49-8.49l9.19-9.19a4 4 0 0 1 5.66 5.66l-9.2 9.19a2 2 0 0 1-2.83-2.83l8.49-8.48">
                                        </path>
                                    </svg>
                                    <input disabled='disabled' type="file" class="upload-attachment"
                                        id="upload-attachment" name="file"
                                        accept=".{{ implode(', .', config('chatify.attachments.allowed_images')) }}, .{{ implode(', .', config('chatify.attachments.allowed_files')) }}" />
                                </label>
                                <label for="upload-attachment"
                                    class="text-xs font-medium text-gray-700 dark:text-gray-300"
                                    @click="document.body.click()">Attachment</label>
                                <x-forms.tooltip id="chat-tooltip-btn-insert-file" :text="__('messages.t_attach_a_file')" />
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        @endif

        {{-- Message content --}}
        <div class="w-full px-3 flex items-center justify-center">
            <textarea x-model="message" id="live-chat-message-textarea" readonly='readonly' name="message"
                class="m-send app-scroll dark:placeholder:text-zinc-400" placeholder="@lang('messages.t_type_ur_message_here')"></textarea>
        </div>

        {{-- Send --}}
        <button class="focus:outline-none" @click="handleButton($event)">
            <svg class="action-svg !h-5 !w-5 !text-primary-600 focus:outline-none rtl:-rotate-90 rtl:active:!-rotate-90"
                stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <g>
                    <path fill="none" d="M0 0h24v24H0z"></path>
                    <path
                        d="M1.946 9.315c-.522-.174-.527-.455.01-.634l19.087-6.362c.529-.176.832.12.684.638l-5.454 19.086c-.15.529-.455.547-.679.045L12 14l6-8-8 6-8.054-2.685z">
                    </path>
                </g>
            </svg>
        </button>
    </form>

    {{-- list of quotes modal --}}
    <x-forms.right-modal x-cloak bodyClass="bg-[#F3F4F6]">
        <x-slot name="title">
            <div class="">Quotation Details</div>
            <x-forms.close-button action="closeModal"></x-forms.close-button>
        </x-slot>

        <div class="min-h-screen">
            <div class="flex items-center gap-x-2 mb-5">
                <input type="search" class="form-ctr bg-white !py-3" placeholder="Find your quotes"
                    x-model="searchInput" @keyup.enter="findQuotes">
                <button
                    class="!bg-[#F5841B] !text-sm !rounded-md !text-white !py-3 !px-4 flex items-center disabled:!bg-gray-400"
                    :disabled="loading" @click="findQuotes">
                    <span x-show="!loading">Find</span>
                    <div x-show="loading">
                        <svg role="status" class="inline w-4 h-4 mx-2 text-gray-700 animate-spin"
                            viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
                                fill="#E5E7EB" />
                            <path
                                d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
                                fill="currentColor" />
                        </svg>
                    </div>
                </button>
            </div>

            <div class="flex justify-between items-center mb-2">
                <span class="text-sm">Recent Quotes</span>
                <a href="/seller/quotes/create" target="_blank"
                    class="!bg-[#1D46F5] !text-sm !rounded-md !text-white !py-2.5 !px-4">Create Quote</a>
            </div>

            <template x-for="quote in quotes" :key="quote.id">
                <div class="border bg-white rounded-md mt-2 mb-5" @click="selectedQuote = quote; hidden = !hidden">
                    <div class="flex items-center px-4 py-3.5">
                        <div
                            class="flex items-center text-white flex-shrink-0 justify-center h-10 w-10 rounded-lg bg-slate-700 mr-3">
                            <span x-text="initials(`${quote.first_name} ${quote.last_name}`)"></span>
                        </div>
                        <div class="text-sm font-medium">
                            <dt x-text="`${quote.first_name} ${quote.last_name}`">
                            </dt>
                            <dd class="text-blue-600" x-text="`Ref: ${quote.reference}`"></dd>
                        </div>
                    </div>
                    <div
                        class="grid grid-cols-3 items-center text-sm font-normal text-slate-700 bg-[#e9fcec] py-3 px-3">
                        <h6>Total Disc.</h6>
                        <h6>Total</h6>
                        <h6>Paid</h6>
                    </div>
                    <div class="grid grid-cols-3 items-center text-sm font-normal py-4 px-3">
                        <h6 x-text="currencyFormat(quote.total_discount)"></h6>
                        <h6 x-text="currencyFormat(quote.total)"></h6>
                        <h6 x-text="quote.paid ? 'Paid' : 'Unpaid'"></h6>
                    </div>
                </div>
            </template>

        </div>
    </x-forms.right-modal>

    {{-- offer creation modal --}}
    <x-forms.right-modal x-cloak toggleKey="offerHidden">
        <x-slot name="title">
            <button x-show="offerStep == 2" class="!bg-[#F5F9FB] !text-sm !rounded-md !text-gray-700 !py-2 !px-4"
                @click="offerStep = 1">Go back</button>
            <div x-show="offerStep == 1" class="">Create a Custom Offer</div>
            <x-forms.close-button action="closeModal"></x-forms.close-button>
        </x-slot>

        <div class="min-h-screen">
            <div x-show="offerStep == 1" class="grid grid-cols-1 gap-y-2">
                <div
                    class="flex items-start px-4 py-5 mb-5 mt-3 text-sm text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400">
                    <svg class="flex-shrink-0 inline w-6 h-6 mr-3" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                    </svg>
                    <span class="sr-only">Info</span>
                    <div>
                        <span class="font-medium">Offer Info</span> Select an existing service you want to create
                        custom
                        offer.
                    </div>
                </div>

                @foreach ($gigs as $gig)
                    <div class="flex items-center border border-[#d1f3d6] rounded-[7px] p-4 cursor-pointer hover:bg-slate-100/30"
                        @click="selectOffer(@js($gig))">
                        <div class="flex items-center gap-x-3 grow">
                            <div class="h-12 w-12">
                                <img class="w-full h-full rounded-md object-cover lazy" src="{{ placeholder_img() }}"
                                    data-src="{{ src($gig->image_thumb_id) }}" alt="{{ $gig->title }}">
                            </div>
                            <div class="flex flex-col text-sm">
                                <div
                                    class="font-medium whitespace-nowrap truncate max-w-[240px] text-gray-700 dark:text-white">
                                    {{ $gig->title }}
                                </div>
                                <div class="text-base font-bold text-gray-700 dark:text-gray-100">
                                    @money($gig->price, settings('currency')->code, true)
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            {{-- offer details form --}}
            <div x-show="offerStep == 2" class="-mt-2">
                <div
                    class="flex items-start px-4 py-5 mb-5 mt-3 text-sm text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400">
                    <svg class="flex-shrink-0 inline w-6 h-6 mr-3" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                    </svg>
                    <span class="sr-only">Info</span>
                    <div>
                        <span class="font-medium">Offer Info</span>
                        Check your offer details before submission as you can no longer edit an offer.
                    </div>
                </div>

                <div class="flex items-center border border-[#d1f3d6] rounded-t-[7px] p-4 mb-4">
                    <div class="flex items-center gap-x-3 grow">
                        <div class="h-12 w-12">
                            <img class="w-full h-full rounded-md object-cover lazy" src="{{ placeholder_img() }}"
                                :data-src="`https://dttc4kal57acd.cloudfront.net/${selectedOffer?.image_thumb_id}`"
                                alt=" ">
                        </div>
                        <div class="flex flex-col text-sm">
                            <div class="font-medium whitespace-nowrap truncate max-w-[240px] text-gray-700 dark:text-white"
                                x-text="selectedOffer?.title">
                            </div>
                            <div class="text-base font-bold text-gray-700 dark:text-gray-100"
                                x-text="currencyFormat(selectedOffer?.price ?? 0)">
                            </div>
                        </div>
                    </div>
                </div>

                <form class="!block" @submit.prevent="customMessage">
                    <div
                        class="text-sm font-medium text-gray-900 bg-gray-100 border border-gray-200 rounded dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                        <div
                            class="flex justify-between items-center py-2 px-3 border-b border-gray-200 dark:border-gray-600 last:border-b-0 p-4">
                            <span class="">Total offer amount</span>
                            <input type="number" class="form-ctr max-w-[100px] !py-2" min="10000" step="200"
                                placeholder="0.00" x-model="offerForm.offer_amount" required />
                        </div>
                        <div
                            class="flex justify-between items-center py-2 px-3 border-b border-gray-200 dark:border-gray-600 last:border-b-0 p-4">
                            <span class="">Delivery days</span>
                            <input type="number" class="form-ctr max-w-[100px] !py-2" min="1" max="30"
                                step="1" placeholder="0.00" x-model="offerForm.delivery_time" required />
                        </div>
                    </div>

                    <div class="mt-5">
                        <label for="description" class="block mb-2 text-sm dark:text-gray-100">Description</label>
                        <textarea id="description" class="form-ctr focus:!border-solid focus:!border" rows="3"
                            x-model="offerForm.description" required></textarea>
                    </div>

                    <div x-show="offerError.length > 0"
                        class="bg-yellow-50 ltr:border-l-4 rtl:border-r-4 border-yellow-400 py-3 px-4 my-4">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <svg class="h-5 w-5 text-yellow-400" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div class="ltr:ml-3 rtl:mr-3">
                                <p class="text-sm text-yellow-700" x-text="offerError"></p>
                            </div>
                        </div>
                    </div>

                    <div class="border-t my-3 pt-3 flex justify-end">
                        <button type="submit" :disabled="sendingOffer"
                            class="!bg-[#1D46F5] !text-sm !rounded-md !text-white !py-3 !px-4 flex items-center disabled:!bg-gray-400">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </x-forms.right-modal>

</div>

<style>
    .x-shadow {
        box-shadow: 0 12px 40px 8px rgba(140, 152, 164, 0.19) !important;
    }
</style>

<script>
    function ieFgUjXUHsNGdOd() {
        return {
            message: null,
            hidden: false,
            offerHidden: false,
            quoteId: null,
            notFound: false,
            loading: false,
            quotes: [],
            searchInput: "",
            selectedQuote: {
                reference: null,
            },
            offerStep: 1,
            selectedOffer: {},
            offerForm: {
                gig_id: "",
                description: "",
                offer_amount: 10000,
                delivery_time: 1
            },
            offerError: "",
            sendingOffer: false,

            openRightModal() {
                this.hidden = !this.hidden;

                if (this.quotes.length <= 0) {
                    this.findQuotes()
                }
            },

            closeModal(event) {
                if (event.target.classList.contains('modal-backdrop')) {
                    this.hidden = true
                    this.offerHidden = true
                }
            },

            closeButton() {
                this.hidden = true
                this.offerHidden = true
            },

            findQuotes() {
                this.notFound = false
                this.loading = true

                window.axios.post("{{ route('chatQuotes') }}", {
                    search: this.searchInput
                }).then(res => {
                    if (res.data?.length > 0) {
                        this.quotes = res.data
                        this.message = ""
                        this.hidden = true
                    }

                    this.loading = false
                }).catch((err) => {
                    this.notFound = true
                    this.loading = false
                })
            },

            removeQuote() {
                this.selectedQuote = {
                    reference: ""
                }
            },

            closeModal() {
                this.hidden = false
                this.offerHidden = false
            },

            closeRightModal(event) {
                if (event.target.classList.contains('modal-backdrop')) {
                    this.hidden = false
                    this.offerHidden = false
                }
            },

            initials(str) {
                return str.match(/(^\S\S?|\b\S)?/g)
                    .join("").match(/(^\S|\S$)?/g)
                    .join("").toUpperCase()
            },

            currencyFormat(amount) {
                return new Intl.NumberFormat('en-NG', {
                        style: 'currency',
                        currency: 'NGN'
                    })
                    .format(amount);
            },

            handleButton(event) {
                if (this.selectedQuote?.id) {
                    if (messageInput.val().length <= 0) {
                        messageInput.val('..')
                    }

                    this.removeQuote()
                    sendMessage()
                }
            },

            refresh() {
                messenger = 1;
                noMoreMessages = false;
                messagesLoading = false;

                fetchMessages(getMessengerId(), true);
            },

            selectOffer(gig) {
                this.selectedOffer = gig;
                this.offerStep = 2;
            },

            resetOffer() {
                this.offerForm = {
                    gig_id: "",
                    description: "",
                    offer_amount: 10000,
                    delivery_time: 1
                }

                this.offerStep = 1;
                this.offerHidden = false
            },

            // custom send Message
            customMessage() {
                this.offerForm.gig_id = this.selectedOffer.id;
                this.sendingOffer = true

                temporaryMsgId += 1;
                let tempID = `temp_${temporaryMsgId}`;
                const inputValue = $.trim(messageInput.val());
                if (this.offerForm) {
                    const formData = new FormData($("#message-form")[0]);
                    formData.append("id", getMessengerId());
                    formData.append("temporaryMsgId", tempID);
                    Object
                        .keys(this.offerForm)
                        .forEach(key => formData.append(`offer[${key}]`, this.offerForm[key]));

                    $.ajax({
                        url: $("#message-form").attr("action"),
                        method: "POST",
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        data: formData,
                        dataType: "JSON",
                        processData: false,
                        contentType: false,
                        beforeSend: () => {
                            // remove message hint
                            $(".messages").find(".message-hint").hide();

                            // append a temporary message card
                            messagesContainer
                                .find(".messages")
                                .append(sendTempMessageCard(inputValue, tempID));

                            // scroll to bottom
                            scrollToBottom(messagesContainer);

                        },
                        success: (data) => {
                            this.sendingOffer = false

                            if (data.error.status) {
                                // message card error status
                                // errorMessageCard(tempID);
                                console.error(data.error_msg);
                                this.offerError = data.error.message;
                            } else {
                                // update contact item
                                updateContactItem(getMessengerId());
                                // temporary message card
                                const tempMsgCardElement = messagesContainer.find(
                                    `.message-card[data-id=${data.tempID}]`
                                );
                                // add the message card coming from the server before the temp-card
                                tempMsgCardElement.before(data.message);
                                // then, remove the temporary message card
                                tempMsgCardElement.remove();
                                // scroll to bottom
                                scrollToBottom(messagesContainer);
                                // send contact item updates
                                sendContactItemUpdates(true);
                                this.resetOffer()
                            }
                        },
                        error: () => {
                            this.sendingOffer = false

                            // message card error status
                            errorMessageCard(tempID);
                            // error log
                            console.error(
                                "Failed sending the message! Please, check your server response."
                            );
                        },
                    });
                }

                return false;
            },

            // Initialize emojis box
            @if (settings('live_chat')->enable_emojis)
                emojis() {

                        // Access this
                        const _this = this;

                        // Get emoji box container
                        const emoji_container = $("#emojis-box-container");

                        // Set options
                        const options = {
                            set: 'twitter',
                            theme: "{{ current_theme() }}",
                            dynamicWidth: true,
                            previewPosition: 'none',
                            i18n: {
                                "rtl": {{ config()->get('direction') === 'rtl' ? 1 : 0 }},
                                "search": "{{ __('messages.t_search') }}",
                                "search_no_results_1": "{{ __('messages.t_oops') }}",
                                "search_no_results_2": "{{ __('messages.t_no_results_found') }}",
                                "pick": "{{ __('messages.t_pick_an_emoji') }}",
                                "add_custom": "Add custom emoji",
                                "categories": {
                                    "activity": "{{ __('messages.t_emojis_activity') }}",
                                    "custom": "{{ __('messages.t_emojis_custom') }}",
                                    "flags": "{{ __('messages.t_emojis_flags') }}",
                                    "foods": "{{ __('messages.t_emojis_food_drink') }}",
                                    "frequent": "{{ __('messages.t_emojis_recently_used') }}",
                                    "nature": "{{ __('messages.t_emojis_animals_nature') }}",
                                    "objects": "{{ __('messages.t_emojis_objects') }}",
                                    "people": "{{ __('messages.t_emojis_smileys') }}",
                                    "places": "{{ __('messages.t_emojis_travel') }}",
                                    "search": "{{ __('messages.t_search_results') }}",
                                    "symbols": "{{ __('messages.t_emojis_symbols') }}"
                                },
                                "skins": {
                                    "choose": "{{ __('messages.t_choose_default_skin_tone') }}",
                                    "1": "{{ __('messages.t_skin_default') }}",
                                    "2": "{{ __('messages.t_skin_light') }}",
                                    "3": "{{ __('messages.t_skin_medium_light') }}",
                                    "4": "{{ __('messages.t_skin_medium') }}",
                                    "5": "{{ __('messages.t_skin_medium_dark') }}",
                                    "6": "{{ __('messages.t_skin_dark') }}"
                                }
                            },
                            exceptEmojis: [
                                'relaxed',
                                'smiling_face_with_tear',
                                'face_with_open_eyes_and_hand_over_mouth',
                                'face_with_peeking_eye',
                                'saluting_face',
                                'dotted_line_face',
                                'face_in_clouds',
                                'face_exhaling',
                                'face_with_spiral_eyes',
                                'disguised_face',
                                'face_with_diagonal_mouth',
                                'face_holding_back_tears',
                                'rightwards_hand',
                                'leftwards_hand',
                                'palm_down_hand',
                                'palm_up_hand',
                                'pinched_fingers',
                                'hand_with_index_finger_and_thumb_crossed',
                                'index_pointing_at_the_viewer',
                                'heart_hands',
                                'anatomical_heart',
                                'lungs',
                                'biting_lip',
                                'man_with_beard',
                                'woman_with_beard',
                                'red_haired_person',
                                'curly_haired_person',
                                'white_haired_person',
                                'bald_person',
                                'health_worker',
                                'student',
                                'teacher',
                                'judge',
                                'farmer',
                                'cook',
                                'mechanic',
                                'factory_worker',
                                'office_worker',
                                'scientist',
                                'technologist',
                                'singer',
                                'artist',
                                'pilot',
                                'astronaut',
                                'firefighter',
                                'ninja',
                                'person_with_crown',
                                'man_in_tuxedo',
                                'woman_in_tuxedo',
                                'man_with_veil',
                                'woman_with_veil',
                                'pregnant_man',
                                'pregnant_person',
                                'woman_feeding_baby',
                                'man_feeding_baby',
                                'person_feeding_baby',
                                'mx_claus',
                                'troll',
                                'person_with_probing_cane',
                                'person_in_motorized_wheelchair',
                                'person_in_manual_wheelchair',
                                'people_hugging',
                                'heart_on_fire',
                                'mending_heart',
                                'black_cat',
                                'bison',
                                'mammoth',
                                'beaver',
                                'polar_bear',
                                'dodo',
                                'feather',
                                'seal',
                                'coral',
                                'beetle',
                                'cockroach',
                                'fly',
                                'worm',
                                'lotus',
                                'potted_plant',
                                'empty_nest',
                                'nest_with_eggs',
                                'blueberries',
                                'olive',
                                'bell_pepper',
                                'beans',
                                'flatbread',
                                'tamale',
                                'fondue',
                                'teapot',
                                'pouring_liquid',
                                'bubble_tea',
                                'jar',
                                'magic_wand',
                                'hamsa',
                                'pinata',
                                'mirror_ball',
                                'nesting_dolls',
                                'sewing_needle',
                                'knot',
                                'rock',
                                'wood',
                                'hut',
                                'playground_slide',
                                'pickup_truck',
                                'roller_skate',
                                'wheel',
                                'ring_buoy',
                                'thong_sandal',
                                'military_helmet',
                                'accordion',
                                'long_drum',
                                'low_battery',
                                'coin',
                                'boomerang',
                                'carpentry_saw',
                                'screwdriver',
                                'hook',
                                'ladder',
                                'crutch',
                                'x-ray',
                                'elevator',
                                'mirror',
                                'window',
                                'plunger',
                                'mouse_trap',
                                'bucket',
                                'bubbles',
                                'toothbrush',
                                'headstone',
                                'placard',
                                'identification_card',
                                'heavy_equals_sign',
                                'transgender_flag'
                            ],
                            onClickOutside(e) {

                                // Get target
                                const target = e.target || e.srcElement;

                                // Check if clicked on emoji button
                                if (target.classList.contains('emoji-box-trigger-event')) {

                                    // Toggle hidden class
                                    emoji_container.toggle();

                                } else {

                                    // Hide the box
                                    emoji_container.hide();

                                }

                            },
                            onEmojiSelect(selection) {

                                // Insert the emoji
                                _this.message = _this.message + " " + selection.native;

                                // Now focus on the textarea
                                document.getElementById('live-chat-message-textarea').focus();

                            }
                        };

                        // Set new picker
                        const picker = new EmojiMart.Picker(options);

                        // Insert html code
                        document.getElementById('emojis-box-container').appendChild(picker)

                    },
            @endif

            // Initialize
            initialize() {
                @if (settings('live_chat')->enable_emojis)

                    // Initialize emojis
                    this.emojis();

                    // Listen to open/close emoji box
                    document.getElementById('emojis-box-trigger').addEventListener('click', function() {
                        $('#emojis-box-container').toggleClass('hidden');
                    }, false);
                @endif

                // Disable Enter button in message box
                $("#live-chat-message-textarea").keydown(function(e) {
                    if (e.keyCode == 13 && !e.shiftKey) {
                        e.preventDefault();
                        return false;
                    }
                });

            }

        }
    }
    window.ieFgUjXUHsNGdOd = ieFgUjXUHsNGdOd();
</script>
