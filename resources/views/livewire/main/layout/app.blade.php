<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ config()->get('direction') }}" @class(['dark' => current_theme() === 'dark'])>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Generate seo tags --}}
    {!! SEO::generate() !!}
    {!! JsonLd::generate() !!}

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700;800;900&display=swap">
    <link rel="icon" type="image/png" href="http://localhost:3030/img/default/default-placeholder.jpg" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    {{-- Livewire styles --}}
    @livewireStyles

    {{-- Styles --}}
    <link rel="preload" href="{{ mix('css/app.css') }}" as="style">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="preload" href="{{ livewire_asset_path() }}" as="script">

    {{-- Custom css --}}
        <style>
            :root {
                --color-primary  : {{ settings('appearance')->colors['primary'] }};
                --color-primary-h: {{ hex2hsl( settings('appearance')->colors['primary'] )[0] }};
                --color-primary-s: {{ hex2hsl( settings('appearance')->colors['primary'] )[1] }}%;
                --color-primary-l: {{ hex2hsl( settings('appearance')->colors['primary'] )[2] }}%;
            }
            html {
                font-family: @php echo settings('appearance')->font_family @endphp, sans-serif !important;
            }
            .home-hero-section {
                background-color: {{ settings('hero')->bg_color }};
                background-repeat: no-repeat;
                background-position: center center;
                background-size: cover;
                height: {{ settings('hero')->bg_large_height }}px;
            }

            {{-- Check if background image enabled --}}
            @if (settings('hero')->enable_bg_img)

                {{-- Background image for small devices --}}
                @if (settings('hero')->background_small)

                    @media only screen and (max-width: 600px) {
                        .home-hero-section {
                            background-image: url('{{ src(settings('hero')->background_small) }}');
                            height: {{ settings('hero')->bg_small_height }}px;
                        }
                    }

                @endif
                {{-- Background image for medium devices --}}
                @if (settings('hero')->background_medium)

                    @media only screen and (min-width: 600px) {
                        .home-hero-section {
                            background-image: url('{{ src(settings('hero')->background_medium) }}')
                        }
                    }
                @endif
                {{-- Background image for large devices --}}
                @if (settings('hero')->background_large)
                    @media only screen and (min-width: 1200px) {
                        .home-hero-section {
                            background-image: url('{{ src(settings('hero')->background_large) }}');
                        }
                    }
                @endif
            @endif
        </style>

    {{-- Styles --}}
    @stack('styles')

    {{-- JavaScript variables --}}
    <script>
        __var_app_url = "{{ url('/') }}";
        __var_app_locale = "{{ app()->getLocale() }}";
        __var_rtl = @js(config()->get('direction') === 'ltr' ? false : true);
        __var_primary_color = "{{ settings('appearance')->colors['primary'] }}";
        __var_axios_base_url = "{{ url('/') }}/";
        __var_currency_code = "{{ settings('currency')->code }}";
    </script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

        {{-- Ads header code --}}
        @if (advertisements('header_code'))
            {!! advertisements('header_code') !!}
        @endif

        {{-- Custom head code --}}
        @if (settings('appearance')->custom_code_head_main_layout)
            {!! settings('appearance')->custom_code_head_main_layout !!}
        @endif

        {{-- Notification Initialization --}}

        <script src="https://www.gstatic.com/firebasejs/8.3.2/firebase-app.js"></script>
        <script src="https://www.gstatic.com/firebasejs/8.3.2/firebase-messaging.js"></script>

        <script>
            // Your web app's Firebase configuration
            const firebaseConfig = {
                        apiKey: "AIzaSyB4H3R1_H5xi0NvV_n6NXCG73tr_t6GjFg",
                        authDomain: "hustle-7d66f.firebaseapp.com",
                        projectId: "hustle-7d66f",
                        storageBucket: "hustle-7d66f.appspot.com",
                        messagingSenderId: "378681680907",
                        appId: "1:378681680907:web:0488b453643915a367930e",
                        measurementId: "G-B31LGQ7JG1"
                    };
            // Initialize Firebase
            firebase.initializeApp(firebaseConfig);

            const messaging = firebase.messaging();
            @if(auth()->check())

                function initFirebaseMessagingRegistration() {
                    messaging.requestPermission().then(function () {
                        return messaging.getToken()
                    }).then(function(token) {
                        window.axios.post("{{ route('subscribe-to-notifications') }}",{
                            _method:"PATCH",
                            token
                        }).then(({data})=>{
                            console.log(data)
                        }).catch(({response:{data}})=>{
                            console.error(data)
                        })

                    }).catch(function (err) {
                        console.log(`Token Error :: ${err}`);
                    });
                }

                initFirebaseMessagingRegistration();

                messaging.onMessage(function({data:{body,title}}){
                    new Notification(title, {body});
                });

            @endif
        </script>
