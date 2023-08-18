<div class="w-full">

    {{-- Loading --}}
    <x-forms.loading />

    {{-- Heading --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-12 mb-16">
        <div class="mx-auto max-w-7xl">
            <div class="lg:flex lg:items-center lg:justify-between">

                <div class="min-w-0 flex-1">

                    {{-- Section heading --}}
                    <h2
                        class="text-lg font-bold leading-7 text-zinc-700 dark:text-gray-50 sm:truncate sm:text-xl sm:tracking-tight">
                        @lang('messages.t_reviews')
                    </h2>

                    {{-- Breadcrumbs --}}
                    <div class="mt-3 flex flex-col sm:flex-row sm:flex-wrap sm:space-x-6 rtl:space-x-reverse">
                        <ol class="inline-flex items-center mb-3 space-x-1 md:space-x-3 md:rtl:space-x-reverse sm:mb-0">

                            {{-- Main home --}}
                            <li>
                                <div class="flex items-center">
                                    <a href="{{ url('/') }}"
                                        class="text-sm font-medium text-gray-700 hover:text-primary-600 dark:text-zinc-300 dark:hover:text-white">
                                        @lang('messages.t_home')
                                    </a>
                                </div>
                            </li>

                            {{-- My dashboard --}}
                            <li aria-current="page">
                                <div class="flex items-center">
                                    <svg aria-hidden="true" class="w-4 h-4 text-gray-400 rtl:rotate-180"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <a href="{{ url('seller/home') }}"
                                        class="ltr:ml-1 rtl:mr-1 text-sm font-medium text-gray-700 hover:text-primary-600 md:ltr:ml-2 md:rtl:mr-2 dark:text-zinc-300 dark:hover:text-white">
                                        @lang('messages.t_my_dashboard')
                                    </a>
                                </div>
                            </li>

                            {{-- Reviews --}}
                            <li aria-current="page">
                                <div class="flex items-center">
                                    <svg aria-hidden="true" class="w-4 h-4 text-gray-400 rtl:rotate-180"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="mx-1 text-sm font-medium text-gray-400 md:mx-2 dark:text-zinc-400">
                                        @lang('messages.t_reviews')
                                    </span>
                                </div>
                            </li>

                        </ol>
                    </div>

                </div>

                {{-- Actions --}}
                <div class="mt-5 flex lg:mt-0 lg:ltr::ml-4 lg:rtl:mr-4">

                    {{-- Switch to buying --}}
                    <span class="block">
                        <a href="{{ url('/') }}"
                            class="inline-flex items-center rounded-sm border border-gray-300 bg-white px-4 py-2 text-[13px] font-semibold text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-primary-600 focus:ring-offset-2 dark:bg-zinc-800 dark:border-zinc-800 dark:text-zinc-100 dark:hover:bg-zinc-900 dark:focus:ring-offset-zinc-900 dark:focus:ring-zinc-900">
                            @lang('messages.t_switch_to_buying')
                        </a>
                    </span>

                </div>

            </div>
        </div>
    </div>

    {{-- Content --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-12">
        <div
            class="mt-8 overflow-x-auto overflow-y-hidden sm:mt-0 scrollbar-thin scrollbar-thumb-gray-300 scrollbar-track-gray-100 dark:scrollbar-thumb-zinc-800 dark:scrollbar-track-zinc-600">
            <table class="w-full text-left border-spacing-y-[10px] border-separate sm:mt-2">
                <thead class="">
                    <tr class="bg-slate-200 dark:bg-zinc-600">

                        {{-- Gig --}}
                        <th
                            class="font-bold tracking-wider text-gray-600 px-5 py-4.5 border-b-0 whitespace-nowrap text-xs uppercase dark:text-zinc-300 first:ltr:rounded-l-md last:ltr:rounded-r-md first:rtl:rounded-r-md last:rtl:rounded-l-md rtl:text-right">
                            @lang('messages.t_gig')</th>

                        {{-- Buyer --}}
                        <th
                            class="font-bold tracking-wider text-gray-600 px-5 py-4.5 border-b-0 whitespace-nowrap text-xs uppercase dark:text-zinc-300 first:ltr:rounded-l-md last:ltr:rounded-r-md first:rtl:rounded-r-md last:rtl:rounded-l-md rtl:text-right">
                            @lang('messages.t_buyer')</th>

                        {{-- Rating --}}
                        <th
                            class="font-bold tracking-wider text-gray-600 px-5 py-4.5 text-center border-b-0 whitespace-nowrap text-xs uppercase dark:text-zinc-300 first:ltr:rounded-l-md last:ltr:rounded-r-md first:rtl:rounded-r-md last:rtl:rounded-l-md">
                            @lang('messages.t_rating')</th>

                        {{-- Date --}}
                        <th
                            class="font-bold tracking-wider text-gray-600 px-5 py-4.5 text-center border-b-0 whitespace-nowrap text-xs uppercase dark:text-zinc-300 first:ltr:rounded-l-md last:ltr:rounded-r-md first:rtl:rounded-r-md last:rtl:rounded-l-md">
                            @lang('messages.t_date')</th>

                        {{-- Options --}}
                        <th
                            class="font-bold tracking-wider text-gray-600 px-5 py-4.5 text-center border-b-0 whitespace-nowrap text-xs uppercase dark:text-zinc-300 first:ltr:rounded-l-md last:ltr:rounded-r-md first:rtl:rounded-r-md last:rtl:rounded-l-md">
                            @lang('messages.t_options')</th>

                    </tr>
                </thead>
                <thead>
                    @forelse ($reviews as $review)
                        <tr class="intro-x shadow-sm bg-white dark:bg-zinc-800 rounded-md h-16"
                            wire:key="freelancer-dashboard-reviews-{{ $review->uid }}">

                            {{-- Gig --}}
                            <td
                                class="px-5 py-3 first:ltr:rounded-l-md last:ltr:rounded-r-md first:rtl:rounded-r-md last:rtl:rounded-l-md w-52 rtl:text-right">
                                <div class="flex items-center space-x-3 rtl:space-x-reverse">

                                    {{-- Thumbnail --}}
                                    <div class="h-10 w-10">
                                        <img class="w-full h-full rounded-md object-cover lazy"
                                            src="{{ placeholder_img() }}"
                                            data-src="{{ src($review->gig->image_thumb_id) }}"
                                            alt="{{ $review->gig->title }}">
                                    </div>

                                    {{-- Gig details --}}
                                    <div>

                                        {{-- Title --}}
                                        <a href="{{ url('service', $review->gig->slug) }}"
                                            class="font-medium whitespace-nowrap truncate block max-w-[240px] hover:text-primary-600 dark:text-white text-sm"
                                            title="{{ $review->gig->title }}">
                                            {{ $review->gig->title }}
                                        </a>

                                        {{-- Category --}}
                                        <div class="text-slate-500 text-xs whitespace-nowrap mt-2">
                                            <nav class="flex" aria-label="Breadcrumb">
                                                <ol role="list"
                                                    class="flex items-center space-x-1 rtl:space-x-reverse">

                                                    {{-- Parent category --}}
                                                    <li>
                                                        <div class="flex items-center">
                                                            <a href="{{ url('categories', $review->gig->category->slug) }}"
                                                                target="_blank"
                                                                class="text-xs font-normal text-gray-500 hover:text-gray-700 dark:text-gray-300 dark:hover:text-gray-100">{{ $review->gig->category->name }}</a>
                                                        </div>
                                                    </li>

                                                    {{-- Subcategory --}}
                                                    <li>
                                                        <div class="flex items-center">

                                                            {{-- Chevron --}}
                                                            <svg class="flex-shrink-0 h-4 w-4 text-gray-400 rtl:rotate-180"
                                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                                fill="currentColor" aria-hidden="true">
                                                                <path fill-rule="evenodd"
                                                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                                                    clip-rule="evenodd" />
                                                            </svg>

                                                            <a href="{{ url('categories/' . $review->gig->category->slug . '/' . $review->gig->subcategory->slug) }}"
                                                                target="_blank"
                                                                class="ltr:ml-1 rtl:mr-1 text-xs font-normal text-gray-500 hover:text-gray-700 dark:text-gray-300 dark:hover:text-gray-100"
                                                                aria-current="page">{{ $review->gig->subcategory->name }}</a>

                                                        </div>
                                                    </li>

                                                </ol>
                                            </nav>
                                        </div>

                                    </div>

                                </div>
                            </td>

                            {{-- Buyer --}}
                            <td
                                class="px-5 py-3 first:ltr:rounded-l-md last:ltr:rounded-r-md first:rtl:rounded-r-md last:rtl:rounded-l-md w-44 rtl:text-right">
                                <div class="flex items-center">
                                    <div class="h-10 w-10 flex-shrink-0">
                                        <img class="h-10 w-10 rounded-full lazy object-cover object-center"
                                            src="{{ placeholder_img() }}"
                                            data-src="{{ src($review->user->avatar_id) }}"
                                            alt="{{ $review->user->username }}">
                                    </div>
                                    <div class="ltr:ml-4 rtl:mr-4">
                                        <a href="{{ url('profile', $review->user->username) }}" target="_blank"
                                            class="font-medium text-gray-900 dark:text-gray-200 pb-1 hover:text-primary-600 block text-sm whitespace-nowrap">{{ $review->user->username }}</a>
                                        <div
                                            class="font-normal text-gray-500 dark:text-gray-300 text-xs whitespace-nowrap">
                                            @if ($review->user->fullname)
                                                {{ $review->user->fullname }}
                                            @else
                                                -
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </td>

                            {{-- Rating --}}
                            <td
                                class="px-5 py-3 first:ltr:rounded-l-md last:ltr:rounded-r-md first:rtl:rounded-r-md last:rtl:rounded-l-md text-center">
                                @if ($review->seen)
                                    <div>
                                        {!! render_star_rating($review->rating, '1rem', '1rem', '#d0d0d0') !!}
                                    </div>
                                @else
                                    <div class="flex items-center justify-center text-zinc-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                            class="w-6 h-6">
                                            <path
                                                d="M3.53 2.47a.75.75 0 00-1.06 1.06l18 18a.75.75 0 101.06-1.06l-18-18zM22.676 12.553a11.249 11.249 0 01-2.631 4.31l-3.099-3.099a5.25 5.25 0 00-6.71-6.71L7.759 4.577a11.217 11.217 0 014.242-.827c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113z" />
                                            <path
                                                d="M15.75 12c0 .18-.013.357-.037.53l-4.244-4.243A3.75 3.75 0 0115.75 12zM12.53 15.713l-4.243-4.244a3.75 3.75 0 004.243 4.243z" />
                                            <path
                                                d="M6.75 12c0-.619.107-1.213.304-1.764l-3.1-3.1a11.25 11.25 0 00-2.63 4.31c-.12.362-.12.752 0 1.114 1.489 4.467 5.704 7.69 10.675 7.69 1.5 0 2.933-.294 4.242-.827l-2.477-2.477A5.25 5.25 0 016.75 12z" />
                                        </svg>
                                    </div>
                                @endif
                            </td>

                            {{-- Date --}}
                            <td
                                class="px-5 py-3 first:ltr:rounded-l-md last:ltr:rounded-r-md first:rtl:rounded-r-md last:rtl:rounded-l-md text-center">
                                <span
                                    class="text-[13px] font-medium text-gray-700 dark:text-gray-400 whitespace-nowrap">
                                    {{ format_date($review->created_at) }}
                                </span>
                            </td>

                            {{-- Options --}}
                            <td
                                class="px-5 py-3 first:ltr:rounded-l-md last:ltr:rounded-r-md first:rtl:rounded-r-md last:rtl:rounded-l-md text-center">
                                <div class="flex justify-center items-center space-x-2 rtl:space-x-reverse">
                                    @if ($review->seen)
                                        {{-- Order details --}}
                                        <a href="{{ url('seller/reviews/preview/' . $review->uid) }}"
                                            class="inline-flex justify-center items-center border font-semibold focus:outline-none w-8 h-8 leading-5 text-sm rounded border-gray-300 bg-white text-gray-800 shadow-sm hover:text-gray-800 hover:bg-gray-100 hover:border-gray-300 hover:shadow focus:ring focus:ring-gray-500 focus:ring-opacity-25 active:bg-white active:border-white active:shadow-none dark:bg-zinc-700 dark:border-zinc-700 dark:hover:bg-zinc-900 dark:hover:border-zinc-900 dark:text-zinc-400 dark:hover:text-zinc-100"
                                            >
                                            <svg class="w-4 h-4" stroke="currentColor" fill="currentColor"
                                                stroke-width="0" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M4 6h2v2H4zm0 5h2v2H4zm0 5h2v2H4zm16-8V6H8.023v2H18.8zM8 11h12v2H8zm0 5h12v2H8z">
                                                </path>
                                            </svg>
                                        </a>
                                        <x-forms.tooltip id="tooltip-actions-review-details-{{ $review->uid }}"
                                            :text="__('messages.t_review_details')" />

                                            
                                    @else
                                        {{-- Order lock --}}
                                        <a href="{{ url('seller/reviews/create/' . $review->uid) }}"
                                            class="inline-flex justify-center items-center border font-semibold focus:outline-none w-8 h-8 leading-5 text-sm rounded border-gray-300 bg-white text-gray-800 shadow-sm hover:text-gray-800 hover:bg-gray-100 hover:border-gray-300 hover:shadow focus:ring focus:ring-gray-500 focus:ring-opacity-25 active:bg-white active:border-white active:shadow-none dark:bg-zinc-700 dark:border-zinc-700 dark:hover:bg-zinc-900 dark:hover:border-zinc-900 dark:text-zinc-400 dark:hover:text-zinc-100">
                                            <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                                <path fill-rule="evenodd"
                                                    d="M12 1.5a5.25 5.25 0 00-5.25 5.25v3a3 3 0 00-3 3v6.75a3 3 0 003 3h10.5a3 3 0 003-3v-6.75a3 3 0 00-3-3v-3c0-2.9-2.35-5.25-5.25-5.25zm3.75 8.25v-3a3.75 3.75 0 10-7.5 0v3h7.5z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </a>
                                        <x-forms.tooltip id="tooltip-actions-review-details-{{ $review->uid }}"
                                            :text="__('messages.t_unlock_to_review')" />
                                    @endif

                                </div>
                            </td>

                        </tr>
                    @empty
                        <tr>
                            <td colspan="5"
                                class="py-3 font-light text-sm text-gray-400 dark:text-zinc-200 text-center tracking-wide shadow-sm bg-white dark:bg-zinc-800 rounded-md">
                                @lang('messages.no_results_found')
                            </td>
                        </tr>
                    @endforelse
                </thead>
            </table>
        </div>
    </div>

    {{-- Pages --}}
    @if ($reviews->hasPages())
        <div class="flex justify-center pt-12">
            {!! $reviews->links('pagination::tailwind') !!}
        </div>
    @endif

</div>
