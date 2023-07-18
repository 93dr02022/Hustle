<footer class="bg-white border-t-[10px] border-[#F18522] dark:bg-zinc-800 px-4 sm:px-6 lg:px-44 pt-20 pb-10 lg:pb-20 relative z-10">
    <div class="container mx-auto px-4">

        {{-- Grid (PAGES) --}}
        <div class="grid grid-cols-1 md:gap-x-6 gap-y-6 mb-10 lg:grid-cols-12 md:grid-cols-6 sm:grid-cols-2">
            <div class="col-span-3">
                <div class="font-bold text-sm text-[#1D46F5] mb-4 uppercase dark:text-white tracking-widest">
                    {{ __('messages.t_footer_column_1') }}
                </div>

                <ul>
                    <li>
                        <a href="" target="_blank" class="block font-normal text-gray-400 hover:text-gray-600 hover:underline dark:text-gray-100 dark:hover:text-gray-50 text-sm mb-2">
                            About Us
                        </a>
                    </li>

                    <li>
                        <a href="" target="_blank" class="block font-normal text-gray-400 hover:text-gray-600 hover:underline dark:text-gray-100 dark:hover:text-gray-50 text-sm mb-2">
                            Careers
                        </a>
                    </li>

                    <li>
                        <a href="" target="_blank" class="block font-normal text-gray-400 hover:text-gray-600 hover:underline dark:text-gray-100 dark:hover:text-gray-50 text-sm mb-2">
                            Partnerships
                        </a>
                    </li>

                    <li>
                        <a href="" target="_blank" class="block font-normal text-gray-400 hover:text-gray-600 hover:underline dark:text-gray-100 dark:hover:text-gray-50 text-sm mb-2">
                            Press & News
                        </a>
                    </li>
                </ul>
            </div>

            {{-- Column 2 --}}
            <div class="col-span-3">
                <div class="font-bold text-sm text-[#1D46F5] mb-4 uppercase dark:text-white tracking-widest">
                    {{ __('messages.t_footer_column_2') }}
                </div>

                <ul>
                    <li>
                        <a href="" target="_blank" class="block font-normal text-gray-400 hover:text-gray-600 hover:underline dark:text-gray-100 dark:hover:text-gray-50 text-sm mb-2">
                            Intellectual Property Claims
                        </a>
                    </li>

                    <li>
                        <a href="" target="_blank" class="block font-normal text-gray-400 hover:text-gray-600 hover:underline dark:text-gray-100 dark:hover:text-gray-50 text-sm mb-2">
                            Investor Relations
                        </a>
                    </li>

                    <li>
                        <a href="" target="_blank" class="block font-normal text-gray-400 hover:text-gray-600 hover:underline dark:text-gray-100 dark:hover:text-gray-50 text-sm mb-2">
                            Privacy Policy
                        </a>
                    </li>

                    <li>
                        <a href="" target="_blank" class="block font-normal text-gray-400 hover:text-gray-600 hover:underline dark:text-gray-100 dark:hover:text-gray-50 text-sm mb-2">
                            Terms of service
                        </a>
                    </li>
                </ul>
            </div>

            {{-- Column 3 --}}
            <div class="col-span-3">
                <div class="font-bold text-sm text-[#1D46F5] mb-4 uppercase dark:text-white tracking-widest">
                    {{ __('messages.t_footer_column_3') }}
                </div>

                <ul>
                    <li>
                        <a href="" target="_blank" class="block font-normal text-gray-400 hover:text-gray-600 hover:underline dark:text-gray-100 dark:hover:text-gray-50 text-sm mb-2">
                            Get Inspired
                        </a>
                    </li>

                    <li>
                        <a href="" target="_blank" class="block font-normal text-gray-400 hover:text-gray-600 hover:underline dark:text-gray-100 dark:hover:text-gray-50 text-sm mb-2">
                            Get CorrectHustle
                        </a>
                    </li>

                    <li>
                        <a href="" target="_blank" class="block font-normal text-gray-400 hover:text-gray-600 hover:underline dark:text-gray-100 dark:hover:text-gray-50 text-sm mb-2">
                            Learn
                        </a>
                    </li>

                    <li>
                        <a href="" target="_blank" class="block font-normal text-gray-400 hover:text-gray-600 hover:underline dark:text-gray-100 dark:hover:text-gray-50 text-sm mb-2">
                            Hustle Workspace
                        </a>
                    </li>
                </ul>
            </div>

            {{-- Column 4 --}}
            <div class="col-span-3">
                <div class="font-bold text-sm text-[#1D46F5] mb-4 uppercase dark:text-white tracking-widest">
                    {{ __('messages.t_footer_column_4') }}
                </div>

                <ul>
                    <li>
                        <a href="" target="_blank" class="block font-normal text-gray-400 hover:text-gray-600 hover:underline dark:text-gray-100 dark:hover:text-gray-50 text-sm mb-2">
                            Contact CorrectHustle
                        </a>
                    </li>

                    <li>
                        <a href="" target="_blank" class="block font-normal text-gray-400 hover:text-gray-600 hover:underline dark:text-gray-100 dark:hover:text-gray-50 text-sm mb-2">
                            Trust & Safety
                        </a>
                    </li>
                </ul>

                <div class="mt-10 grid grid-cols-1 gap-y-4">
                    {{-- Dark/Light mode --}}
                    @if (settings('appearance')->is_theme_switcher && current_theme() === 'light')
                        <button wire:click="switchTheme" wire:loading.attr="disabled"
                            class="inline-flex items-center px-2.5 py-2 border border-gray-300 shadow-sm text-xs font-medium rounded text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-600  disabled:cursor-not-allowed max-w-fit">

                            {{-- Loading indicator --}}
                            <div wire:loading wire:target="switchTheme">
                                <x-icons.circle-loading></x-icons.circle-loading>
                            </div>

                            {{-- Dark mode icon --}}
                            <div wire:loading.remove wire:target="switchTheme">
                                <x-icons.dark-icon></x-icons.dark-icon>
                            </div>

                            <span class="text-xs font-semibold text-gray-500 whitespace-nowrap">@lang('messages.t_dark_mode')</span>

                        </button>
                    @elseif (settings('appearance')->is_theme_switcher && current_theme() === 'dark')
                        <button wire:click="switchTheme" wire:loading.attr="disabled"
                            class="inline-flex items-center px-2.5 py-2 border border-gray-300 shadow-sm text-xs font-medium rounded text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-600  disabled:cursor-not-allowed dark:bg-zinc-600 dark:text-gray-300 dark:border-zinc-600 dark:focus:ring-offset-zinc-600 dark:hover:bg-zinc-800 max-w-fit">

                            {{-- Loading indicator --}}
                            <div wire:loading wire:target="switchTheme">
                                <x-icons.circle-loading></x-icons.circle-loading>
                            </div>

                            {{-- Dark mode icon --}}
                            <div wire:loading.remove wire:target="switchTheme">
                                <x-icons.light-icon></x-icons.light-icon>
                            </div>

                            <span class="text-xs font-semibold text-gray-300 whitespace-nowrap">@lang('messages.t_light_mode')</span>

                        </button>
                    @endif

                </div>

            </div>

        </div>

        <div class="grid md:flex justify-center md:justify-between items-center border-t-2 border-gray-50 dark:border-zinc-700 pt-4">

            {{-- Logo --}}
            <div class="flex items-center justify-center md:justify-items-start mb-4 md:mb-0">
                <div>
                    <a href="{{ url('/') }}" class="h-full">
                        <x-icons.hustle-icon></x-icons.hustle-icon>
                    </a>
                </div>
            </div>

            {{-- Social media --}}
            <div>
                <div class="flex items-center space-x-2">
                    {{-- Facebook --}}
                    <a href="" target="_blank" data-tooltip-target="tooltip-follow-us-facebook"
                        class="w-10 h-10 flex items-center justify-center bg-gray-100 dark:bg-zinc-600 rounded-md group rtl:ml-2">
                        <x-icons.facebook-icon></x-icons.facebook-icon>
                    </a>
                    <div id="tooltip-follow-us-facebook" role="tooltip"
                        class="inline-block absolute invisible z-10 py-2 px-3 text-xs font-medium text-white bg-gray-900 rounded-sm shadow-sm opacity-0 tooltip dark:bg-gray-700">
                        {{ __('messages.t_follow_us_on_facebook') }}
                    </div>

                    {{-- Twitter --}}
                    <a href="" target="_blank" data-tooltip-target="tooltip-follow-us-twitter" class="w-10 h-10 flex items-center justify-center bg-gray-100 dark:bg-zinc-600 rounded-md group">
                        <x-icons.twitter></x-icons.twitter>
                    </a>
                    <div id="tooltip-follow-us-twitter" role="tooltip"
                        class="inline-block absolute invisible z-10 py-2 px-3 text-xs font-medium text-white bg-gray-900 rounded-sm shadow-sm opacity-0 tooltip dark:bg-gray-700">
                        {{ __('messages.t_follow_us_on_twitter') }}
                    </div>

                    {{-- Instagram --}}
                    <a href="" target="_blank" data-tooltip-target="tooltip-follow-us-instagram"
                        class="w-10 h-10 flex items-center justify-center bg-gray-100 dark:bg-zinc-600 rounded-md group">
                        <x-icons.instagram></x-icons.instagram>
                    </a>
                    <div id="tooltip-follow-us-instagram" role="tooltip"
                        class="inline-block absolute invisible z-10 py-2 px-3 text-xs font-medium text-white bg-gray-900 rounded-sm shadow-sm opacity-0 tooltip dark:bg-gray-700">
                        {{ __('messages.t_follow_us_on_instagram') }}
                    </div>

                    {{-- Linkedin --}}
                    <a href="" target="_blank" data-tooltip-target="tooltip-follow-us-linkedin" class="w-10 h-10 flex items-center justify-center bg-gray-100 dark:bg-zinc-600 rounded-md group">
                        <x-icons.linkedin-icon></x-icons.linkedin-icon>
                    </a>
                    <div id="tooltip-follow-us-linkedin" role="tooltip"
                        class="inline-block absolute invisible z-10 py-2 px-3 text-xs font-medium text-white bg-gray-900 rounded-sm shadow-sm opacity-0 tooltip dark:bg-gray-700">
                        {{ __('messages.t_follow_us_on_linkedin') }}
                    </div>
                </div>
            </div>

        </div>

        {{-- Copyrights & Quick links --}}
        <div class="text-center mt-10">

            {{-- Copyrights --}}
            <div class="text-gray-400 dark:text-gray-200 font-normal text-sm mb-2">
                &copy; 2023 CorrectHustle. All rights reserved
            </div>

            {{-- Quick links --}}
            <div class="flex space-x-4 justify-center rtl:space-x-reverse">
                {{-- Contact --}}
                <a href="{{ url('help/contact') }}" class="text-xs font-medium uppercase text-gray-600 dark:text-gray-400 dark:hover:text-gray-100 hover:underline">
                    {{ __('messages.t_contact_us') }}
                </a>

                {{-- Privacy policy --}}
                <a href="{{ url('/') }}" class="text-xs font-medium uppercase text-gray-600 dark:text-gray-400 dark:hover:text-gray-100 hover:underline">
                    {{ __('messages.t_privacy_policy') }}
                </a>

                {{-- Terms --}}
                <a href="{{ url('/') }}" class="text-xs font-medium uppercase text-gray-600 dark:text-gray-400 dark:hover:text-gray-100 hover:underline">
                    {{ __('messages.t_terms_of_service') }}
                </a>

                {{-- Blog --}}
                <a href="{{ url('blog') }}" class="text-xs font-medium uppercase text-gray-600 dark:text-gray-400 dark:hover:text-gray-100 hover:underline">
                    {{ __('messages.t_blog') }}
                </a>

            </div>

        </div>

    </div>
</footer>
