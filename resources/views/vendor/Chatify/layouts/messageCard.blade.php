{{-- -------------------- The default card (white) -------------------- --}}
@if ($viewType == 'default')
    @if ($from_id != $to_id)
        <div class="message-card" data-id="{{ $id }}">
            <div class="flex flex-col justify-start ltr:ml-1.5 rtl:mr-1.5">

                @if ($quotation)
                    <div class="flex justify-start sm:max-w-[400px]" style="direction: ltr !important">
                        <div class="bg-gray-100 flex items-center flex-grow-0 sm:flex-grow border rounded-lg overflow-hidden gap-x-3 mb-5 relative" x-cloak>
                            <div class="bg-slate-800 text-xl text-white h-[70px] w-[70px] grid place-items-center">
                                {{ mb_substr($quotation->first_name, 0, 1) }}{{ mb_substr($quotation->last_name, 0, 1) }}
                            </div>
                            <div class="flex flex-col pr-5">
                                <div class="font-medium text-sm">Ref {{ $quotation->reference }}</div>
                                <div class="text-sm">@money($quotation->total + $quotation->total_tax, settings('currency')->code, true)</div>
                                <div class="">
                                    @if (!$quotation->paid)
                                        <span class="px-2.5 text-xs py-0.5 rounded bg-red-200 text-red-600">Unpaid</span>
                                    @endif

                                    @if ($quotation->paid)
                                        <span class="px-2.5 text-xs py-0.5 rounded bg-green-200 text-green-600">Paid</span>
                                    @endif
                                </div>
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
                    <div class="mt-2 w-fit bg-gray-200 dark:bg-zinc-700 rounded-md py-2 px-3" dir="{{ config()->get('direction') }}">
                        <div class="flex items-center justify-end space-x-5 rtl:space-x-reverse">

                            {{-- File icon --}}
                            <span class="fiv-sqo fiv-icon-{{ $attachment[3] }} text-4xl"></span>

                            {{-- File details --}}
                            <div class="flex flex-col justify-center">

                                {{-- File name --}}
                                <span class="text-[13px] font-semibold text-zinc-700 dark:text-slate-200 truncate max-w-xs">{{ $attachment[1] }}</span>

                                {{-- File footer --}}
                                <div class="flex items-center space-x-3 rtl:space-x-reverse text-xs text-zinc-500 dark:text-zinc-400 mt-1">

                                    {{-- File size --}}
                                    <span>{{ format_bytes($attachment[4]) }}</span>

                                    {{-- Download --}}
                                    <button type="button" onclick="downloadAttachement(this)" data-file="{{ $attachment[0] }}"
                                        class="text-blue-600 hover:underline disabled:text-gray-400 disabled:cursor-not-allowed disabled:pointer-events-none disabled:no-underline">@lang('messages.t_download')</button>

                                </div>

                            </div>

                        </div>
                    </div>
                @endif

                {{-- Message attachment (Image) --}}
                @if (@$attachment[2] == 'image')
                    <div class="image-file chat-image w-60 h-48" style="background-image: url('{{ Chatify::getAttachmentUrl($attachment[0]) }}')"></div>
                @endif

                {{-- Message date --}}
                <div class="!mt-1.5 text-xs text-gray-400 dark:text-zinc-300 font-medium message-time" dir="{{ config()->get('direction') }}" data-time="{{ $fullTime }}">
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

            @if ($quotation)
                <div class="flex justify-end sm:max-w-[400px]" style="direction: ltr !important">
                    <div class="bg-gray-100 flex items-center flex-grow-0 sm:flex-grow border rounded-lg overflow-hidden gap-x-3 mb-5 relative" x-cloak>
                        <div class="bg-slate-800 text-xl text-white h-[70px] w-[70px] grid place-items-center">
                            {{ mb_substr($quotation->first_name, 0, 1) }}{{ mb_substr($quotation->last_name, 0, 1) }}
                        </div>
                        <div class="flex flex-col pr-5">
                            <div class="font-medium text-sm">Ref {{ $quotation->reference }}</div>
                            <div class="text-sm">@money($quotation->total + $quotation->total_tax, settings('currency')->code, true)</div>
                            <div class="">
                                @if (!$quotation->paid)
                                    <span class="px-2.5 text-xs py-0.5 rounded bg-red-200 text-red-600">Unpaid</span>
                                @endif

                                @if ($quotation->paid)
                                    <span class="px-2.5 text-xs py-0.5 rounded bg-green-200 text-green-600">Paid</span>
                                @endif
                            </div>
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
                <div class="mt-2 w-fit bg-gray-200 dark:bg-zinc-700 rounded-md py-2 px-3" dir="{{ config()->get('direction') }}">
                    <div class="flex items-center justify-end space-x-5 rtl:space-x-reverse">

                        {{-- File icon --}}
                        <span class="fiv-sqo fiv-icon-{{ $attachment[3] }} text-4xl"></span>

                        {{-- File details --}}
                        <div class="flex flex-col justify-center">

                            {{-- File name --}}
                            <span class="text-[13px] font-semibold text-zinc-700 dark:text-slate-200 truncate max-w-xs">{{ $attachment[1] }}</span>

                            {{-- File footer --}}
                            <div class="flex items-center space-x-3 rtl:space-x-reverse text-xs text-zinc-500 dark:text-zinc-400 mt-1">

                                {{-- File size --}}
                                <span>{{ format_bytes($attachment[4]) }}</span>

                                {{-- Download --}}
                                <button type="button" onclick="downloadAttachement(this)" data-file="{{ $attachment[0] }}"
                                    class="text-blue-600 hover:underline disabled:text-gray-400 disabled:cursor-not-allowed disabled:pointer-events-none disabled:no-underline">@lang('messages.t_download')</button>

                            </div>

                        </div>

                    </div>
                </div>
            @endif

            {{-- Message attachment (Image) --}}
            @if (@$attachment[2] == 'image')
                <div class="image-file chat-image w-60 h-48" style="background-image: url('{{ Chatify::getAttachmentUrl($attachment[0]) }}')"></div>
            @endif

            {{-- Message footer --}}
            <div class="flex items-center justify-end space-x-3 rtl:space-x-reverse !mt-1.5" dir="{{ config()->get('direction') }}">

                {{-- Delete --}}
                @if (!$seen)
                    <button class="text-xs font-medium !text-red-500 chatify-hover-delete-btn" data-id="{{ $id }}">
                        @lang('messages.t_delete')
                    </button>
                @endif

                {{-- Date --}}
                <div class="text-xs text-gray-400 dark:text-zinc-300 font-medium message-time" data-time="{{ $fullTime }}">
                    {{ $time }}
                </div>

                {{-- Message's status --}}
                <div class="message-seen-status">
                    @if ($seen)
                        <svg class="text-blue-500 w-4.5 h-4.5 -mt-px message-is-seen" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <g>
                                <path fill="none" d="M0 0h24v24H0z"></path>
                                <path
                                    d="M11.602 13.76l1.412 1.412 8.466-8.466 1.414 1.414-9.88 9.88-6.364-6.364 1.414-1.414 2.125 2.125 1.413 1.412zm.002-2.828l4.952-4.953 1.41 1.41-4.952 4.953-1.41-1.41zm-2.827 5.655L7.364 18 1 11.636l1.414-1.414 1.413 1.413-.001.001 4.951 4.951z">
                                </path>
                            </g>
                        </svg>
                    @else
                        <svg class="text-gray-500 dark:text-zinc-300 w-4.5 h-4.5 -mt-px message-not-seen" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
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
