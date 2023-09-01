<div class="w-full">
    <div class="grid grid-cols-12">
        {{-- selected gigs for you --}}
        <div class="col-span-12">
            <div class="odd:bg-[#F2F2F2] w-full py-16">
                <div class="container px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                    {{-- Section title --}}
                    <div class="flex items-center justify-between py-2 mb-3.5 bg-transparent">
                        <div>
                            <span
                                class="block pb-1 text-xl font-extrabold tracking-wider uppercase text-[#1F2937] gig-title">
                                @lang('messages.t_selected_gigs_for_u')
                            </span>
                        </div>

                        <div>
                            <a href="{{ url('search') }}"
                                class="text-sm font-semibold text-primary-600 hover:text-primary-700">
                                {{ __('messages.t_view_more') }}

                                {{-- LTR arrow --}}
                                <svg xmlns="http://www.w3.org/2000/svg" class="hidden w-5 h-5 ltr:inline" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                                </svg>
                            </a>
                        </div>
                    </div>

                    {{-- List of gigs --}}
                    <div class="relative col-span-12">
                        <div class="swiper selected-gigs-swiper">
                            <div class="swiper-wrapper">
                                @foreach ($gigs as $gig)
                                    <div class="swiper-slide max-w-[230px] xs:max-w-[280px]">
                                        @livewire('main.cards.gig', ['gig' => $gig], key('gig-item-' . $gig->uid))
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div
                            class="!h-8 !-left-3 lg:!-left-6 xl:!-left-9 flex sm:!flex px-4 rounded-full shadow-lg after:!text-sm  bg-white swiper-button-prev for-you-prev">
                        </div>
                        <div
                            class="!h-8 !-right-3 lg:!-right-6 xl:!-right-9 flex sm:!flex px-4 rounded-full shadow-lg after:!text-sm bg-white swiper-button-next for-you-next">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Top sellers --}}
        @auth
            @if (count($sellers))
                <div class="col-span-12 bg-white">
                    <div class="w-full">
                        <div class="py-10 md:col-span-8">
                            
                            <div class="container px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                                <div class="flex items-center justify-between py-2 mb-3.5 bg-transparent">
                                    <div>
                                        <span
                                            class="block pb-1 text-xl font-extrabold tracking-wider text-[#1F2937] gig-title">
                                            Top <a href="/sellers" class="text-blue-600">Sellers</a>
                                        </span>
                                    </div>
                                </div>

                                {{-- sellers slider --}}
                                <div class="swiper sellers-swiper">
                                    <div class="swiper-wrapper">
                                        @foreach ($sellers as $seller)
                                            <div
                                                class="swiper-slide max-w-[220px] xs:max-w-[240px] flex flex-col text-center bg-white border divide-y divide-gray-200 rounded-md card-shadow-1 dark:bg-zinc-800 dark:divide-zinc-700">
                                                <div class="px-4 pt-5 pb-7">
                                                    {{-- Avatar --}}
                                                    <a href="{{ url('profile', $seller->username) }}" target="_blank"
                                                        class="relative inline-block">
                                                        <img class="object-cover w-16 h-16 rounded-full lazy"
                                                            src="{{ placeholder_img() }}"
                                                            data-src="{{ src($seller->avatar_id) }}"
                                                            alt="{{ $seller->username }}">
                                                        @if ($seller->isOnline() && !$seller->availability)
                                                            <span
                                                                class="absolute top-0.5 ltr:right-0.5 rtl:left-0.5 block h-3 w-3 rounded-full ring-2 ring-white dark:ring-zinc-800 bg-green-400"></span>
                                                        @elseif ($seller->availability)
                                                            <span
                                                                class="absolute top-0.5 ltr:right-0.5 rtl:left-0.5 block h-3 w-3 rounded-full ring-2 ring-white dark:ring-zinc-800 bg-gray-400"></span>
                                                        @else
                                                            <span
                                                                class="absolute top-0.5 ltr:right-0.5 rtl:left-0.5 block h-3 w-3 rounded-full ring-2 ring-white dark:ring-zinc-800 bg-red-400"></span>
                                                        @endif
                                                    </a>

                                                    {{-- Username --}}
                                                    <a href="{{ url('profile', $seller->username) }}" target="_blank"
                                                        class="flex items-center justify-center mt-4 text-sm font-bold tracking-wider text-gray-900 dark:text-gray-200">
                                                        {{ $seller->username }}
                                                        @if ($seller->status === 'verified')
                                                            <img data-tooltip-target="tooltip-account-verified-{{ $seller->id }}"
                                                                class="ltr:ml-0.5 rtl:mr-0.5 h-4 w-4 -mt-0.5"
                                                                src="{{ url('img/auth/verified-badge.svg') }}"
                                                                alt="{{ __('messages.t_account_verified') }}">
                                                            <div id="tooltip-account-verified-{{ $seller->id }}"
                                                                role="tooltip"
                                                                class="absolute z-10 invisible inline-block px-3 py-2 text-xs font-medium text-white bg-gray-900 rounded-sm shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                                                {{ __('messages.t_account_verified') }}
                                                            </div>
                                                        @endif
                                                    </a>

                                                    <dl class="flex flex-col justify-between flex-grow mt-1">
                                                        <dt class="sr-only">Level</dt>
                                                        <dd class="text-[11px] font-medium uppercase tracking-widest"
                                                            style="color:{{ $seller->level->level_color }}">
                                                            {{ $seller->level->title }}</dd>
                                                        <dt class="sr-only">Skills</dt>
                                                        <dd class="mt-5 space-x-1 rtl:space-x-reverse">

                                                            {{-- Rating --}}
                                                            <div class="flex items-center justify-center mb-5" wire:ignore>

                                                                {{-- Star --}}
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    class="w-5 h-5 text-amber-400" viewBox="0 0 20 20"
                                                                    fill="currentColor">
                                                                    <path
                                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                                </svg>

                                                                {{-- Rating --}}
                                                                @if ($seller->rating() == 0)
                                                                    <div
                                                                        class=" text-[13px] tracking-widest text-amber-500 ltr:ml-1 rtl:mr-1 font-black">
                                                                        {{ __('messages.t_n_a') }}</div>
                                                                @else
                                                                    <div
                                                                        class="text-sm font-black tracking-widest text-amber-500 ltr:ml-1 rtl:mr-1">
                                                                        {{ $seller->rating() }}</div>
                                                                @endif

                                                                {{-- Reviews --}}
                                                                <div
                                                                    class="ltr:ml-2 rtl:mr-2 text-[13px] font-normal text-gray-400 dark:text-gray-300">
                                                                    ({{ number_format($seller->reviews()->count()) }})
                                                                </div>

                                                            </div>

                                                            {{-- Skills --}}
                                                            @if ($seller->skills()->count())
                                                                <div class="h-5">
                                                                    @foreach ($seller->skills()->InRandomOrder()->limit(3)->get() as $skill)
                                                                        <span
                                                                            class="inline-flex mb-2 px-3 py-1.5 items-center text-gray-800 text-xs font-medium bg-gray-100 dark:bg-zinc-700 dark:text-zinc-300 rounded-full">
                                                                            {{ $skill->name }}
                                                                        </span>
                                                                    @endforeach
                                                                </div>
                                                            @else
                                                                <div class="h-5"></div>
                                                            @endif

                                                        </dd>
                                                    </dl>

                                                </div>

                                                {{-- Actions --}}
                                                <div>
                                                    <div
                                                        class="flex -mt-px bg-gray-100 divide-x divide-gray-200 rounded-b-lg rtl:divide-x-reverse dark:bg-zinc-700 dark:divide-zinc-700">

                                                        @auth
                                                            {{-- Contact me --}}
                                                            <div class="flex flex-1 w-0">
                                                                <a href="{{ url('messages/new', $seller->username) }}"
                                                                    class="relative inline-flex items-center justify-center flex-1 w-0 py-4 text-xs font-medium text-gray-700 border border-transparent rounded-bl-lg dark:text-zinc-300 dark:hover:text-zinc-100 hover:text-gray-500">
                                                                    <svg class="w-5 h-5 text-gray-400 dark:text-gray-300"
                                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                                        fill="currentColor" aria-hidden="true">
                                                                        <path
                                                                            d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                                                        <path
                                                                            d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                                                                    </svg>
                                                                    <span
                                                                        class="ml-2">{{ __('messages.t_contact_me') }}</span>
                                                                </a>
                                                            </div>
                                                        @endauth

                                                        @guest
                                                            {{-- View my profile --}}
                                                            <div class="flex flex-1 w-0">
                                                                <a href="{{ url('profile', $seller->username) }}"
                                                                    class="relative inline-flex items-center justify-center flex-1 w-0 py-4 text-xs font-medium text-gray-700 border border-transparent rounded-br-lg dark:text-zinc-300 dark:hover:text-zinc-100 hover:text-gray-500">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        class="w-5 h-5 text-gray-400 dark:text-gray-300"
                                                                        viewBox="0 0 20 20" fill="currentColor">
                                                                        <path fill-rule="evenodd"
                                                                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z"
                                                                            clip-rule="evenodd" />
                                                                    </svg>
                                                                    <span
                                                                        class="ml-2">{{ __('messages.t_view_profile') }}</span>
                                                                </a>
                                                            </div>
                                                        @endguest

                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        @endauth

        {{-- Random gigs --}}
        <div class="col-span-12 bg-[#FAFAFA]">
            @foreach ($randomCategories as $category)
                <div class="w-full mt-6 xl:mt-6 mb-16">
                    <div class="container grid grid-cols-1 gap-y-6 px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                        {{-- Section title --}}
                        <div class="flex items-center justify-between py-2 bg-transparent">
                            <div>
                                <span
                                    class="block pb-1 text-xl md:text-2xl font-extrabold tracking-wider text-gray-800 gig-title">
                                    {{ $category->name }}
                                </span>
                            </div>

                            <div>
                                <a href="{{ url('categories', $category->slug) }}"
                                    class="text-sm font-semibold text-primary-600 hover:text-primary-700">
                                    {{ __('messages.t_view_more') }}

                                    {{-- LTR arrow --}}
                                    <svg xmlns="http://www.w3.org/2000/svg" class="hidden w-5 h-5 ltr:inline"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M13 7l5 5m0 0l-5 5m5-5H6" />
                                    </svg>
                                </a>
                            </div>
                        </div>

                        {{-- List of gigs --}}
                        <div class="grid grid-cols-12 xs:gap-x-7 sm:gap-x-9 md:gap-x-5 gap-y-6">
                            @foreach ($category->gigs as $gig)
                                <div class="col-span-12 xs:col-span-6 md:col-span-4 lg:col-span-4 xl:col-span-3">
                                    @livewire('main.cards.gig', ['gig' => $gig], key(uid() . 'gig-item-' . $category->id . '-' . $gig->uid))
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        {{-- Latest projects --}}
        <div class="w-full col-span-12 bg-slate-200" style="background-image: url('/img/home/rect.png')">
            <div class="py-12 text-center slide-blue">
                <h3 class="text-xl font-bold tracking-wider text-white uppercase lg:text-2xl md-1 md:mb-3">
                    Latest Projects
                </h3>
                <h6 class="text-white text-[13px] font-normal uppercase">View more</h6>
            </div>
        </div>

        <div class="col-span-12 bg-[#F1F4FF] pt-10 pb-16">
            <div class="container px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="flex items-center justify-between py-2 bg-transparent">
                    <span class="block pb-1 text-xl font-medium tracking-wider text-[#1F2937] dark:text-gray-100">
                        @lang('messages.t_latest_projects')
                    </span>

                    <div>
                        <a href="{{ url('explore/projects') }}"
                            class="hidden text-sm font-semibold text-primary-600 hover:text-primary-700 sm:block">
                            {{ __('messages.t_view_more') }}
                            <svg xmlns="http://www.w3.org/2000/svg" class="hidden w-5 h-5 ltr:inline" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                            </svg>
                        </a>
                    </div>
                </div>

                {{-- Projects --}}
                <div class="space-y-6">
                    @foreach ($projects as $project)
                        @livewire('main.cards.project', ['id' => $project->uid], key('project-card-id-' . $project->uid))
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        if (document.querySelector('.sellers-swiper')) {
            new Swiper('.sellers-swiper', {
                slidesPerView: "auto",
                spaceBetween: "15",
            });
        }

        new Swiper('.selected-gigs-swiper', {
            slidesPerView: "auto",
            spaceBetween: "18",

            navigation: {
                nextEl: '.for-you-next',
                prevEl: '.for-you-prev',
            },
        });
    </script>
@endpush
