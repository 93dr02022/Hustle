<main class="w-full" x-data="window.MainAccountSettingsAlpine">
    <div class="sm:px-6 lg:px-8">
        <div class="overflow-hidden rounded-lg bg-white shadow dark:bg-zinc-800">
            <div
                class="divide-y divide-gray-200 rtl:divide-x-reverse dark:divide-zinc-700 lg:grid lg:grid-cols-12 lg:divide-y-0 lg:divide-x">

                {{-- Sidebar --}}
                <aside class="hidden py-6 lg:col-span-3 lg:block" wire:ignore>
                    <x-main.account.sidebar />
                </aside>

                {{-- Section content --}}
                <div class="divide-y divide-gray-200 dark:divide-zinc-700 lg:col-span-9">

                    {{-- Form --}}
                    <div class="h-[calc(100%-80px)] py-6 px-4 sm:p-6 lg:pb-8">

                        {{-- Section header --}}
                        <div class="mb-14">
                            <h2 class="text-base font-bold leading-6 text-gray-900 dark:text-gray-100">
                                {{ __('messages.t_notifications_settings') }}</h2>
                            <p class="mt-1 text-sm text-gray-500 dark:text-gray-300">
                                {{ __('messages.t_notifications') }}</p>
                        </div>
                        <!--
                        {{-- Email Notification --}}
                        <h2 class="mb-10 border-b pb-3 text-base font-bold leading-6 text-gray-900 dark:text-gray-100">
                            {{ __('Email Notifications') }}
                        </h2>
                        <div class="mb-6 grid grid-cols-12 gap-y-8 md:gap-x-8">
                            {{-- Push order updates --}}
                            <div class="col-span-12 md:col-span-6">
                                <x-forms.checkbox label="{{ __('Order Updates') }}" model="push_order_updates" />
                            </div>
                        </div>
                        <div class="mb-6 grid grid-cols-12 gap-y-8 md:gap-x-8">
                            {{-- Push inbox updates --}}
                            <div class="col-span-12 md:col-span-6">
                                <x-forms.checkbox label="{{ __('Inbox Messages') }}" model="push_inbox_messages" />
                            </div>
                        </div>
                        {{-- Actions --}}
                        <div class="flex justify-end bg-gray-50 py-4 px-4 dark:bg-zinc-700 sm:px-6">
                            <x-forms.button action="updateEmailNotificationPreference"
                                text="{{ __('messages.t_update') }}" />
                            <button class="hidden" id="updateEmailNotificationPreferenceButton"
                                x-ref="modalEmailButton"></button>
                        </div>
                    -->
                        {{-- Push Notification --}}
                        <h2 class="mb-10 border-b pb-3 text-base font-bold leading-6 text-gray-900 dark:text-gray-100">
                            {{ __('Push Notifications') }}
                        </h2>

                        <div class="mb-6 grid grid-cols-12 gap-y-8 md:gap-x-8">
                            {{-- Push order updates --}}
                            <div class="col-span-12 md:col-span-6">
                                <x-forms.checkbox label="{{ __('Order Updates') }}" model="push_order_updates" />
                            </div>
                        </div>
                        <div class="mb-6 grid grid-cols-12 gap-y-8 md:gap-x-8">
                            {{-- Push inbox updates --}}
                            <div class="col-span-12 md:col-span-6">
                                <x-forms.checkbox label="{{ __('Inbox Messages') }}" model="push_inbox_messages" />
                            </div>
                        </div>

                        {{-- Actions --}}
                        <div class="flex justify-end bg-gray-50 py-4 px-4 dark:bg-zinc-700 sm:px-6">
                            <x-forms.button
                                action="updateNotificationPreference" text="{{ __('messages.t_update') }}" />
                            <button class="hidden" id="updateNotificationPreferenceButton" x-ref="modalButton"></button>
                        </div>
                    </div>
                </div>
            </div>
</main>
