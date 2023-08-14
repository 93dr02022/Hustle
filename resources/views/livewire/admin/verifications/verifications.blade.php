<div class="w-full">

    {{-- Section title --}}
    <div class="px-4 md:px-3 py-4 md:py-5 bg-white border !border-b-0 dark:bg-gray-700 rounded-tl-lg rounded-tr-lg">
        <div class="sm:flex items-center justify-between">
            <p class="text-sm font-bold leading-wide text-gray-800">
                {{ __('messages.t_verification_center') }}
            </p>
        </div>
    </div>

    {{-- Section content --}}
    <div class="bg-white dark:bg-zinc-800 overflow-y-auto border !border-t-0 !border-b-0 dark:border-zinc-600">
        <table class="w-full whitespace-nowrap old-tables">
            <thead class="bg-gray-200">
                <tr tabindex="0"
                    class="focus:outline-none h-16 w-full text-sm leading-none text-gray-800 dark:text-white ">
                    <th
                        class="font-bold text-[10px] text-slate-500 dark:text-gray-300 uppercase tracking-wider ltr:text-left ltr:pl-4 rtl:text-right rtl:pr-4">
                        {{ __('messages.t_user') }}</th>
                    <th
                        class="font-bold text-[10px] text-slate-500 dark:text-gray-300 uppercase tracking-wider text-center">
                        {{ __('messages.t_selfie_photo') }}</th>
                    <th
                        class="font-bold text-[10px] text-slate-500 dark:text-gray-300 uppercase tracking-wider text-center">
                        {{ __('PL Status') }}</th>

                    <th
                        class="font-bold text-[10px] text-slate-500 dark:text-gray-300 uppercase tracking-wider text-center">
                        {{ __('BN Status') }}</th>

                    <th
                        class="font-bold text-[10px] text-slate-500 dark:text-gray-300 uppercase tracking-wider text-center">
                        {{ __('Selfie Status') }}</th>

                    <th
                        class="font-bold text-[10px] text-slate-500 dark:text-gray-300 uppercase tracking-wider text-center">
                        {{ __('messages.t_options') }}</th>
                </tr>
            </thead>
            <tbody class="w-full">

                @foreach ($verifications as $v)
                    <tr class="focus:outline-none text-sm leading-none text-gray-800 bg-white dark:bg-zinc-600 hover:bg-gray-100 dark:hover:bg-zinc-700 border-b border-t border-gray-100 dark:border-zinc-700/40"
                        wire:key="verifications-{{ $v->id }}">

                        {{-- User --}}
                        <td class="ltr:pl-4 rtl:pr-4">
                            <a href="{{ url('profile', $v->user->username) }}" target="_blank"
                                class="flex items-center">
                                <div class="w-8 h-8">
                                    <img class="w-full h-full rounded object-cover lazy" src="{{ placeholder_img() }}"
                                        data-src="{{ src($v->user->avatar_id) }}" alt="{{ $v->user->username }}" />
                                </div>
                                <div class="ltr:pl-4 rtl:pr-4">
                                    <p class="font-medium text-xs">{{ $v->user->username }}</p>
                                    <p class="text-[11px] leading-3 text-gray-600 pt-1.5">{{ $v->user->email }}</p>
                                </div>
                            </a>
                        </td>

                        {{-- Selfie --}}
                        <td class="text-center">
                            <a href="{{ url('uploads/verifications/' . $v->uid . '/selfie/' . $v->file_selfie) }}"
                                target="_blank">
                                <img class="w-8 h-8 rounded object-cover mx-auto lazy" src="{{ placeholder_img() }}"
                                    data-src="{{ src($v->file_selfie) }}" />
                            </a>
                        </td>

                        {{-- Personal Status --}}
                        <td class="text-center">
                            @if ($v->has_personal)
                                <span class="px-4 py-1 text-xs rounded-2xl font-semibold text-blue-500 bg-blue-50">
                                    {{ __('messages.t_verified') }}
                                </span>
                            @endif
                            @if (!$v->has_personal)
                                <span class="px-4 py-1 text-xs rounded-2xl font-semibold text-amber-500 bg-amber-50">
                                    {{ __('messages.t_pending') }}
                                </span>
                            @endif
                        </td>                        

                        {{-- Business Status --}}
                        <td class="text-center">
                            @if ($v->business_verify_status == 'verified')
                                <span
                                    class="px-4 py-1 rounded-3xl text-xs tracking-wide font-medium bg-green-100 text-green-800">
                                    {{ __('Verified') }}
                                </span>
                            @endif
                            @if ($v->business_verify_status == 'pending')
                                <span
                                    class="px-4 py-1 rounded-3xl text-xs tracking-wide font-medium bg-yellow-100 text-yellow-800">
                                    {{ __('Pending') }}
                                </span>
                            @endif
                            @if ($v->business_verify_status == 'awaiting')
                                <span
                                    class="px-4 py-1 rounded-3xl text-xs tracking-wide font-medium bg-purple-100 text-purple-800">
                                    {{ __('Awaiting') }}
                                </span>
                            @endif
                            @if ($v->business_verify_status == 'declined')
                                <span
                                    class="px-4 py-1 rounded-3xl text-xs tracking-wide font-medium bg-red-100 text-red-800">
                                    {{ __('Declined') }}
                                </span>
                            @endif
                        </td>

                        {{-- Selfie Status --}}
                        <td class="text-center">
                            @if ($v->photo_status == 'verified')
                                <span
                                    class="px-4 py-1 rounded-3xl text-xs tracking-wide font-medium bg-green-100 text-green-800">
                                    {{ __('Verified') }}
                                </span>
                            @endif
                            @if ($v->photo_status == 'pending')
                                <span
                                    class="px-4 py-1 rounded-3xl text-xs tracking-wide font-medium bg-yellow-100 text-yellow-800">
                                    {{ __('Pending') }}
                                </span>
                            @endif
                            @if ($v->photo_status == 'awaiting')
                                <span
                                    class="px-4 py-1 rounded-3xl text-xs tracking-wide font-medium bg-purple-100 text-purple-800">
                                    {{ __('Awaiting') }}
                                </span>
                            @endif
                            @if ($v->photo_status == 'declined')
                                <span
                                    class="px-4 py-1 rounded-3xl text-xs tracking-wide font-medium bg-red-100 text-red-800">
                                    {{ __('Declined') }}
                                </span>
                            @endif
                        </td>

                        {{-- Options --}}
                        <td class="text-center">
                            <a href="verifications/{{ $v->uid }}/details" class="inline-flex items-center rounded border border-gray-300 bg-white px-4 py-2 text-[13px] font-semibold text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-primary-600 focus:ring-offset-2 dark:bg-zinc-800 dark:border-zinc-800 dark:text-zinc-100 dark:hover:bg-zinc-900 dark:focus:ring-offset-zinc-900 dark:focus:ring-zinc-900 whitespace-nowrap">
                            View</a>
                        </td>

                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>

    {{-- Pagination --}}
    @if ($verifications->hasPages())
        <div
            class="bg-gray-100 px-4 py-5 sm:px-6 rounded-bl-lg rounded-br-lg flex justify-center border-t-0 border-r border-l border-b">
            {!! $verifications->links('pagination::tailwind') !!}
        </div>
    @endif

</div>
