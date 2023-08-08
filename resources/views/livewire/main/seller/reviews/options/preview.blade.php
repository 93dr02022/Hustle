<main class="w-full" x-data="window.lRtoYGzyUMsMBKk" x-init="initialize">
    {{-- Loading --}}
    <x-forms.loading />

    {{-- Heading --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-12 mb-16">
        <div class="mx-auto max-w-7xl">
            <div class="lg:flex lg:items-center lg:justify-between">

                <div class="min-w-0 flex-1">

                    {{-- Section heading --}}
                    <h2
                        class="text-lg font-bold leading-7 text-zinc-700 dark:text-gray-50 sm:truncate sm:text-xl sm:tracking-tight">
                        @lang('messages.t_reviews')
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
                            {{-- My Reviews --}}
                            <li aria-current="page">
                                <div class="flex items-center">
                                    <svg aria-hidden="true" class="w-4 h-4 text-gray-400 rtl:rotate-180"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <a href="{{ url('seller/reviews') }}"
                                        class="ltr:ml-1 rtl:mr-1 text-sm font-medium text-gray-700 hover:text-primary-600 md:ltr:ml-2 md:rtl:mr-2 dark:text-zinc-300 dark:hover:text-white">
                                        @lang('messages.t_reviews')
                                    </a>
                                </div>
                            </li>
                            {{-- Create reviews --}}
                            <li aria-current="page">
                                <div class="flex items-center">
                                    <svg aria-hidden="true" class="w-4 h-4 text-gray-400 rtl:rotate-180"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="mx-1 text-sm font-medium text-gray-400 md:mx-2 dark:text-zinc-400">
                                        @lang('messages.t_preview_review')
                                    </span>
                                </div>
                            </li>

                        </ol>
                    </div>

                </div>

                {{-- Actions --}}
                <div class="mt-5 flex lg:mt-0 lg:ltr::ml-4 lg:rtl:mr-4">

                    {{-- Switch to buying --}}
                    <span class="block">
                        <a href="{{ url('/') }}"
                            class="inline-flex items-center rounded-sm border border-gray-300 bg-white px-4 py-2 text-[13px] font-semibold text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-primary-600 focus:ring-offset-2 dark:bg-zinc-800 dark:border-zinc-800 dark:text-zinc-100 dark:hover:bg-zinc-900 dark:focus:ring-offset-zinc-900 dark:focus:ring-zinc-900">
                            @lang('messages.t_switch_to_buying')
                        </a>
                    </span>

                </div>

            </div>
        </div>
    </div>

    {{-- Section content --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-12">
        <div class="divide-y divide-gray-200 dark:divide-zinc-700 lg:col-span-9">

            {{-- Form --}}
            <div class="py-6 px-4 sm:p-6 lg:pb-8 h-[calc(100%-80px)]">

                {{-- Section header --}}
                <div class="mb-14">
                    <h2 class="text-base leading-6 font-bold text-gray-900 dark:text-gray-100">
                        {{ __('messages.t_preview_review') }}
                    </h2>
                    <p class="mt-1 text-sm text-gray-500 dark:text-gray-300">
                        {{ __('messages.t_here_is_how_ur_review_looks_like') }}
                    </p>
                </div>

                {{-- Section content --}}
                <div class="grid grid-cols-12 md:gap-x-8 gap-y-8 mb-6">

                    {{-- Review --}}
                    <div class="col-span-12 md:col-span-6">
                        <div
                            class="bg-white dark:bg-zinc-700 dark:border-zinc-600 relative block p-8 overflow-hidden border border-gray-100 rounded-lg mb-6">

                            <span
                                class="absolute inset-x-0 bottom-0 h-2  bg-gradient-to-r from-green-300 via-blue-500 to-purple-600"></span>

                                <div class="flex items-center">
                                    <img src="{{ placeholder_img() }}"
                                        data-src="{{ src($review->user->avatar_id) }}"
                                        alt="{{ $review->user->username }}" class="lazy h-8 w-8 rounded-full">
                                    <div class="ml-4 group">
                                        <a href="{{ url('profile', $review->user->username) }}" target="_blank"
                                            class="text-sm font-bold text-gray-900 dark:text-gray-100 flex items-center group-hover:text-primary-600 dark:group-hover:text-primary-600">
                                            {{ $review->user->username }}
                                            @if ($review->user->status === 'verified')
                                                <img data-tooltip-target="tooltip-account-verified-{{ $review->id }}"
                                                    class="ltr:ml-0.5 rtl:mr-0.5 h-4 w-4 -mt-0.5"
                                                    src="{{ url('img/auth/verified-badge.svg') }}"
                                                    alt="{{ __('messages.t_account_verified') }}">
                                                <div id="tooltip-account-verified-{{ $review->id }}"
                                                    role="tooltip"
                                                    class="inline-block absolute invisible z-10 py-2 px-3 text-xs font-medium text-white bg-gray-900 rounded-sm shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                                    {{ __('messages.t_account_verified') }}
                                                </div>
                                            @endif

                                            {{-- Country --}}
                                            @if ($review->user->country)
                                                <div class="ml-2">
                                                    <img src="{{ placeholder_img() }}"
                                                        data-src="{{ countryFlag($review->user->country?->code) }}"
                                                        alt="{{ $review->user->country?->name }}"
                                                        class="lazy h-3 -mt-px rounded-sm">
                                                </div>
                                            @endif

                                        </a>
                                        <div class="mt-1 flex items-start">
                                            <div>
                                                {!! render_star_rating($review->rating, '1rem', '1rem', '#d0d0d0') !!}
                                            </div>
                                            <div wire:ignore class="rating-item-container"
                                                data-rating-value="{{ $review->rating }}"></div>
                                            <span
                                                class="ltr:ml-2 rtl:mr-2 text-[11px] font-normal text-gray-400"><span
                                                    class="pr-2 text-gray-300">•</span>
                                                {{ format_date($review->created_at, 'ago') }}</span>
                                        </div>
                                    </div>
                                </div>
                                {{-- Message --}}
                                @if ($review->message)
                                    <div class="mt-4 space-y-6 text-sm italic text-gray-600 dark:text-gray-50">
                                        <p>{{ $review->message }}</p>
                                    </div>
                                @endif

                                @if ($review->repliedReview)
                                    <div class="mt-5 pl-5">
                                        <div class="flex items-center">
                                            <img src="{{ placeholder_img() }}"
                                                data-src="{{ src($review->repliedReview->user->avatar_id) }}"
                                                alt="{{ $review->repliedReview->user->username }}"
                                                class="lazy h-8 w-8 rounded-full">
                                            <div class="ml-4 group">
                                                <a href="{{ url('profile', $review->repliedReview->user->username) }}"
                                                    target="_blank"
                                                    class="text-sm font-bold text-gray-900 dark:text-gray-100 flex items-center group-hover:text-primary-600 dark:group-hover:text-primary-600">
                                                    {{ $review->repliedReview->user->username }}
                                                    @if ($review->repliedReview->user->status === 'verified')
                                                        <img data-tooltip-target="tooltip-account-verified-{{ $review->id }}"
                                                            class="ltr:ml-0.5 rtl:mr-0.5 h-4 w-4 -mt-0.5"
                                                            src="{{ url('img/auth/verified-badge.svg') }}"
                                                            alt="{{ __('messages.t_account_verified') }}">
                                                        <div id="tooltip-account-verified-{{ $review->repliedReview->id }}"
                                                            role="tooltip"
                                                            class="inline-block absolute invisible z-10 py-2 px-3 text-xs font-medium text-white bg-gray-900 rounded-sm shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                                            {{ __('messages.t_account_verified') }}
                                                        </div>
                                                    @endif

                                                    {{-- Country --}}
                                                    @if ($review->repliedReview->user->country)
                                                        <div class="ml-2">
                                                            <img src="{{ placeholder_img() }}"
                                                                data-src="{{ countryFlag($review->repliedReview->user->country?->code) }}"
                                                                alt="{{ $review->repliedReview->user->country?->name }}"
                                                                class="lazy h-3 -mt-px rounded-sm">
                                                        </div>
                                                    @endif

                                                </a>
                                                <div class="mt-1 flex items-start">
                                                    <div>
                                                        {!! render_star_rating($review->repliedReview->rating, '1rem', '1rem', '#d0d0d0') !!}
                                                    </div>
                                                    <div wire:ignore class="rating-item-container"
                                                        data-rating-value="{{ $review->repliedReview->rating }}">
                                                    </div>
                                                    <span
                                                        class="ltr:ml-2 rtl:mr-2 text-[11px] font-normal text-gray-400"><span
                                                            class="pr-2 text-gray-300">•</span>
                                                        {{ format_date($review->repliedReview->created_at, 'ago') }}</span>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- Message --}}
                                        @if ($review->repliedReview->message)
                                            <div
                                                class="mt-4 space-y-6 text-sm italic text-gray-600 dark:text-gray-50">
                                                <p>{{ $review->repliedReview->message }}</p>
                                            </div>
                                        @endif
                                        <div class="flex items-center justify-start">
                                            {{-- Edit review --}}
                                            <a href="{{ url('seller/reviews/edit/' . $review->repliedReview->uid) }}"
                                                class="text-gray-800 dark:text-gray-300 group flex items-center px-2 py-2 text-sm"
                                                role="menuitem" tabindex="-1" id="menu-item-0">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="ltr:mr-3 rtl:ml-3 h-5 w-5 text-gray-400 group-hover:text-gray-500 dark:text-gray-300"
                                                    fill="none" viewBox="0 0 24 24"
                                                    stroke="currentColor" stroke-width="2">
                                                    <path stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                </svg>
                                            </a>

                                            {{-- Delete --}}
                                            {{-- <button
                                                x-on:click="confirm('{{ __('messages.t_are_u_sure_u_want_to_delete_this_review') }}') ? $wire.delete('{{ $review->repliedReview->id }}') : ''"
                                                wire:loading.attr="disabled"
                                                wire:target="delete('{{ $review->repliedReview->id }}')"
                                                type="button"
                                                class="text-gray-800 dark:text-gray-300 dark:hover:text-gray-400 group flex items-center px-2 py-2 text-sm"
                                                role="menuitem" tabindex="-1"> --}}
                                                {{-- Loading indicator --}}
                                                {{-- <div wire:loading
                                                    wire:target="delete('{{ $review->repliedReview->id }}')">
                                                    <svg role="status"
                                                        class="ltr:mr-3 rtl:ml-3 inline w-5 h-5 text-gray-500 animate-spin"
                                                        viewBox="0 0 100 101" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
                                                            fill="#E5E7EB" />
                                                        <path
                                                            d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </div> --}}

                                                {{-- Icon --}}
                                                {{-- <div wire:loading.remove
                                                    wire:target="delete('{{ $review->id }}')">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        class="ltr:mr-3 rtl:ml-3 h-5 w-5 text-gray-400 group-hover:text-gray-500 dark:text-gray-300"
                                                        fill="none" viewBox="0 0 24 24"
                                                        stroke="currentColor" stroke-width="2">
                                                        <path stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                    </svg>
                                                </div> --}}

                                            </button>
                                        </div>
                                    </div>
                                @endif

                        </div>
                    </div>

                    {{-- Gig preview --}}
                    <div class="col-span-12 md:col-span-6">
                        <div
                            class="bg-white dark:bg-zinc-700 dark:border-zinc-600 relative block p-8 overflow-hidden border border-gray-100 rounded-lg mb-6">
                            <span
                                class="absolute inset-x-0 bottom-0 h-2  bg-gradient-to-r from-green-300 via-blue-500 to-purple-600"></span>

                            <div class="justify-between sm:flex">
                                <div>
                                    <a href="{{ url('service', $review->gig->slug) }}" target="_blank"
                                        class="text-sm font-bold text-gray-900 dark:text-gray-200 hover:text-primary-600 dark:hover:text-primary-600">
                                        {{ $review->gig->title }}
                                    </a>
                                </div>

                                <div class="flex-shrink-0 hidden ltr:ml-3 rtl:mr-3 sm:block">
                                    <img class="lazy object-cover w-16 h-16 rounded-lg shadow-sm"
                                        src="{{ placeholder_img() }}" data-src="{{ src($review->gig->thumbnail) }}"
                                        alt="{{ $review->gig->title }}" />
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>
</main>

@push('scripts')
    <script>
        function lRtoYGzyUMsMBKk() {
            return {

                initialize() {
                    window.rating({
                        target: "rating-item-container",
                        fill: "#5b5b5b",
                        background: "#cdcdcd"
                    });
                }

            }
        }
        window.lRtoYGzyUMsMBKk = lRtoYGzyUMsMBKk();
    </script>
@endpush
