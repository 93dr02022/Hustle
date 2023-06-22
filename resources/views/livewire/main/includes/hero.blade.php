@if (request()->is('/'))
    {{-- Hero section content --}}
    <div class="grid grid-cols-1">
        <div
            class="bg-slate-200 flex flex-col grow min-h-[300px] sm:min-h-[380px] md:min-h-[480px] h-full w-full relative">
            <div class="grid h-full grid-cols-1">
                <div class="swiper hero-swiper">
                    <div class="swiper-wrapper">
                        {{-- first slide --}}
                        <div class="w-full swiper-slide">
                            <div class="h-full object-cover bg-cover bg-no-repeat bg-[center_center]"
                                style="background-image: url('/img/home/slide-3.png')">
                                <div class="h-full px-4 mb-3 slide-blue">
                                    <div class="max-w-2xl mx-auto flex items-end h-[60%]">
                                        <div class="flex flex-col border-l-[5px] border-[#F18522] pl-4">
                                            <div class="text-3xl font-extrabold text-white md:text-4xl">
                                                Earn Money and Experience
                                            </div>
                                            <div class="text-3xl font-extrabold text-white md:text-4xl">
                                                With Top Clients
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- second slide --}}
                        <div class="w-full swiper-slide">
                            <div class="h-full object-cover bg-cover bg-no-repeat bg-[center_center]"
                                style="background-image: url('/img/home/slide-1.webp')">
                                <div class="h-full px-4 mb-3 slide-blue">
                                    <div class="max-w-2xl mx-auto flex items-end h-[60%]">
                                        <div class="flex flex-col border-l-[5px] border-[#F18522] pl-4">
                                            <div class="text-3xl font-extrabold text-white md:text-4xl">Find best
                                                Freelance </div>
                                            <div class="text-3xl font-extrabold text-white md:text-4xl">services for
                                                your business
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- third slide --}}
                        <div class="w-full swiper-slide">
                            <div class="h-full object-cover bg-cover bg-no-repeat bg-[center_center]"
                                style="background-image: url('/img/home/slide-2.jpg')">
                                <div class="h-full px-4 mb-3 slide-blue">
                                    <div class="max-w-2xl mx-auto flex items-end h-[60%]">
                                        <div class="flex flex-col border-l-[5px] border-[#F18522] pl-4">
                                            <div class="text-3xl font-extrabold text-white md:text-4xl">
                                                Get your next big project
                                            </div>
                                            <div class="text-3xl font-extrabold text-white md:text-4xl">
                                                build with experts
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex-shrink-0 absolute z-20 bottom-0 left-[0] top-[62%] right-[0]  px-4">
                <div
                    class="max-w-2xl mx-auto py-5 px-4 md:px-7 lg:px-10 mb-12 z-10 backdrop-blur-[9px] border-[0.5px] border-[#1D46F5] sm:rounded-[30px] rounded-md bg-[rgba(217,217,217,0.05)]">
                    <form class="flex items-center mb-4" action="{{ url('search') }}" accept="GET">
                        <div class="relative w-full">
                            <div
                                class="absolute inset-y-0 flex items-center pointer-events-none ltr:left-0 rtl:right-0 ltr:pl-3 rtl:pr-3">
                                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400"
                                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <input type="search" name="q"
                                class="bg-white border-none text-gray-900 text-sm font-medium rounded-md block w-full ltr:pl-10 rtl:pr-10 px-2.5 py-4 focus:outline-none focus:ring-0"
                                placeholder="{{ __('messages.t_what_service_are_u_looking_for_today') }}" required>
                        </div>

                        <button type="submit"
                            class="px-5 sm:px-7 py-4 ltr:ml-2 rtl:mr-2 text-sm font-normal text-white bg-[#F18522] rounded-md border-none hover:bg-[#f5841b] focus:ring-0 focus:outline-none">
                            @lang('messages.t_search')
                        </button>
                    </form>

                    {{-- popular tags --}}
                    <div class="items-center hidden text-sm font-semibold text-white sm:flex whitespace-nowrap">
                        @lang('messages.t_popular_colon')
                        <ul class="flex flex-wrap gap-3 ml-3">
                            @foreach ($popularTags as $tag)
                                <li class="flex whitespace-nowrap">
                                    <a href="{{ url('categories', $tag->slug) }}"
                                        class="border border-slate-100 rounded-[40px] hover:bg-white hover:text-gray-700 transition-all duration-200 px-3 py-0.5 text-xs">
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
            <div
                class="swiper-pagination !static [&>.swiper-pagination-bullet]:h-3 [&>.swiper-pagination-bullet]:w-3 p-0">
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
