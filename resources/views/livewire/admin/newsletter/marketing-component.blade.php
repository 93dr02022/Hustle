    <div class="w-full rounded-lg bg-white shadow">

        <div class="divide-y divide-gray-200 dark:divide-zinc-700 lg:col-span-9">
            <div class="py-10 px-12">

                {{-- Section header --}}
                <div class="mb-14">
                    <div class="flex items-center justify-between">
                        <h2 class="text-sm font-bold leading-6 text-gray-900">Marketing</h2>
                        <button id="sendNotificationButton"
                            class="focus:shadow-outline flex cursor-pointer justify-center rounded bg-primary-600 py-4 px-8 text-[13px] font-semibold tracking-wide text-white focus:outline-none hover:bg-primary-700">New
                            Notification</button>
                    </div>
                    <p class="mt-1 text-xs text-gray-500">Send marketing notifications to users.</p>
                </div>
                <x-forms.modal placement="top" size="max-w-md" id="marketingModal" target="sendNotificationButton"
                    uid="sendNotificationButton">
                    <x-slot:title>
                        <div>Create Message</div>
                        </x-slot>

                        <x-slot:content>
                            <div class="col-span-12 md:col-span-6">
                                <div class="col-span-12">
                                    <x-forms.text-input label="{{ __('messages.t_title') }}"
                                        placeholder="{{ __('messages.t_title') }}" model="title" type="text" />
                                </div>
                                <div class="col-span-12">
                                    <x-forms.textarea label="{{ __('messages.t_message') }}"
                                        placeholder="{{ __('messages.t_message') }}" model="message" type="text" />
                                </div>
                            </div>
                            </x-slot>

                            <x-slot:footer>
                                <div>
                                    <x-forms.button action="save" text="{{ __('messages.t_send') }}"
                                        :block="false" />
                                </div>
                                </x-slot>
                </x-forms.modal>

        {{-- Section content --}}
        <div class="overflow-y-auto border !border-t-0 !border-b-0 bg-white dark:border-zinc-600 dark:bg-zinc-800">
            <table class="old-tables w-full whitespace-nowrap">
                <thead class="bg-gray-200">
                    <tr tabindex="0"
                        class="h-16 w-full text-sm leading-none text-gray-800 focus:outline-none dark:text-white">

                        <th
                            class="text-[10px] font-bold uppercase tracking-wider text-slate-500 ltr:pl-4 ltr:text-left rtl:pr-4 rtl:text-right dark:text-gray-300">
                            {{ __('messages.t_title') }}</th>
                        <th
                            class="text-left text-[10px] font-bold uppercase tracking-wider text-slate-500 dark:text-gray-300">
                            Total Sent</th>
                        <th
                            class="text-center text-[10px] font-bold uppercase tracking-wider text-slate-500 dark:text-gray-300">
                            {{ __('messages.t_created_at') }}</th>
                    </tr>
                </thead>
                <tbody class="w-full">

                    @if ($marketingNotifications)
                        @foreach ($marketingNotifications as $marketingNotification)
                            <tr class="border-b border-t border-gray-100 bg-white text-sm leading-none text-gray-800 focus:outline-none hover:bg-gray-100 dark:border-zinc-700/40 dark:bg-zinc-600 dark:hover:bg-zinc-700"
                                wire:key="lists-{{ $marketingNotification->id }}">

                                {{-- Title --}}
                                <td class="ltr:pl-4 rtl:pr-4">
                                    <p class="text-xs font-medium">{{ $marketingNotification->title }}</p>
                                </td>
                                {{-- Number of receivers --}}
                                <td class="ltr:pl-4 rtl:pr-4">
                                    <p class="text-xs font-medium">{{ $marketingNotification->number_of_users }}</p>
                                </td>

                                {{-- Created at --}}
                                <td class="text-center">
                                    <p class="text-xs font-medium text-gray-500">
                                        {{ format_date($marketingNotification->created_at, 'ago') }}</p>
                                </td>
                            </tr>
                        @endforeach
                    @endif

                </tbody>
            </table>
        </div>

        {{-- Pagination --}}
        @if ($marketingNotifications?->hasPages())
            <div
                class="flex justify-center rounded-bl-lg rounded-br-lg border-t-0 border-r border-l border-b bg-gray-100 px-4 py-5 sm:px-6">
                {!! $marketingNotifications->links('pagination::tailwind') !!}
            </div>
        @endif

            </div>


        </div>


    </div>
