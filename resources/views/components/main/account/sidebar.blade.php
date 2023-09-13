@props(['class' => null])

<nav class="{{ $class ? $class : '' }} w-full">

    @php
        $link_active_class = 'bg-primary-100/25 border-primary-600 text-primary-700 dark:text-white hover:bg-primary-100/25 hover:text-primary-700';
        $link_basic_class = 'border-transparent text-gray-500 dark:text-gray-200 hover:bg-gray-50 dark:hover:bg-zinc-600 hover:text-gray-900';
        $icon_active_class = 'text-primary-600 dark:text-gray-50 group-hover:text-primary-600 dark:group-hover:text-white';
        $icon_basic_class = 'text-gray-400 dark:text-gray-300 dark:group-hover:text-white group-hover:text-gray-500';
        $id = uid();
    @endphp

    <div class="w-full border-b border-gray-100 dark:border-zinc-600">
        <div class="flex flex-col divide-y divide-gray-200 text-center dark:divide-zinc-600">
            <div class="flex flex-1 flex-col p-8">
                <a href="{{ url('profile', auth()->user()->username) }}">
                    <img class="lazy mx-auto h-20 w-20 flex-shrink-0 rounded-full object-cover" src="{{ placeholder_img() }}" data-src="{{ src(auth()->user()->avatar) }}"
                        alt="{{ auth()->user()->username }}">
                </a>
                <h3 class="mt-6 flex items-center justify-center text-sm font-medium text-gray-700 dark:text-white">
                    <span class="text-sm font-bold tracking-wider text-gray-700 dark:text-gray-100">{{ auth()->user()->username }}</span>
                    @if (auth()->user()->status === 'verified')
                        <img data-tooltip-target="tooltip-account-verified-{{ $id }}" class="-mt-0.5 h-4 w-4 ltr:ml-0.5 rtl:mr-0.5" src="{{ url('img/auth/verified-badge.svg') }}"
                            alt="{{ __('messages.t_account_verified') }}">
                        <div id="tooltip-account-verified-{{ $id }}" role="tooltip"
                            class="tooltip invisible absolute z-10 inline-block rounded-sm bg-gray-900 py-2 px-3 text-xs font-medium text-white opacity-0 shadow-sm dark:bg-gray-700">
                            {{ __('messages.t_account_verified') }}
                        </div>
                    @endif
                </h3>
                <dl class="mt-1 flex flex-grow flex-col justify-between">
                    <dd class="text-sm font-black text-gray-900 dark:text-white">@money(auth()->user()->balance_available, settings('currency')->code, true)</dd>
                    <dd class="mt-3">
                        @if (auth()->user()->account_type === 'seller')
                            <a href="{{ url('seller/home') }}" class="rounded-full bg-green-100 px-4 py-1 text-xs font-semibold text-green-800">
                                {{ __('messages.t_seller_dashboard') }}
                            </a>
                        @else
                            <span class="rounded-full bg-blue-100 px-4 py-1 text-xs font-semibold text-blue-800">
                                {{ __('messages.t_buyer') }}
                            </span>
                        @endif
                    </dd>
                </dl>
            </div>
        </div>
    </div>

    <div class="border-b border-gray-100 dark:border-zinc-600">

        {{-- Account settings --}}
        <a href="{{ url('account/settings') }}"
            class="{{ Request::is('account/settings') ? $link_active_class : $link_basic_class }} group flex items-center px-5 py-3 text-sm font-medium ltr:border-l-4 rtl:border-r-4">

            {{-- icon --}}
            <svg xmlns="http://www.w3.org/2000/svg" class="{{ Request::is('account/settings') ? $icon_active_class : $icon_basic_class }} h-5 w-5 flex-shrink-0 ltr:-ml-1 ltr:mr-3 rtl:-mr-1 rtl:ml-3"
                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
            </svg>

            {{-- text --}}
            <span class="truncate text-sm font-semibold"> {{ __('messages.t_account_settings') }} </span>

        </a>

        {{-- Edit profile --}}
        <a href="{{ url('account/profile') }}"
            class="{{ Request::is('account/profile') ? $link_active_class : $link_basic_class }} group flex items-center px-5 py-3 text-sm font-medium ltr:border-l-4 rtl:border-r-4">

            {{-- icon --}}
            <svg xmlns="http://www.w3.org/2000/svg" class="{{ Request::is('account/profile') ? $icon_active_class : $icon_basic_class }} h-5 w-5 flex-shrink-0 ltr:-ml-1 ltr:mr-3 rtl:-mr-1 rtl:ml-3"
                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>

            {{-- text --}}
            <span class="truncate text-sm font-semibold"> {{ __('messages.t_edit_profile') }} </span>

        </a>

        {{-- Update password --}}
        <a href="{{ url('account/password') }}"
            class="{{ Request::is('account/password') ? $link_active_class : $link_basic_class }} group flex items-center px-5 py-3 text-sm font-medium ltr:border-l-4 rtl:border-r-4">

            {{-- icon --}}
            <svg xmlns="http://www.w3.org/2000/svg" class="{{ Request::is('account/password') ? $icon_active_class : $icon_basic_class }} h-5 w-5 flex-shrink-0 ltr:-ml-1 ltr:mr-3 rtl:-mr-1 rtl:ml-3"
                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
            </svg>

            {{-- text --}}
            <span class="truncate text-sm font-semibold"> {{ __('messages.t_update_password') }} </span>

        </a>

    </div>

    <div class="border-b border-gray-100 dark:border-zinc-600">

        {{-- My projects --}}
        @if (settings('projects')->is_enabled)
            <a href="{{ url('account/projects') }}"
                class="{{ Request::is('account/projects') ? $link_active_class : $link_basic_class }} group flex items-center px-5 py-3 text-sm font-medium ltr:border-l-4 rtl:border-r-4">

                {{-- icon --}}
                <svg class="{{ Request::is('account/projects') ? $icon_active_class : $icon_basic_class }} h-5 w-5 flex-shrink-0 ltr:-ml-1 ltr:mr-3 rtl:-mr-1 rtl:ml-3"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>

                {{-- text --}}
                <span class="truncate text-sm font-semibold"> {{ __('messages.t_my_projects') }} </span>

            </a>
        @endif

        {{-- Deposit --}}
        <a href="{{ url('account/deposit') }}"
            class="{{ Request::is('account/deposit') ? $link_active_class : $link_basic_class }} group flex items-center px-5 py-3 text-sm font-medium ltr:border-l-4 rtl:border-r-4">

            {{-- icon --}}
            <svg class="{{ Request::is('account/deposit') ? $icon_active_class : $icon_basic_class }} h-5 w-5 flex-shrink-0 ltr:-ml-1 ltr:mr-3 rtl:-mr-1 rtl:ml-3" xmlns="http://www.w3.org/2000/svg"
                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z" />
            </svg>

            {{-- text --}}
            <span class="truncate text-sm font-semibold"> {{ __('messages.t_deposit') }} </span>

        </a>

        {{-- My orders --}}
        <a href="{{ url('account/orders') }}"
            class="{{ Request::is('account/orders') ? $link_active_class : $link_basic_class }} group flex items-center px-5 py-3 text-sm font-medium ltr:border-l-4 rtl:border-r-4">

            {{-- icon --}}
            <svg xmlns="http://www.w3.org/2000/svg" class="{{ Request::is('account/orders') ? $icon_active_class : $icon_basic_class }} h-5 w-5 flex-shrink-0 ltr:-ml-1 ltr:mr-3 rtl:-mr-1 rtl:ml-3"
                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
            </svg>

            {{-- text --}}
            <span class="truncate text-sm font-semibold"> {{ __('messages.t_my_orders') }} </span>

        </a>

        {{-- My messages --}}
        <a href="{{ url('inbox') }}"
            class="{{ Request::is('inbox') ? $link_active_class : $link_basic_class }} group flex items-center px-5 py-3 text-sm font-medium ltr:border-l-4 rtl:border-r-4">

            {{-- icon --}}
            <svg xmlns="http://www.w3.org/2000/svg" class="{{ Request::is('inbox') ? $icon_active_class : $icon_basic_class }} h-5 w-5 flex-shrink-0 ltr:-ml-1 ltr:mr-3 rtl:-mr-1 rtl:ml-3"
                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
            </svg>

            {{-- text --}}
            <span class="truncate text-sm font-semibold"> {{ __('messages.t_my_messages') }} </span>

        </a>

        {{-- My reviews --}}
        <a href="{{ url('account/reviews') }}"
            class="{{ Request::is('account/reviews') ? $link_active_class : $link_basic_class }} group flex items-center px-5 py-3 text-sm font-medium ltr:border-l-4 rtl:border-r-4">

            {{-- icon --}}
            <svg xmlns="http://www.w3.org/2000/svg" class="{{ Request::is('account/reviews') ? $icon_active_class : $icon_basic_class }} h-5 w-5 flex-shrink-0 ltr:-ml-1 ltr:mr-3 rtl:-mr-1 rtl:ml-3"
                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
            </svg>

            {{-- text --}}
            <span class="truncate text-sm font-semibold"> {{ __('messages.t_my_reviews') }} </span>

        </a>

        {{-- My refunds --}}
        <a href="{{ url('account/refunds') }}"
            class="{{ Request::is('account/refunds') ? $link_active_class : $link_basic_class }} group flex items-center px-5 py-3 text-sm font-medium ltr:border-l-4 rtl:border-r-4">

            {{-- icon --}}
            <svg xmlns="http://www.w3.org/2000/svg" class="{{ Request::is('account/refunds') ? $icon_active_class : $icon_basic_class }} h-5 w-5 flex-shrink-0 ltr:-ml-1 ltr:mr-3 rtl:-mr-1 rtl:ml-3"
                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M16 15v-1a4 4 0 00-4-4H8m0 0l3 3m-3-3l3-3m9 14V5a2 2 0 00-2-2H6a2 2 0 00-2 2v16l4-2 4 2 4-2 4 2z" />
            </svg>

            {{-- text --}}
            <span class="truncate text-sm font-semibold"> {{ __('messages.t_my_refunds') }} </span>

        </a>

        {{-- Favorite list --}}
        <a href="{{ url('account/favorite') }}"
            class="{{ Request::is('account/favorite') ? $link_active_class : $link_basic_class }} group flex items-center px-5 py-3 text-sm font-medium ltr:border-l-4 rtl:border-r-4">

            {{-- icon --}}
            <svg xmlns="http://www.w3.org/2000/svg"
                class="{{ Request::is('account/favorite') ? $icon_active_class : $icon_basic_class }} h-5 w-5 flex-shrink-0 ltr:-ml-1 ltr:mr-3 rtl:-mr-1 rtl:ml-3" fill="none"
                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
            </svg>

            {{-- text --}}
            <span class="truncate text-sm font-semibold"> {{ __('messages.t_favorite_list') }} </span>

        </a>

        {{-- Notifications  --}}
        <a href="{{ url('account/notifications') }}"
            class="{{ Request::is('account/notifications') ? $link_active_class : $link_basic_class }} group flex items-center px-5 py-3 text-sm font-medium ltr:border-l-4 rtl:border-r-4">

            {{-- icon --}}
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                class="{{ Request::is('account/notifications') ? $icon_active_class : $icon_basic_class }} h-5 w-5 flex-shrink-0 ltr:-ml-1 ltr:mr-3 rtl:-mr-1 rtl:ml-3">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0M3.124 7.5A8.969 8.969 0 015.292 3m13.416 0a8.969 8.969 0 012.168 4.5" />
            </svg>


            {{-- text --}}
            <span class="truncate text-sm font-semibold"> {{ __('messages.t_notifications') }} </span>
        </a>

        {{-- Referral --}}
        <a href="{{ url('account/referral') }}"
            class="{{ Request::is('account/referral') ? $link_active_class : $link_basic_class }} group flex items-center px-5 py-3 text-sm font-medium ltr:border-l-4 rtl:border-r-4">

            {{-- icon --}}
            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="{{ Request::is('account/referral') ? $icon_active_class : $icon_basic_class }} h-5 w-5 flex-shrink-0 ltr:-ml-1 ltr:mr-3 rtl:-mr-1 rtl:ml-3" viewBox="0 0 16 16">
                <path d="M5.5 4.002h3.11c1.71 0 2.741.973 2.741 2.46 0 1.138-.667 1.94-1.495 2.24L11.5 12H9.98L8.52 8.924H6.836V12H5.5V4.002Zm1.335 1.09v2.777h1.549c.995 0 1.573-.463 1.573-1.36 0-.913-.596-1.417-1.537-1.417H6.835Z"></path>
                <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2Zm15 0a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2Z"></path>
            </svg>

            {{-- text --}}
            <span class="truncate text-sm font-semibold"> {{ __('Referral') }} </span>
        </a>
    </div>

    <div class="border-b border-gray-100 dark:border-zinc-600">

        {{-- Billing settings --}}
        <a href="{{ url('account/billing') }}"
            class="{{ Request::is('account/billing') ? $link_active_class : $link_basic_class }} group flex items-center px-5 py-3 text-sm font-medium ltr:border-l-4 rtl:border-r-4">

            {{-- icon --}}
            <svg xmlns="http://www.w3.org/2000/svg" class="{{ Request::is('account/billing') ? $icon_active_class : $icon_basic_class }} h-5 w-5 flex-shrink-0 ltr:-ml-1 ltr:mr-3 rtl:-mr-1 rtl:ml-3"
                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2" />
            </svg>

            {{-- text --}}
            <span class="truncate text-sm font-semibold"> {{ __('messages.t_billing_information') }} </span>

        </a>
    </div>

    {{-- Logout --}}
    <a href="{{ url('auth/logout') }}"
        class="{{ Request::is('account/logout') ? $link_active_class : $link_basic_class }} group flex items-center px-5 py-3 text-sm font-medium ltr:border-l-4 rtl:border-r-4">

        {{-- icon --}}
        <svg xmlns="http://www.w3.org/2000/svg" class="{{ Request::is('account/logout') ? $icon_active_class : $icon_basic_class }} h-5 w-5 flex-shrink-0 ltr:-ml-1 ltr:mr-3 rtl:-mr-1 rtl:ml-3"
            fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
        </svg>

        {{-- text --}}
        <span class="truncate text-sm font-semibold"> {{ __('messages.t_logout') }} </span>

    </a>

</nav>
