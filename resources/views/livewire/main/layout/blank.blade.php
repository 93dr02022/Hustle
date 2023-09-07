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

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" type="image/png" href="http://localhost:3030/img/default/default-placeholder.jpg" />

    {{-- Livewire styles --}}
    @livewireStyles

    {{-- Styles --}}
    @if (App::environment('local'))
        <link rel="preload" href="{{ mix('css/app.css') }}" as="style">
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    @else
        @php
            $cssVersion = \Illuminate\Support\Facades\Cache::rememberForever('cssVersion', fn() => uid());
        @endphp
        <link rel="preload" href="https://hustlebucket.s3.amazonaws.com/public/css/app.css?v={{ $cssVersion }}"
            as="style">
        <link rel="stylesheet" href="https://hustlebucket.s3.amazonaws.com/public/css/app.css?v={{ $cssVersion }}">
    @endif

    <link rel="preload" href="{{ livewire_asset_path() }}" as="script">

    {{-- Custom css --}}
    <style>
        :root {
            --color-primary: "#1d46f5";
            --color-primary-h: {{ hex2hsl('#1d46f5')[0] }};
            --color-primary-s: {{ hex2hsl('#1d46f5')[1] }}%;
            --color-primary-l: {{ hex2hsl('#1d46f5')[2] }}%;
        }

        body {
            overscroll-behavior-y: auto;
        }
    </style>

    {{-- Styles --}}
    @stack('styles')

    <style>
        .font-heebo {
            font-family: Heebo, sans-serif !important;
        }

        .font-montserrat {
            font-family: 'Montserrat', sans-serif !important;
        }

        .font-inter {
            font-family: 'Inter', sans-serif;
        }
    </style>

    {{-- JavaScript variables --}}
    <script>
        __var_app_url = "{{ url('/') }}";
        __var_app_locale = "{{ app()->getLocale() }}";
        __var_rtl = @js(config()->get('direction') === 'ltr' ? false : true);
        __var_primary_color = "{{ settings('appearance')->colors['primary'] }}";
        __var_axios_base_url = "{{ url('/') }}/";
        __var_currency_code = "{{ settings('currency')->code }}";
    </script>
</head>

<body
    class="antialiased bg-gray-50 dark:bg-[#161616] text-gray-600 min-h-full flex flex-col application application-ltr overflow-x-hidden overflow-y-scroll"
    style="overflow-y: scroll">

    {{-- Notification --}}
    <x-notifications position="top-center" z-index="z-[65]" />

    {{-- Dialog --}}
    <x-dialog z-index="z-[65]" blur="sm" />

    {{-- Content --}}
    <main class="flex-grow">
        @yield('content')
    </main>


    {{-- Footer --}}
    @livewire('main.includes.footer')

    {{-- Livewire scripts --}}
    @livewireScripts

    {{-- Wire UI --}}
    <wireui:scripts />

    {{-- Core --}}
    @if (App::environment('local'))
        <script defer src="{{ mix('js/app.js') }}"></script>
        <script defer src="{{ url('js/utils.js?v=1.3.1') }}"></script>
        <script src="{{ url('js/components.js?v=1.3.1') }}"></script>
    @else
        <script defer src="https://hustlebucket.s3.amazonaws.com/public/js/app.js"></script>
        <script defer src="https://hustlebucket.s3.amazonaws.com/public/js/utils.js"></script>
        <script src="https://hustlebucket.s3.amazonaws.com/public/js/components.js"></script>
    @endif

    {{-- Custom JS codes --}}
    <script defer>
        document.addEventListener("DOMContentLoaded", function() {

            jQuery.event.special.touchstart = {
                setup: function(_, ns, handle) {
                    this.addEventListener("touchstart", handle, {
                        passive: !ns.includes("noPreventDefault")
                    });
                }
            };
            jQuery.event.special.touchmove = {
                setup: function(_, ns, handle) {
                    this.addEventListener("touchmove", handle, {
                        passive: !ns.includes("noPreventDefault")
                    });
                }
            };
            jQuery.event.special.wheel = {
                setup: function(_, ns, handle) {
                    this.addEventListener("wheel", handle, {
                        passive: true
                    });
                }
            };
            jQuery.event.special.mousewheel = {
                setup: function(_, ns, handle) {
                    this.addEventListener("mousewheel", handle, {
                        passive: true
                    });
                }
            };

            // Refresh
            window.addEventListener('refresh', () => {
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
    </script>

    {{-- Custom scripts --}}
    @stack('scripts')
</body>

</html>
