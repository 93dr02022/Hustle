<div class="w-full">
    <div class="grid grid-cols-12 gap-6">

        {{-- Fatured categories --}}
        @if ($categories->count())
        <div class="col-span-12 mt-6 xl:mt-6 mb-16">
            <span class="font-semibold text-gray-400 dark:text-gray-200 uppercase tracking-wider text-center block">{{ __('messages.t_featured_categories') }}</span>
            <div class="flex-wrap justify-center items-center mt-8 -mx-5 hidden" id="featured-categories-slick" wire:ignore>

                @foreach ($categories as $category)
                <a href="{{ url('categories', $category->slug) }}" class="relative !h-72 rounded-lg !p-6 !flex !flex-col overflow-hidden group mx-5">
                    <span aria-hidden="true" class="absolute inset-0">
                        <img src="{{ placeholder_img() }}" data-src="{{ src($category->image_id) }}" alt="{{ $category->name }}"
                            class="lazy w-full h-full object-center object-cover opacity-70 group-hover:opacity-100">
                    </span>
                    <span aria-hidden="true" class="absolute inset-x-0 bottom-0 h-2/3 bg-gradient-to-t from-gray-800 opacity-90"></span>
                    <span class="relative mt-auto text-center text-xl font-bold text-white">{{ $category->name }}</span>
                </a>
                @endforeach

            </div>
        </div>
        @endif

        {{-- Bestsellers --}}


        {{-- Random gigs --}}


        {{-- List of categories in home --}}


        {{-- Latest projects --}}


        {{-- Newsletter --}}


    </div>
</div>

@push('scripts')

{{-- Slick Plugin --}}
@if (settings('appearance')->is_featured_categories && $categories && $categories->count())
<script defer type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function(){
                // Init featured categories slick
                $('#featured-categories-slick').slick({
                    dots          : false,
                    autoplay      : true,
                    infinite      : true,
                    speed         : 300,
                    slidesToShow  : 6,
                    slidesToScroll: 1,
                    arrows        : false,
                    responsive    : [
                        {
                        breakpoint: 1024,
                            settings: {
                                slidesToShow  : 4,
                                slidesToScroll: 1
                            }
                        },
                        {
                        breakpoint: 800,
                            settings: {
                                slidesToShow  : 3,
                                slidesToScroll: 1
                            }
                        },
                        {
                        breakpoint: 600,
                            settings: {
                                slidesToShow  : 2,
                                slidesToScroll: 1
                            }
                        },
                        {
                        breakpoint: 480,
                            settings: {
                                slidesToShow  : 1,
                                slidesToScroll: 1
                            }
                        }
                    ]
                });
                $('#featured-categories-slick').removeClass('hidden');
            });
</script>
@endif

{{-- Bestsellers --}}
@if (settings('appearance')->is_best_sellers && $sellers && $sellers->count())
<script>
    document.addEventListener("DOMContentLoaded", function(){
                // Init featured categories slick
                $('#top-sellers-slick').slick({
                    dots          : false,
                    autoplay      : true,
                    infinite      : true,
                    speed         : 300,
                    slidesToShow  : 5,
                    slidesToScroll: 1,
                    arrows        : false,
                    responsive    : [
                        {
                        breakpoint: 1024,
                            settings: {
                                slidesToShow  : 3,
                                slidesToScroll: 1
                            }
                        },
                        {
                        breakpoint: 800,
                            settings: {
                                slidesToShow  : 3,
                                slidesToScroll: 1
                            }
                        },
                        {
                        breakpoint: 600,
                            settings: {
                                slidesToShow  : 2,
                                slidesToScroll: 1
                            }
                        },
                        {
                        breakpoint: 480,
                            settings: {
                                slidesToShow  : 1,
                                slidesToScroll: 1
                            }
                        }
                    ]
                });
                $('#top-sellers-slick').removeClass('hidden');
            });
</script>
@endif

@endpush

@push('styles')

{{-- Slick Plugin --}}
@if (settings('appearance')->is_featured_categories)
<link rel="preload" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" type="text/css" as="style" onload="this.onload=null;this.rel='stylesheet';" />
@endif

@endpush