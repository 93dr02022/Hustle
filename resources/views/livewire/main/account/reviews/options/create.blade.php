<main class="w-full" x-data="window.DIFZGFMIayApDwK" x-init="initialize">
    <div class="px-4 sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-zinc-800 rounded-lg shadow overflow-hidden">
            <div
                class="divide-y divide-gray-200 dark:divide-zinc-700 lg:grid lg:grid-cols-12 lg:divide-y-0 lg:divide-x rtl:divide-x-reverse">

                {{-- Sidebar --}}
                <aside class="lg:col-span-3 py-6 hidden lg:block" wire:ignore>
                    <x-main.account.sidebar />
                </aside>

                {{-- Section content --}}
                <div class="divide-y divide-gray-200 dark:divide-zinc-700 lg:col-span-9">
                    {{-- Breadcrumbs --}}
                    <div class="my-1 p-5 ml-2 flex flex-col sm:flex-row sm:flex-wrap sm:space-x-6 rtl:space-x-reverse">
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

                            {{-- My reviews --}}
                            <li aria-current="page">
                                <div class="flex items-center">
                                    <svg aria-hidden="true" class="h-4 w-4 text-gray-400 rtl:rotate-180"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <a href="{{ url('account/reviews') }}"
                                        class="text-sm font-medium text-gray-700 hover:text-primary-600 ltr:ml-1 rtl:mr-1 dark:text-zinc-300 dark:hover:text-white md:ltr:ml-2 md:rtl:mr-2">
                                        @lang('messages.t_reviews')
                                    </a>
                                </div>
                            </li>
                            {{-- edit review --}}
                            <li aria-current="page">
                                <div class="flex items-center">
                                    <svg aria-hidden="true" class="w-4 h-4 text-gray-400 rtl:rotate-180"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="mx-1 text-sm font-medium text-gray-400 md:mx-2 dark:text-zinc-400">
                                        @lang('messages.t_edit_review')
                                    </span>
                                </div>
                            </li>

                        </ol>
                    </div>
                    {{-- Form --}}
                    <div class="py-6 px-4 sm:p-6 lg:pb-8 h-[calc(100%-80px)]">

                        {{-- Section header --}}
                        <div class="mb-14">
                            <h2 class="text-base leading-6 font-bold text-gray-900 dark:text-gray-100">
                                {{ __('messages.t_write_a_review') }}</h2>
                            <p class="mt-1 text-sm text-gray-500 dark:text-gray-300">
                                {{ __('messages.t_give_ur_opinion_about_this_item') }}</p>
                        </div>

                        {{-- Section content --}}
                        <div class="grid grid-cols-12 md:gap-x-8 gap-y-8 mb-6">

                            {{-- Review form --}}
                            <div class="col-span-12 md:col-span-6">

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
                                                'text-amber-400 dark:text-amber-400': rating >= star && hoverRating >=
                                                    star
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

                            {{-- Gig preview --}}
                            <div class="col-span-12 md:col-span-6">
                                @livewire('main.cards.gig', ['gig' => $item->gig])
                            </div>

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
