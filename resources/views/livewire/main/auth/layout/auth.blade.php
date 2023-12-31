<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ config()->get('direction') }}">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Generate seo tags --}}
    {!! SEO::generate() !!}

    {{-- Favicon --}}
    <link rel="icon" type="image/png" href="{{ src(settings('general')->favicon_id) }}" />

    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    {{-- Livewire styles --}}
    @livewireStyles

    {{-- Styles --}}
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    {{-- Custom fonts --}}
    {!! settings('appearance')->font_link !!}

    {{-- Custom css --}}
    <style>
        :root {
            --color-primary: {{ settings('appearance')->colors['primary'] }};
            --color-primary-h: {{ hex2hsl(settings('appearance')->colors['primary'])[0] }};
            --color-primary-s: {{ hex2hsl(settings('appearance')->colors['primary'])[1] }}%;
            --color-primary-l: {{ hex2hsl(settings('appearance')->colors['primary'])[2] }}%;
        }

        html {
            font-family: @php echo settings('appearance')->font_family
        @endphp
        ,
        sans-serif !important;
        }
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

    {{-- Custom head code --}}
    @if (settings('appearance')->custom_code_head_main_layout)
        {!! settings('appearance')->custom_code_head_main_layout !!}
    @endif

</head>

<body
    class="antialiased bg-gray-50 dark:bg-[#161616] text-gray-600 min-h-full flex flex-col application application-ltr overflow-x-hidden {{ app()->getLocale() === 'ar' ? 'application-ar' : '' }}">

    {{-- Notification --}}
    <x-notifications position="top-center" z-index="z-[60]" />

    {{-- Container --}}
    <div class="min-h-screen flex grow bg-slate-50 dark:bg-zinc-700">

        <div class="hidden w-full place-items-center lg:grid">
            <div class="relative flex flex-col justify-center w-full h-full px-2 py-40 bg-center bg-no-repeat bg-cover sm:py-48 sm:px-12"
                style="background-image: url('/img/auth/login-cover.jpg')">
                <span class="absolute inset-0 z-0 opacity-75 bg-gradient-to-b from-primary-500 to-primary-400"></span>

                {{-- Logo --}}
                <div class="fixed top-0 hidden p-6 ltr:left-0 rtl:right-0 lg:block lg:px-12">
                    <a href="{{ url('/') }}" class="flex items-center">
                        <x-icons.hustle-head-icon></x-icons.hustle-head-icon>
                    </a>
                </div>

                {{-- Copyrights --}}
                <div
                    class="fixed bottom-0 ltr:left-0 rtl:right-0 hidden p-6 lg:block lg:px-12 text-white font-normal text-[13px]">
                    {!! settings('footer')->copyrights !!}
                </div>

            </div>
        </div>
        <main class="flex w-full flex-col items-center bg-white dark:bg-navy-700 lg:max-w-md">
            @yield('content')
        </main>
    </div>

    {{-- Livewire scripts --}}
    @livewireScripts

    {{-- Wire UI --}}
    <wireui:scripts />

    {{-- Core Js --}}
    <script defer src="{{ mix('js/app.js') }}"></script>

    {{-- Helpers --}}
    <script src="{{ url('js/utils.js') }}"></script>

    {{-- Custom scripts --}}
    @stack('scripts')

    {{-- Custom footer code --}}
    @if (settings('appearance')->custom_code_footer_main_layout)
        {!! settings('appearance')->custom_code_footer_main_layout !!}
    @endif

</body>

</html>
