<main class="w-full" x-data="window.lRtoYGzyUMsMBKk" x-init="initialize">
    <div class="px-4 sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-zinc-800 rounded-lg shadow overflow-hidden">
            <div
                class="divide-y divide-gray-200 dark:divide-zinc-700 lg:grid lg:grid-cols-12 lg:divide-y-0 lg:divide-x rtl:divide-x-reverse">

                {{-- Sidebar --}}
                <aside class="lg:col-span-3 py-6 hidden lg:block" wire:ignore>
                    <x-main.account.sidebar />
                </aside>

                {{-- Section content --}}
                <div class="divide-y divide-gray-200 dark:divide-zinc-700 lg:col-span-9">
{{-- Breadcrumbs --}}
<div class="my-1 p-5 ml-2 flex flex-col sm:flex-row sm:flex-wrap sm:space-x-6 rtl:space-x-reverse">
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
        {{-- My reviews --}}
        <li aria-current="page">
            <div class="flex items-center">
                <svg aria-hidden="true" class="h-4 w-4 text-gray-400 rtl:rotate-180" fill="currentColor"
                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                        clip-rule="evenodd"></path>
                </svg>
                <a href="{{ url('account/reviews') }}"
                    class="text-sm font-medium text-gray-700 hover:text-primary-600 ltr:ml-1 rtl:mr-1 dark:text-zinc-300 dark:hover:text-white md:ltr:ml-2 md:rtl:mr-2">
                    @lang('messages.t_reviews')
                </a>
            </div>
        </li>

        {{-- preview --}}
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
                                                src="{{ placeholder_img() }}"
                                                data-src="{{ src($review->gig->thumbnail) }}"
                                                alt="{{ $review->gig->title }}" />
                                        </div>
                                    </div>

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
