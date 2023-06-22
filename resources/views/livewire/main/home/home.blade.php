<div class="w-full">
    <div class="grid grid-cols-12">

        {{-- Fatured categories --}}
        @if ($categories->count())
            <div class="bg-[#F1F4FF] col-span-12 pt-20 pb-16 mb-16">
                <div class="grid grid-cols-1">
                    <div
                        class="w-full max-w-2xl col-start-1 row-start-1 mx-auto overflow-x-visible bg-white rounded pt-7 drop-shadow-sm">
                        <h3 class="text-lg sm:text-xl md:text-2xl uppercase font-semibold text-center text-[#021773]">
                            Featured Categories
                        </h3>
                    </div>

                    <div class="z-20 col-start-1 row-start-1 mt-20 mb-12 swiper featured-category-swiper">
                        <div class="swiper-wrapper">
                            @foreach ($categories as $category)
                                <div class="swiper-slide max-w-[230px] xs:max-w-[280px]">
                                    <a href="{{ url('categories', $category->slug) }}"
                                        class="relative !h-72 rounded-lg !p-6 !flex !flex-col overflow-hidden group mx-3">
                                        <span aria-hidden="true" class="absolute inset-0">
                                            <img src="{{ placeholder_img() }}" data-src="{{ src($category->image_id) }}"
                                                alt="{{ $category->name }}"
                                                class="object-cover object-center w-full h-full lazy opacity-70 group-hover:opacity-100">
                                        </span>
                                        <span aria-hidden="true"
                                            class="absolute inset-x-0 bottom-0 h-2/3 bg-gradient-to-t from-[#eb9605] opacity-90"></span>
                                        <span
                                            class="relative mt-auto text-base font-semibold text-center text-white md:text-lg">
                                            {{ $category->name }}
                                        </span>
                                    </a>
                                </div>
                            @endforeach
                        </div>

                        <div
                            class="!h-8 !top-[35%] px-4 bg-[#F18522] rounded-full shadow-lg after:!text-sm after:!text-white swiper-button-prev">
                        </div>
                        <div
                            class="!h-8 !top-[35%] px-4 bg-[#F18522] rounded-full shadow-lg after:!text-sm after:!text-white swiper-button-next">
                        </div>
                    </div>
                </div>
            </div>
        @endif

        {{-- Bestsellers --}}
        <div class="col-span-12">
            <div class="odd:bg-[#F59E0B] w-full py-16"></div>
        </div>

        {{-- Random gigs --}}
        <div class="col-span-12">
            @foreach ($randomCategories as $category)
                <div
                    class="odd:bg-[#B7C4FC] even:bg-[#F1F4FF] [&:nth-child(odd)_.swiper-button-prev]:bg-white [&:nth-child(even)_.swiper-button-prev]:bg-[#1F2937] [&:nth-child(odd)_.swiper-button-next]:bg-white [&:nth-child(even)_.swiper-button-next]:bg-[#1F2937] stripe-title w-full py-16">
                    <div class="container px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                        {{-- Section title --}}
                        <div class="flex items-center justify-between py-2 mb-3.5 bg-transparent">
                            <div>
                                <span class="block pb-1 text-xl font-medium tracking-wider text-gray-800 gig-title">
                                    {{ $category->name }}
                                </span>
                            </div>

                            <div>
                                <a href="{{ url('categories', $category->slug) }}"
                                    class="hidden text-sm font-semibold text-primary-600 hover:text-primary-700 sm:block">
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
                        <div class="col-span-12">
                            <div class="swiper gigs-swiper">
                                <div class="swiper-wrapper">
                                    @foreach ($category->gigs as $gig)
                                        <div class="swiper-slide max-w-[230px] xs:max-w-[280px]">
                                            @livewire('main.cards.gig', ['gig' => $gig], key('gig-item-' . $category->id . '-' . $gig->uid))
                                        </div>
                                    @endforeach
                                </div>

                                <div class="!h-8 px-4 rounded-full shadow-lg after:!text-sm swiper-button-prev">
                                </div>
                                <div class="!h-8 px-4 rounded-full shadow-lg after:!text-sm swiper-button-next">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>



        {{-- Latest projects --}}
    </div>
</div>

@push('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
@endpush

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <script>
        const featureSwiper = new Swiper('.featured-category-swiper', {
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },

            slidesPerView: "auto",

            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });

        const swiper = new Swiper('.hero-swiper', {
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },

            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
        });

        const myCustomSlider = document.querySelectorAll('.gigs-swiper');

        for (i = 0; i < myCustomSlider.length; i++) {

            myCustomSlider[i].classList.add('gigs-swiper-' + i);

            var slider = new Swiper('.gigs-swiper-' + i, {
                slidesPerView: "auto",
                spaceBetween: "18",

                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
            });

        }
    </script>
@endpush
