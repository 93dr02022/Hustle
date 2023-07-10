@if (request()->is('/'))
    @php $states = modelCaches('nigerian_states'); @endphp

    {{-- Hero section content --}}
    <div class="grid grid-cols-1" x-data="window.LandingPageHeroSection">
        <div class="bg-white flex flex-col grow min-h-[335px] xs:min-h-[380px] sm:min-h-[400px] md:min-h-[500px] lg:min-h-[550px] h-full w-full relative">
            <div class="grid h-full grid-cols-1">
                <div class="swiper hero-swiper">
                    <div class="swiper-wrapper">
                        {{-- first slide --}}
                        <div class="w-full swiper-slide">
                            <div class="h-full grid grid-cols-1">
                                <img src="/img/home/bg.svg" class="col-start-1 row-start-1 h-full w-full object-fill" alt="">
                                <div class="col-start-1 row-start-1 h-full px-4 mb-3">
                                    <div class="max-w-[1000px] mx-auto grid grid-cols-1 md:grid-cols-11 md:h-[95%] md:gap-x-14">
                                        <div class="col-span-6">
                                            <div class="h-[calc(100%_-_5rem)]">
                                                <div class="flex flex-col border-l-[5px] border-[#F18522] pl-4 mt-10 md:mt-24">
                                                    <div class="text-xl font-bold leading-6 text-[#1D46F5] sm:font-extrabold sm:text-3xl md:text-4xl">
                                                        Earn Money and Experience
                                                    </div>
                                                    <div class="text-xl font-bold leading-6 text-[#1D46F5] sm:font-extrabold sm:text-3xl md:text-4xl">
                                                        With Top Clients
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-span-5">
                                            <div class="md:h-[calc(100%_-_4rem)] overflow-hidden rounded-[40px] mt-5 md:mt-16">
                                                <img src="{{ src('home/artisan-10.webp') }}" class="h-full w-full object-cover" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- second slide --}}
                        <div class="w-full swiper-slide">
                            <div class="h-full grid grid-cols-1">
                                <img src="/img/home/bg.svg" class="col-start-1 row-start-1 h-full w-full object-fill" alt="">
                                <div class="col-start-1 row-start-1 h-full px-4 mb-3">
                                    <div class="max-w-[1000px] mx-auto grid grid-cols-1 md:grid-cols-11 md:h-[95%] md:gap-x-14">
                                        <div class="col-span-6">
                                            <div class="h-[calc(100%_-_5rem)]">
                                                <div class="flex flex-col border-l-[5px] border-[#F18522] pl-4 mt-10 md:mt-24">
                                                    <div class="text-xl font-bold leading-6 text-[#1D46F5] sm:font-extrabold sm:text-3xl md:text-4xl">
                                                        Expert Tailors
                                                    </div>
                                                    <div class="text-xl font-bold leading-6 text-[#1D46F5] sm:font-extrabold sm:text-3xl md:text-4xl">
                                                        for Impeccable Outfits.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-span-5">
                                            <div class="md:h-[calc(100%_-_4rem)] overflow-hidden rounded-[40px] mt-5 md:mt-16">
                                                <img src="{{ src('home/artisan-9.webp') }}" class="h-full w-full object-cover" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- third slide --}}
                        <div class="w-full swiper-slide">
                            <div class="h-full grid grid-cols-1">
                                <img src="/img/home/bg.svg" class="col-start-1 row-start-1 h-full w-full object-fill" alt="">
                                <div class="col-start-1 row-start-1 h-full px-4 mb-3">
                                    <div class="max-w-[1000px] mx-auto grid grid-cols-1 md:grid-cols-11 md:h-[95%] md:gap-x-14">
                                        <div class="col-span-6">
                                            <div class="h-[calc(100%_-_5rem)]">
                                                <div class="flex flex-col border-l-[5px] border-[#F18522] pl-4 mt-10 md:mt-24">
                                                    <div class="text-xl font-bold leading-6 text-[#1D46F5] sm:font-extrabold sm:text-3xl md:text-4xl">
                                                        Get your next big project
                                                    </div>
                                                    <div class="text-xl font-bold leading-6 text-[#1D46F5] sm:font-extrabold sm:text-3xl md:text-4xl">
                                                        build with experts
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-span-5">
                                            <div class="md:h-[calc(100%_-_4rem)] overflow-hidden rounded-[40px] mt-5 md:mt-16">
                                                <img src="{{ src('home/artisan-one.webp') }}" class="h-full w-full object-cover" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        {{-- fourth slide  --}}
                        <div class="w-full swiper-slide">
                            <div class="h-full grid grid-cols-1">
                                <img src="/img/home/bg.svg" class="col-start-1 row-start-1 h-full w-full object-fill" alt="">
                                <div class="col-start-1 row-start-1 h-full px-4 mb-3">
                                    <div class="max-w-[1000px] mx-auto grid grid-cols-1 md:grid-cols-11 md:h-[95%] md:gap-x-14">
                                        <div class="col-span-6">
                                            <div class="h-[calc(100%_-_5rem)]">
                                                <div class="flex flex-col border-l-[5px] border-[#F18522] pl-4 mt-10 md:mt-24">
                                                    <div class="text-xl font-bold leading-6 text-[#1D46F5] sm:font-extrabold sm:text-3xl md:text-4xl">
                                                        Expert Mechanics for
                                                    </div>
                                                    <div class="text-xl font-bold leading-6 text-[#1D46F5] sm:font-extrabold sm:text-3xl md:text-4xl">
                                                        Automotive Services.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-span-5">
                                            <div class="md:h-[calc(100%_-_4rem)] overflow-hidden rounded-[40px] mt-5 md:mt-16">
                                                <img src="{{ src('home/artisan-4.webp') }}" class="h-full w-full object-cover" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- fifth slide --}}
                        <div class="w-full swiper-slide">
                            <div class="h-full grid grid-cols-1">
                                <img src="/img/home/bg.svg" class="col-start-1 row-start-1 h-full w-full object-fill" alt="">
                                <div class="col-start-1 row-start-1 h-full px-4 mb-3">
                                    <div class="max-w-[1000px] mx-auto grid grid-cols-1 md:grid-cols-11 md:h-[95%] md:gap-x-14">
                                        <div class="col-span-6">
                                            <div class="h-[calc(100%_-_5rem)]">
                                                <div class="flex flex-col border-l-[5px] border-[#F18522] pl-4 mt-10 md:mt-24">
                                                    <div class="text-xl font-bold leading-6 text-[#1D46F5] sm:font-extrabold sm:text-3xl md:text-4xl">
                                                        Top-notch Plumbers
                                                    </div>
                                                    <div class="text-xl font-bold leading-6 text-[#1D46F5] sm:font-extrabold sm:text-3xl md:text-4xl">
                                                        at Your Service.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-span-5">
                                            <div class="md:h-[calc(100%_-_4rem)] overflow-hidden rounded-[40px] mt-5 md:mt-16">
                                                <img src="{{ src('home/plumber.webp') }}" class="h-full w-full object-cover" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- sixth slide --}}
                        <div class="w-full swiper-slide">
                            <div class="h-full grid grid-cols-1">
                                <img src="/img/home/bg.svg" class="col-start-1 row-start-1 h-full w-full object-fill" alt="">
                                <div class="col-start-1 row-start-1 h-full px-4 mb-3">
                                    <div class="max-w-[1000px] mx-auto grid grid-cols-1 md:grid-cols-11 md:h-[95%] md:gap-x-14">
                                        <div class="col-span-6">
                                            <div class="h-[calc(100%_-_5rem)]">
                                                <div class="flex flex-col border-l-[5px] border-[#F18522] pl-4 mt-10 md:mt-24">
                                                    <div class="text-xl font-bold leading-6 text-[#1D46F5] sm:font-extrabold sm:text-3xl md:text-4xl">
                                                        Verified Pro Barbers
                                                    </div>
                                                    <div class="text-xl font-bold leading-6 text-[#1D46F5] sm:font-extrabold sm:text-3xl md:text-4xl">
                                                        for Exceptional Haircuts.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-span-5">
                                            <div class="md:h-[calc(100%_-_4rem)] overflow-hidden rounded-[40px] mt-5 md:mt-16">
                                                <img src="{{ src('home/barber.webp') }}" class="h-full w-full object-cover" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="flex-shrink-0 absolute z-20 bottom-0 left-[0] top-[60%] md:top-[62%] right-[0] px-4 lg:bottom-[40px]">
                <div
                    class="max-w-2xl mx-auto py-2 sm:py-5 px-3 xs:px-4 md:px-7 lg:px-10 mb-12 z-10 backdrop-blur-[9px] border-[0.5px] border-[#1D46F5] sm:rounded-[10px] lg:rounded-[18px] rounded-md bg-[rgba(217,217,217,0.05)]">
                    <div class="flex items-center justify-center gap-2 flex-wrap mb-3 mt-2">
                        <div class="text-white font-medium">Find Pros in</div>
                        <div @click="showStates = true" class="cursor-pointer py-1 px-2 rounded max-w-[120px] text-white flex gap-x-2 items-center bg-black/70 backdrop-blur-md">
                            <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0" width="15" height="15" fill="#fff" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                            </svg>
                            <span class="text-xs truncate">All <span class="capitalize" x-text="selectedState"></span>
                            </span>
                        </div>
                    </div>
                    <form class="flex items-center mb-2 sm:mb-4" action="{{ url('search') }}" accept="GET">
                        <div class="relative w-full">
                            <div class="absolute inset-y-0 flex items-center pointer-events-none ltr:left-0 rtl:right-0 ltr:pl-3 rtl:pr-3">
                                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                        clip-rule="evenodd">
                                    </path>
                                </svg>
                            </div>
                            <input type="text" class="hidden" name="location" x-model="selectedState" hidden>
                            <input type="search" name="q"
                                class="bg-white border-none text-gray-900 text-sm font-medium rounded-md block w-full ltr:pl-10 rtl:pr-10 px-2.5 py-4 focus:outline-none focus:ring-0 shadow-sm"
                                placeholder="{{ __('messages.t_what_service_are_u_looking_for_today') }}" required>
                        </div>

                        <button type="submit"
                            class="px-5 sm:px-7 py-4 ltr:ml-2 rtl:mr-2 text-sm font-normal text-white bg-[#F18522] rounded-md border-none hover:bg-[#f5841b] focus:ring-0 focus:outline-none">
                            @lang('messages.t_search')
                        </button>
                    </form>

                    {{-- popular tags --}}
                    <div class="items-center hidden text-sm font-semibold text-[#1D46F5] sm:flex whitespace-nowrap">
                        @lang('messages.t_popular_colon')
                        <ul class="flex flex-wrap gap-3 ml-3">
                            @foreach (modelCaches('tags_cache') as $tag)
                                <li class="flex whitespace-nowrap">
                                    <a href="{{ url('categories', $tag->slug) }}"
                                        class="border-2 border-[#1D46F5] rounded-[40px] hover:bg-white hover:text-gray-700 transition-all duration-200 px-3 py-0.5 text-xs">
                                        {{ $tag->name }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
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
@endif

<style>
    .swiper {
        width: 100%;
        height: 100%;
    }
</style>

<script>
    function LandingPageHeroSection() {
        return {
            showStates: false,
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
                } else(navigator.geolocation) {
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
