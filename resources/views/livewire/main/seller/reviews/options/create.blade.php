<main class="w-full" x-data="window.DIFZGFMIayApDwK" x-init="initialize">
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
                            {{-- My Reviews --}}
                            <li aria-current="page">
                                <div class="flex items-center">
                                    <svg aria-hidden="true" class="w-4 h-4 text-gray-400 rtl:rotate-180"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <a href="{{ url('seller/reviews') }}"
                                        class="ltr:ml-1 rtl:mr-1 text-sm font-medium text-gray-700 hover:text-primary-600 md:ltr:ml-2 md:rtl:mr-2 dark:text-zinc-300 dark:hover:text-white">
                                        @lang('messages.t_reviews')
                                    </a>
                                </div>
                            </li>
                            {{-- Create reviews --}}
                            <li aria-current="page">
                                <div class="flex items-center">
                                    <svg aria-hidden="true" class="w-4 h-4 text-gray-400 rtl:rotate-180"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="mx-1 text-sm font-medium text-gray-400 md:mx-2 dark:text-zinc-400">
                                        @lang('messages.t_create_reviews')
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

    {{-- Section content --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-12">
        <div class="divide-y divide-gray-200 dark:divide-zinc-700 lg:col-span-9">

            {{-- Form --}}
            <div class="py-6 px-4 sm:p-6 lg:pb-8 h-[calc(100%-80px)]">

                {{-- Section header --}}
                <div class="mb-14">
                    <h2 class="text-base leading-6 font-bold text-gray-900 dark:text-gray-100">
                        {{ __('messages.t_reply_review_to_buyer') }}</h2>
                    <p class="mt-1 text-sm text-gray-500 dark:text-gray-300">
                        {{ __('messages.t_give_ur_opinion_about_this_item') }}</p>
                </div>



                {{-- Section content --}}
                <div class="grid grid-cols-12 md:gap-x-8 gap-y-8 mb-6">
                    {{-- Buyers profile card --}}
                    @if ($review)
                        <div class="flex items-center shadow-sm border  col-span-12 md:col-span-5">

                            <div class="w-full">
                                <div class="bg-white  rounded-lg py-4">
                                    <div class="photo-wrapper p-2">

                                            <img class="w-32 h-32 rounded-full mx-auto"
                                            src="{{asset('img/default/default-placeholder.jpg')}}"
                                            alt="{{$review->user->username}}">


                                    </div>
                                    <div class="p-2">
                                        <h3 class="text-center text-xl text-gray-900 font-medium leading-8">{{$review->user->first_name}} {{ $review->user->last_name}}</h3>
                                        <div class="text-center text-gray-400 text-xs font-semibold">
                                            <p>{{$review->user->account_type}}</p>
                                        </div>
                                        <table class="text-xs my-3">
                                            <tbody>
                                                <tr>
                                                    <td class="px-2 py-2 text-gray-500 font-semibold">Country</td>
                                                    <td class="px-2 py-2">{{$review->user->country->name != null ? $review->user->country->name : 'null' }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="px-2 py-2 text-gray-500 font-semibold">State</td>
                                                    <td class="px-2 py-2">{{$review->user->state->name != null ? $review->user->state->name: 'null' }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="px-2 py-2 text-gray-500 font-semibold">Address</td>
                                                    <td class="px-2 py-2">{{$review->user->address != null ? $review->user->address: 'null' }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="px-2 py-2 text-gray-500 font-semibold">Email</td>
                                                    <td class="px-2 py-2">{{$review->user->email}}</td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <div class="text-center my-3">
                                            <a class="text-xs text-indigo-500 italic hover:underline hover:text-indigo-600 font-medium"
                                                href="{{url('profile/'.$review->user->username)}}">View Profile</a>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    @endif


                    {{-- Gig preview --}}
                    <div class="col-span-12 md:col-span-7">
                        @livewire('main.cards.gig', ['gig' => $review->gig])
                    </div>
                    {{-- Review form --}}
                    <div class="col-span-12 md:col-span-12">

                        {{-- Rating --}}
                        <div class="mb-4 w-full">
                            <span
                                class="block text-xs font-semibold text-gray-700 dark:text-gray-50 mb-2">{{ __('messages.t_rating') }}</span>
                            <template x-for="(star, index) in ratings" :key="index">
                                <button @click="rate(star)" @mouseover="hoverRating= star"
                                    @mouseleave="hoverRating= rating" aria-hidden="true"
                                    class="rounded-sm text-gray-400 fill-current focus:outline-none
                        					focus:shadow-outline p-1 w-6 m-0 cursor-pointer"
                                    :class="{
                                        'text-yellow-300 dark:text-yellow-300': hoverRating >= star,
                                        'text-amber-400 dark:text-amber-400': rating >= star && hoverRating >= star
                                    }">
                                    <svg class="w-6 transition duration-150" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20" fill="currentColor" style="color: inherit">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0
                        							00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364
                        							1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175
                        							0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0
                        							00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0
                        							00.951-.69l1.07-3.292z" />
                                    </svg>
                                </button>
                            </template>
                        </div>

                        {{-- Message --}}
                        <div class="w-full mb-6">
                            <x-forms.textarea :label="__('messages.t_message')" :placeholder="__('messages.t_enter_your_review_message')" model="message" rows="8"
                                icon="calendar-text" />
                        </div>

                        {{-- Create --}}
                        <div class="w-full">
                            <x-forms.button action="create" :text="__('messages.t_submit_ur_review')" :block="true" />
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </div>

</main>

@push('scripts')
    {{-- AlpineJs --}}
    <script>
        function DIFZGFMIayApDwK() {
            return {

                rating: 0,
                hoverRating: 0,
                ratings: [1, 2, 3, 4, 5],
                rate(amount) {
                    if (this.rating == amount) {
                        this.rating = 0;
                    } else {
                        this.rating = amount;
                        @this.set('rating', amount);
                    }
                },

                // Init
                initialize() {}

            }
        }
        window.DIFZGFMIayApDwK = DIFZGFMIayApDwK();
    </script>
@endpush
