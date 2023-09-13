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

                            {{-- setting --}}
                            <li aria-current="page">
                                <div class="flex items-center">
                                    <svg aria-hidden="true" class="w-4 h-4 text-gray-400 rtl:rotate-180"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="mx-1 text-sm font-medium text-gray-400 md:mx-2 dark:text-zinc-400">
                                        @lang('messages.t_billing_information')
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
                                {{ __('messages.t_billing_information') }}</h2>
                            <p class="mt-1 text-sm text-gray-500 dark:text-gray-300">
                                {{ __('messages.t_billing_information_subtitle') }}</p>
                        </div>

                        {{-- Section content --}}
                        <div class="grid grid-cols-12 md:gap-x-8 gap-y-8 mb-6">
                            {{-- Session flash message --}}
                            @if (session()->has('message'))
                                <div class="col-span-12 mb-10">
                                    <div class="bg-yellow-100 ltr:border-l-4 rtl:border-r-4 border-yellow-400 p-4 mb-6">
                                        <div class="flex">
                                            <div class="flex-shrink-0">
                                                <svg class="h-5 w-5 text-yellow-400" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                        d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </div>
                                            <div class="ltr:ml-3 rtl:mr-3">
                                                <p class="text-sm text-yellow-700 font-medium">
                                                    {{ session()->get('message') }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif

                            {{-- Firstname --}}
                            <div class="col-span-12 md:col-span-6">
                                <x-forms.text-input label="{{ __('messages.t_firstname') }}"
                                    placeholder="{{ __('messages.t_enter_firstname') }}" model="firstname"
                                    icon="account" />
                            </div>

                            {{-- Lastname --}}
                            <div class="col-span-12 md:col-span-6">
                                <x-forms.text-input label="{{ __('messages.t_lastname') }}"
                                    placeholder="{{ __('messages.t_enter_lastname') }}" model="lastname"
                                    icon="account" />
                            </div>

                            {{-- Company --}}
                            <div class="col-span-12">
                                <x-forms.text-input label="{{ __('messages.t_company') }}"
                                    placeholder="{{ __('messages.t_enter_company_optional') }}" model="company"
                                    icon="domain" />
                            </div>

                            {{-- City --}}
                            <div class="col-span-12 md:col-span-6">
                                <x-forms.text-input label="{{ __('messages.t_city') }}"
                                    placeholder="{{ __('messages.t_enter_city') }}" model="city" icon="city" />
                            </div>

                            {{-- Zip --}}
                            <div class="col-span-12 md:col-span-6">
                                <x-forms.text-input label="{{ __('messages.t_zip') }}"
                                    placeholder="{{ __('messages.t_enter_zip') }}" model="zip" icon="mailbox" />
                            </div>

                            {{-- Country --}}
                            <div class="col-span-12" wire:key="billing-country">
                                <div class="w-full" wire:ignore>
                                    <x-forms.select2 :label="__('messages.t_country')" :placeholder="__('messages.t_choose_country')" model="country"
                                        :options="$countries" :isDefer="true" :isAssociative="false" :componentId="$this->id"
                                        value="id" text="name" />
                                </div>
                            </div>

                            {{-- Address --}}
                            <div class="col-span-12" wire:key="billing-address">
                                <x-forms.textarea label="{{ __('messages.t_address') }}"
                                    placeholder="{{ __('messages.t_enter_address') }}" model="address" rows="8"
                                    icon="map-marker" />
                            </div>

                            {{-- VAT number --}}
                            <div class="col-span-12">
                                <x-forms.text-input label="{{ __('messages.t_vat_number') }}"
                                    placeholder="{{ __('messages.t_enter_vat_number_optional') }}" model="vat_number"
                                    icon="percent" />
                            </div>
                        </div>

                        {{-- action button --}}
                        <div class="flex justify-end">
                            <x-forms.button action="update" text="{{ __('messages.t_update') }}" />
                        </div>

                        {{-- Section header --}}
                        <div class="mb-8 mt-10 pt-5 border-t">
                            <h2 class="text-base leading-6 font-bold text-gray-900 dark:text-gray-100">
                                Payment Card
                            </h2>
                            <p class="mt-1 text-sm text-gray-500 dark:text-gray-300">
                                Update your payment card information below
                            </p>
                        </div>

                        @if ($card)
                            <div
                                class="py-3 px-3 bg-white gap-x-4 dark:bg-zinc-700 rounded-md cursor-pointer flex items-center transition-all duration-200 border border-gray-200 dark:border-zinc-600 shadow-sm">

                                {{-- Logo --}}
                                @switch($card->card_type)
                                    @case('visa')
                                        <img src="{{ placeholder_img() }}" data-src="{{ src('cards/visa.jpg') }}"
                                            class="lazy object-contain h-10 w-10 rounded-md border">
                                    @break

                                    @case('mastercard')
                                        <img src="{{ placeholder_img() }}" data-src="{{ src('cards/master.jpg') }}"
                                            class="lazy object-contain h-10 w-10 rounded-md border">
                                    @break

                                    @case('verve')
                                        <img src="{{ placeholder_img() }}" data-src="{{ src('cards/verve.png') }}"
                                            class="lazy object-contain h-10 w-10 rounded-md border">
                                    @break

                                    @default
                                        <img src="{{ placeholder_img() }}" data-src="{{ placeholder_img() }}"
                                            class="lazy object-contain h-10 w-10 rounded-md border">
                                @endswitch

                                {{-- Name --}}
                                <div class="flex flex-col grow">
                                    <span
                                        class="text-[13px] text-blue-700 dark:text-gray-100 font-bold capitalize">{{ $card->card_type }}
                                        ****{{ $card->last }}</span>
                                    <span class="text-[13px] text-gray-500 dark:text-gray-100 font-bold">
                                        Expires {{ $card->exp_month }}/{{ $card->exp_year }}
                                    </span>
                                </div>

                                <div id="deleteCardButton"
                                    class="grid place-items-center border border-gray-200 dark:border-zinc-600 p-2 rounded">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                        fill="currentColor" class="text-red-600" viewBox="0 0 16 16">
                                        <path
                                            d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />
                                    </svg>
                                </div>
                            </div>
                        @else
                            <div class="pt-3 px-6 text-center text-sm sm:px-14">
                                <svg class="mx-auto h-12 w-12" stroke="currentColor" fill="currentColor"
                                    stroke-width="0" version="1" viewBox="0 0 48 48"
                                    enable-background="new 0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                                    <path fill="#FFA000"
                                        d="M38,12H22l-4-4H8c-2.2,0-4,1.8-4,4v24c0,2.2,1.8,4,4,4h31c1.7,0,3-1.3,3-3V16C42,13.8,40.2,12,38,12z">
                                    </path>
                                    <path fill="#FFCA28"
                                        d="M42.2,18H15.3c-1.9,0-3.6,1.4-3.9,3.3L8,40h31.7c1.9,0,3.6-1.4,3.9-3.3l2.5-14C46.6,20.3,44.7,18,42.2,18z">
                                    </path>
                                </svg>
                                <p class="mt-3 font-semibold text-gray-900 dark:text-zinc-300 text-[15px]">
                                    Empty card</p>
                                <p class="mt-2 text-gray-500 dark:text-zinc-400 max-w-md mx-auto">
                                    No card record to show
                                </p>
                            </div>
                        @endif
                    </div>

                    {{-- Password confirmation button --}}
                    <x-forms.modal placement="top" size="max-w-md" id="confirmModal" target="deleteCardButton"
                        uid="deletUserCard">
                        <x-slot:title>
                            <div>Remove card</div>
                        </x-slot>
                        <x-slot:content>
                            <div class="sm:flex sm:items-start">
                                <div class="mt-3 text-center">
                                    <h3 class="text-base font-medium leading-6 text-gray-600 dark:text-white">
                                        Are you sure you want to delete this card, this action can't be reversed
                                    </h3>
                                </div>
                            </div>
                        </x-slot>
                        <x-slot:footer>
                            <div>
                                <button class="btn-purple" wire:click="deleteCard"
                                    modal-close="myModal">Proceed</button>
                            </div>
                        </x-slot>
                    </x-forms.modal>


                </div>

            </div>
        </div>
    </div>
</main>
