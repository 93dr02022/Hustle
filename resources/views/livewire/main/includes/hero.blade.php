<div class="grid grid-cols-1" x-data="window.LandingPageHeroSection">
    <div class="bg-[#F1F4FF] xs:bg-white grid grid-cols-1 xs:flex flex-col grow overflow-hidden h-[320px] xs:min-h-[380px] sm:min-h-[385px] md:max-h-[430px] xs:h-full w-full relative">
        <div class="bg-white xs:bg-none mx-4 xs:mx-0 mt-3 xs:mt-0 order-2 xs:order-1 grid h-full grid-cols-1">
            <div class="swiper hero-swiper w-full xs:h-full" wire:ignore>
                <div class="swiper-wrapper">
                    @foreach ($slides as $slide)
                        <div class="w-full swiper-slide [&.swiper-slide:not(.swiper-slide-active)_.slide-img]:hidden">
                            <div class="h-full grid grid-cols-1">
                                <div class="col-start-1 row-start-1 ">
                                    <img src="/img/home/bg.svg" class="h-full w-full object-fill" alt="">
                                </div>
                                <div class="col-start-1 row-start-1 xs:h-full">
                                    <div class="max-w-7xl mx-auto grid grid-cols-11 gap-x-3 md:grid-cols-11 md:h-full md:gap-x-14 px-4 sm:px-6 lg:px-8">
                                        <div class="col-span-6">
                                            <div class="h-[calc(100%_-_3rem)]">
                                                <div class="bg-white flex flex-col border-l-[3px] xs:border-l-[5px] border-[#F18522] pl-2 xs:pl-4 mt-8 xs:mt-10 md:mt-14">
                                                    <div class="text-xl font-bold leading-6 text-[#1D46F5] sm:font-extrabold sm:text-3xl md:text-4xl">
                                                        {{ $slide['title'] }}
                                                    </div>
                                                    <div class="text-xl font-bold leading-6 text-[#1D46F5] sm:font-extrabold sm:text-3xl md:text-4xl">
                                                        {{ $slide['subTitle'] }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-span-5">
                                            <div class="flex justify-center xs:overflow-hidde mt-2 xs:mt-5 md:mt-10">
                                                <img src="{{ $slide['image'] }}" class="object-contain slide-img transition-opacity duration-500" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="flex-shrink-0 order-1 xs:order-2 xs:absolute mt-2 xs:mt-0 z-20 bottom-0 left-[0] md:top-[44%] right-[0] px-4 lg:bottom-[40px]">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div
                    class="max-w-[620px] py-2 sm:py-5 px-3-0 xs:px-4 md:px-7 xs:mb-12 z-10 backdrop-blur-[5px] sm:backdrop-blur-[15px] border-[0.5px] border-[#1D46F5] rounded-2xl xs:rounded-[10px] lg:rounded-[18px] bg-[rgba(217,217,217,0.05)]">
                    <div class="flex items-center justify-center gap-2 flex-wrap mb-3 mt-2">
                        <div class="text-[#1D46F5] font-medium">Find Pros in</div>
                        <div @click="showStates = true" class="cursor-pointer py-1 px-2 rounded max-w-[120px] text-white flex gap-x-2 items-center bg-black/70 backdrop-blur-md">
                            <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0" width="15" height="15" fill="#fff" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                            </svg>
                            <span class="text-xs truncate">All <span class="capitalize" x-text="selectedState"></span>
                            </span>
                        </div>
                    </div>
                    <form class="relative" x-data="{ open: false }" action="{{ url('search') }}" accept="GET">
                        <div class="flex items-center mb-2 px-3 xs:px-0 sm:mb-4">
                            <div class="relative w-full">
                                <div class="absolute inset-y-0 hidden xs:flex items-center pointer-events-none ltr:left-0 rtl:right-0 ltr:pl-3 rtl:pr-3">
                                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                            clip-rule="evenodd">
                                        </path>
                                    </svg>
                                </div>
                                <input type="text" class="hidden" name="location" x-model="selectedState" hidden>
                                <input type="search" name="q" wire:model.debounce.200ms="q" wire:keydown.enter="enter" x-ref="search" x-on:click="open = true"
                                    class="bg-white border border-[#f1f1f1] text-gray-900 text-sm font-medium rounded-md block w-full pl-4 xs:pl-10 px-2.5 py-4 focus:outline-none focus:ring-0 shadow-sm"
                                    placeholder="{{ __('messages.t_what_service_are_u_looking_for_today') }}" required>
                            </div>
                            <button type="submit"
                                class="px-5 sm:px-7 py-4 ltr:ml-2 rtl:mr-2 text-sm font-normal text-white bg-[#F18522] rounded-md border-none hover:bg-[#f5841b] focus:ring-0 focus:outline-none">
                                <span class="hidden xs:block">@lang('messages.t_search')</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff" class="text-white block xs:hidden" viewBox="0 0 16 16">
                                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                 </svg>
                            </button>
                        </div>

                        {{-- search quick result --}}
                        @if (count($gigs) || count($sellers) || count($tags) || $q)
                            <div class="absolute top-16 w-full bg-white dark:bg-zinc-800 rounded-lg border border-gray-100 dark:border-zinc-800 shadow-md max-w-full z-[60]"
                                @keydown.window.escape="opne = false" x-show="open" style="display: none" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0"
                                x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                                x-on:click.away="open = false">
                                {{-- Results --}}
                                @if (count($gigs) || count($sellers) || count($tags))
                                    <ul class="p-4 pb-2 space-y-4 overflow-y-auto max-h-80 scroll-py-10 scroll-pb-2" id="options" role="listbox">

                                        {{-- Gigs --}}
                                        @if ($gigs && count($gigs))
                                            <li>
                                                <h2 class="text-xs font-semibold text-gray-900 dark:text-white">
                                                    {{ __('messages.t_gigs') }}</h2>
                                                <ul class="mt-2 -mx-4 text-sm text-gray-700 dark:text-gray-400">

                                                    {{-- List of gigs --}}
                                                    @foreach ($gigs as $gig)
                                                        <li class="flex items-center px-4 py-2 cursor-default select-none group">
                                                            <a href="{{ url('service', $gig->slug) }}" class="flex items-center">
                                                                <svg class="flex-none w-6 h-6 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                                    aria-hidden="true">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                                        d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
                                                                </svg>
                                                                <span class="flex-auto overflow-hidden ltr:ml-3 rtl:mr-3 ext-ellipsis">{{ $gig->title }}</span>
                                                            </a>
                                                        </li>
                                                    @endforeach

                                                </ul>
                                            </li>
                                        @endif

                                        {{-- Sellers --}}
                                        @if ($sellers && count($sellers))
                                            <li>
                                                <h2 class="text-xs font-semibold text-gray-900 dark:text-white">
                                                    {{ __('messages.t_sellers') }}</h2>

                                                {{-- List of sellers --}}
                                                <ul class="mt-2 -mx-4 text-sm text-gray-700 dark:text-gray-400">
                                                    @foreach ($sellers as $seller)
                                                        <li class="flex items-center px-4 py-2 cursor-default select-none group">
                                                            <a href="{{ url('profile', $seller->username) }}" class="flex items-center">
                                                                <img src="{{ placeholder_img() }}" data-src="{{ src($seller->avatar_id) }}" alt="{{ $seller->username }}"
                                                                    class="flex-none object-cover w-6 h-6 rounded-full lazy">
                                                                <span class="flex-auto truncate ltr:ml-3 rtl:mr-3">{{ $seller->username }}</span>
                                                            </a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                        @endif

                                        {{-- Tags --}}
                                        @if ($tags && count($tags))
                                            <li>
                                                <h2 class="text-xs font-semibold text-gray-900 dark:text-white">
                                                    {{ __('messages.t_tags') }}</h2>
                                                <ul class="mt-2 -mx-4 text-sm text-gray-700 dark:text-gray-400">

                                                    {{-- List of tags --}}
                                                    @foreach ($tags as $tag)
                                                        <li class="flex items-center px-4 py-2 cursor-default select-none group">
                                                            <a href="{{ url('gigs', $tag->slug) }}" class="flex items-center">
                                                                <svg xmlns="http://www.w3.org/2000/svg" class="flex-none w-6 h-6 text-gray-400" fill="none" viewBox="0 0 24 24"
                                                                    stroke="currentColor" stroke-width="2">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M7 20l4-16m2 16l4-16M6 9h14M4 15h14" />
                                                                </svg>
                                                                <span class="flex-auto ml-3 truncate">{{ $tag->name }}</span>
                                                            </a>
                                                        </li>
                                                    @endforeach

                                                </ul>
                                            </li>
                                        @endif

                                    </ul>
                                @endif

                                {{-- No results --}}
                                @if (count($gigs) === 0 && count($sellers) === 0 && count($tags) === 0 && $q)
                                    <div class="px-6 text-sm text-center py-14 sm:px-14">
                                        <svg class="w-6 h-6 mx-auto text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                        </svg>
                                        <p class="mt-4 font-semibold text-gray-900 dark:text-white">
                                            {{ __('messages.no_results_found') }}</p>
                                        <p class="mt-2 text-gray-500">
                                            {{ __('messages.t_we_couldnt_find_anthing_search_term') }}</p>
                                    </div>
                                @endif

                                {{-- Footer --}}
                                <div class="rounded-b-lg flex flex-wrap items-center bg-gray-50 dark:bg-zinc-700 py-2.5 px-4 text-xs text-gray-700 dark:text-gray-400">
                                    {!! __('messages.t_press_enter_to_search_deeply') !!}
                                </div>
                            </div>
                        @endif
                    </form>

                    {{-- popular tags --}}
                    <div class="flex flex-col pl-3 xs:px-0 xs:flex-row xs:items-center text-sm font-semibold text-[#1D46F5] sm:flex xs:whitespace-nowrap gap-x-3 gap-y-1 my-1">
                        <span>@lang('messages.t_popular_colon')</span>
                        <ul class="flex overflow-x-auto gap-2">
                            @foreach (modelCaches('tags_cache') as $tag)
                                <li class="flex whitespace-nowrap">
                                    <a href="{{ url('categories', $tag->slug) }}"
                                        class="border-[1.5px] border-[#1D46F5] rounded-[40px] hover:bg-white hover:text-gray-700 transition-all duration-200 px-1.5 py-[3px] text-xs">
                                        {{ $tag->name }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="flex justify-center pt-3 -mb-10">
        <div class="swiper-pagination !static [&>.swiper-pagination-bullet]:h-3 [&>.swiper-pagination-bullet]:w-3 p-0">
        </div>
    </div>

    {{-- state selection overlay --}}
    <div x-show="showStates" class="fixed inset-0 bg-black/70 z-[50]" x-cloak>
        <div class="flex justify-center xs:px-4 sm:px-7">
            <div class="bg-[#EBF2F7] xs:mt-[7%] xs:mb-10 pb-5 w-full max-w-3xl rounded-0 xs:rounded-md md:rounded-2xl">
                <div class="flex items-center justify-between gap-x-2 pt-5 pb-4 px-4">
                    <span class="text-[15] font-medium text-neutral-800">All Nigerian.</span>

                    <span @click="showStates = false" class="bg-white/50 backdrop-blur-md rounded p-2 grid place-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-neutral-800" width="18" height="18" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                            <path stroke-width="1"
                                d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z" />
                        </svg>
                    </span>
                </div>

                <div class="overflow-y-auto px-4 h-full max-h-screen xs:max-h-[400px] ">
                    <div class="grid grid-cols-2 sm:grid-cols-3 gap-3">
                        @foreach ($states as $state)
                            <div @click="selectState(@js($state->name))" class="bg-white rounded border text-sm truncate cursor-pointer border-slate-50 py-3 px-3"
                                :class="@js($state->name).toLowerCase() == selectedState.toLowerCase() ?
                                    '!bg-[#1D46F5] [&>span]:text-white [&>span]:hover:!text-slate-50' : ''">
                                <span class="text-black hover:text-blue-700">{{ $state->name }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        new Swiper('.hero-swiper', {
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            speed: 1000,
            effect: "fade",

            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
        });

        function LandingPageHeroSection() {
            return {
                showStates: false,
                open: false,
                selectedState: "nigeria",

                selectState(state) {
                    this.selectedState = state
                    this.showStates = false
                },

                init() {
                    let _this = this;

                    let locationString = localStorage.getItem('location');

                    if (locationString) {
                        let locationInfo = JSON.parse(locationString);

                        if (locationInfo?.country == 'Nigeria') {
                            this.selectedState = locationInfo?.region ?? 'lagos';
                        }

                        if (locationInfo?.country !== 'Nigeria') {
                            this.selectedState = 'lagos';
                        }
                    } else if (navigator.geolocation) {
                        navigator.geolocation.getCurrentPosition((position) => {
                            const {
                                latitude,
                                longitude
                            } = position.coords

                            localStorage.setItem('coords', JSON.stringify({
                                latitude,
                                longitude
                            }));

                            locationString = localStorage.getItem('location');

                            if (locationString) {
                                let locationInfo = JSON.parse(locationString);

                                if (locationInfo?.country == 'Nigeria') {
                                    this.selectedState = locationInfo?.region ?? 'lagos';
                                }

                                if (locationInfo?.country !== 'Nigeria') {
                                    this.selectedState = 'lagos';
                                }
                            }

                            if (!locationString) {
                                fetch(
                                        `http://api.positionstack.com/v1/reverse?access_key={{ env('POSITION_STACK_KEY') }}&query=${latitude},${longitude}`
                                    )
                                    .then(res => res.json())
                                    .then(data => {
                                        let locationRes = data?.data?.[0] ?? {};

                                        if (locationRes?.country == 'Nigeria') {
                                            this.selectedState = locationRes?.region ?? 'lagos';
                                        }

                                        if (locationRes?.country !== 'Nigeria') {
                                            this.selectedState = 'lagos';
                                        }

                                        localStorage.setItem('location', JSON.stringify(data?.data?.[0] ?? {}));
                                    })
                            }
                        });
                    }
                }
            }
        }
        window.LandingPageHeroSection = LandingPageHeroSection()
    </script>
@endpush
