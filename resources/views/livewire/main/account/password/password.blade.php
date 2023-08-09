<main class="w-full">
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

                            {{-- password --}}
                            <li aria-current="page">
                                <div class="flex items-center">
                                    <svg aria-hidden="true" class="w-4 h-4 text-gray-400 rtl:rotate-180"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="mx-1 text-sm font-medium text-gray-400 md:mx-2 dark:text-zinc-400">
                                        @lang('messages.t_change_password')
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
                                {{ __('messages.t_change_password') }}</h2>
                            <p class="mt-1 text-sm text-gray-500 dark:text-gray-300">
                                {{ __('messages.t_change_password_subtitle') }}</p>
                        </div>

                        {{-- Section content --}}
                        <div class="grid grid-cols-12 md:gap-x-8 gap-y-8 mb-6">

                            {{-- Current password --}}
                            <div class="col-span-12">
                                <x-forms.text-input label="{{ __('messages.t_current_password') }}"
                                    placeholder="{{ __('messages.t_enter_current_password') }}" model="current_password"
                                    type="password" icon="lock" />
                            </div>

                            {{-- New password --}}
                            <div class="col-span-12 md:col-span-6">
                                <x-forms.text-input label="{{ __('messages.t_new_password') }}"
                                    placeholder="{{ __('messages.t_enter_new_password') }}" model="new_password"
                                    type="password" icon="lock" />
                            </div>

                            {{-- Password confirmation --}}
                            <div class="col-span-12 md:col-span-6">
                                <x-forms.text-input label="{{ __('messages.t_password_confirmation') }}"
                                    placeholder="{{ __('messages.t_enter_password_confirmation') }}"
                                    model="new_password_confirmation" type="password" icon="lock" />
                            </div>

                        </div>

                    </div>

                    {{-- Actions --}}
                    <div class="py-4 px-4 flex justify-end sm:px-6 bg-gray-50 dark:bg-zinc-700">
                        <x-forms.button action="update" text="{{ __('messages.t_update') }}" />
                    </div>

                </div>

            </div>
        </div>
    </div>
</main>