</head>

<body
    class="antialiased bg-gray-50 dark:bg-[#161616] text-gray-600 min-h-full flex flex-col application application-ltr overflow-x-hidden overflow-y-scroll {{ app()->getLocale() === 'ar' ? 'application-ar' : '' }}"
    style="overflow-y: scroll">

        {{-- Notification --}}
        <x-notifications position="top-center" z-index="z-[65]" />

        {{-- Dialog --}}
        <x-dialog z-index="z-[65]" blur="sm" />

		{{-- Header --}}
        @livewire('main.includes.header')

        {{-- Hero section --}}
        @if (request()->is('/'))
            @php
                $categories = App\Models\Category::take(9)->get();
                $popularTags = App\Models\Category::whereHas('gigs')
                    ->withCount('gigs')
                    ->take(4)
                    ->orderBy('gigs_count')
                    ->get();
            @endphp
            {{-- Hero section --}}
            @include('livewire.main.includes.hero')
        @endif

        {{-- Content --}}
        <main class="flex-grow">
            <div class="container max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 pt-16 pb-24 space-y-8 min-h-screen">
                @yield('content')
            </div>
        </main>

        {{-- Footer --}}
        @livewire('main.includes.footer')

        {{-- Livewire scripts --}}
        @livewireScripts

        {{-- Wire UI --}}
        <wireui:scripts />

        {{-- Core --}}
        <script defer src="{{ mix('js/app.js') }}"></script>

        {{-- Helpers --}}
        <script defer src="{{ url('js/utils.js?v=1.3.1') }}"></script>
        <script src="{{ url('js/components.js?v=1.3.1') }}"></script>

        {{-- Custom JS codes --}}
        <script defer>

            document.addEventListener("DOMContentLoaded", function(){

                jQuery.event.special.touchstart = {
                    setup: function( _, ns, handle ) {
                        this.addEventListener("touchstart", handle, { passive: !ns.includes("noPreventDefault") });
                    }
                };
                jQuery.event.special.touchmove = {
                    setup: function( _, ns, handle ) {
                        this.addEventListener("touchmove", handle, { passive: !ns.includes("noPreventDefault") });
                    }
                };
                jQuery.event.special.wheel = {
                    setup: function( _, ns, handle ){
                        this.addEventListener("wheel", handle, { passive: true });
                    }
                };
                jQuery.event.special.mousewheel = {
                    setup: function( _, ns, handle ){
                        this.addEventListener("mousewheel", handle, { passive: true });
                    }
                };

                // Refresh
                window.addEventListener('refresh',() => {
                    location.reload();
                });

                // Scroll to specific div
                window.addEventListener('scrollTo', (event) => {

                    // Get id to scroll
                    const id = event.detail;

                    // Scroll
                    $('html, body').animate({
                        scrollTop: $("#" + id).offset().top
                    }, 500);

                });

                // Scroll to up page
                window.addEventListener('scrollUp', () => {

                    // Scroll
                    $('html, body').animate({
                        scrollTop: $("body").offset().top
                    }, 500);

                });

            });

        function jwUBiFxmwbrUwww() {
            return {
                scroll: false,

                init() {
                    var _this = this;
                    $(document).scroll(function() {
                        $(this).scrollTop() > 70 ? _this.scroll = true : _this.scroll = false;
                    });

                }
            }
        }
        window.jwUBiFxmwbrUwww = jwUBiFxmwbrUwww();

        document.ontouchmove = function(event) {
            event.preventDefault();
        }
    </script>

    {{-- Custom scripts --}}
    @stack('scripts')
</body>

</html>
